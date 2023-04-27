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

    return view('simulacao', ['data' => $data]);
}
}
