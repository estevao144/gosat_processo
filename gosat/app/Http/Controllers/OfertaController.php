<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\OfertaModel;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index(Request $request)
    {
        $ofertasTratadas = $request->session()->get('ofertasTratadas');
    
        foreach ($ofertasTratadas as $oferta) {
            $novaOferta = new OfertaModel([
                'cpf' => $request->session()->get('cpf'),
                'instituicaoFinanceira' => $oferta['instituicaoFinanceira'],
                'valorAPagar' => str_replace(',', '.', $oferta['valorAPagar']),
                'valorSolicitado' => str_replace('.', '', str_replace(',', '.', $oferta['valorSolicitado'])),
                'taxaJuros' => str_replace('%', '', str_replace(',', '.', $oferta['taxaJuros'])),
                'qntParcelas' => $oferta['qntParcelas'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            $novaOferta->save();
        }
    
        return view('salvarProposta');
    }
}
