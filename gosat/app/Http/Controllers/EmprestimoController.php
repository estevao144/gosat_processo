<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class EmprestimoController extends Controller
{
    public function index($cpf)
    {
        

        $client = new Client();

        // Faz a chamada à API para obter as instituições
        $response = $client->post('https://dev.gosat.org/api/v1/simulacao/credito', [
            'json' => [
                'cpf' => $cpf,
            ]
        ]);
        
        $data = json_decode($response->getBody(), true);

        // Cria um array com as instituições e os códigos de modalidade
        $instituicoes = array();
        foreach ($data['instituicoes'] as $instituicao) {
            $nome = $instituicao['nome'];
            $id = $instituicao['id'];
            foreach ($instituicao['modalidades'] as $modalidade) {
                $cod = $modalidade['cod'];
                $nomeInstituicao = $nome;
                $instituicoes[] = array('instituicao_id' => $id, 'codModalidade' => $cod, 'nome_instituicao' => $nomeInstituicao);
            }
        }

        
        // Faz a chamada à API para cada instituição
        $ofertas = array();
        foreach ($instituicoes as $instituicao) {
            $response1 = $client->post('https://dev.gosat.org/api/v1/simulacao/oferta', [
                'json' => [
                    'cpf' => $cpf,
                    'instituicao_id' => $instituicao['instituicao_id'],
                    'codModalidade' => $instituicao['codModalidade'],  
                ]
            ]);
            
            $ofertas[] = json_decode($response1->getBody(), true);
        }
        
        // Salva as ofertas na sessão
        session(['instituicoes' => $instituicoes]);
        session(['ofertas' => $ofertas]);


        return view('simulacao', ['cpf' => $cpf, 'data' => $data]);
    }
}
