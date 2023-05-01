<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\OfertaModel;



class PropostaController extends Controller
{
    public function index(Request $request)
    {   
        $cpf = $request->session()->get('cpf');
        $ofertas = $request->session()->get('ofertas');
        $instituicoes = $request->session()->get('instituicoes');
        

        usort($ofertas, function($a, $b) {
            return $a['jurosMes'] <=> $b['jurosMes'];
        });
        
        $ofertasTratadas = [];
        
        // Percorre as ofertas e cria um novo array com os dados tratados
        foreach ($ofertas as $key => $oferta) {
            $instituicao = $instituicoes[$key]['nome_instituicao'];
            $valorAPagar = number_format($oferta['valorMax'] / $oferta['QntParcelaMax'], 2, ',', '.');
            $valorSolicitado = number_format($oferta['valorMax'], 2, ',', '.');
            $taxaJuros = number_format($oferta['jurosMes'] * 100, 2, ',', '.').'%';
            $qntParcelas = $oferta['QntParcelaMax'];
        
            $ofertasTratadas[] = [
                'instituicaoFinanceira' => $instituicao,
                'valorAPagar' => $valorAPagar,
                'valorSolicitado' => $valorSolicitado,
                'taxaJuros' => $taxaJuros,
                'qntParcelas' => $qntParcelas,
            ];
        }
        session(['ofertasTratadas' => $ofertasTratadas]);
        return view('propostas', ['ofertasTratadas' => $ofertasTratadas]);
    }
    
}
