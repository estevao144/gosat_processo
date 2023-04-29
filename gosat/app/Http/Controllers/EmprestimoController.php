<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class EmprestimoController extends Controller
{
    public function index($cpf)
{
    $client = new Client();
    $response = $client->post('https://dev.gosat.org/api/v1/simulacao/credito', [
        'json' => [
            'cpf' => $cpf,
        ]
    ]);
    
    $data = json_decode($response->getBody(), true);
    
    
    $instituicao_id = $data['instituicoes'][1]['id'];
    $codModalidade = $data['instituicoes'][1]['modalidades'][0]['cod'];

    $response1 = $client->post('https://dev.gosat.org/api/v1/simulacao/oferta', [
        'json' => [
            'cpf' => $cpf,
            'instituicao_id' => $instituicao_id,
            'codModalidade' => $codModalidade,  
        ]
    ]);

    $data1 = json_decode($response1->getBody(), true);

    return view('simulacao', ['cpf' => $cpf, 'data' => $data, 'data1' => $data1]);
}



}