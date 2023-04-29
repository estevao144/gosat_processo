<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PropostaController extends Controller
{
    public function index(Request $request)
 
    {   
        $QntParcelaMin = $request->input('QntParcelaMin');
        $QntParcelaMax = $request->input('QntParcelaMax');
        $valorMin = $request->input('valorMin');
        $valorMax = $request->input('valorMax');
        $jurosMes = $request->input('jurosMes');

        echo $QntParcelaMin;

        return view('propostas', ['QntParcelaMin' => $QntParcelaMin, 'QntParcelaMax' => $QntParcelaMax, 'valorMin' => $valorMin, 'valorMax' => $valorMax, 'jurosMes' => $jurosMes]);
    }
    
}
