<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = 'Estevão';

    return view('welcome', ['nome' => $nome]);
});

Route::get('/simulacoes', function () {
      $nome = 'Estevão';
      $instituicoes = [
        [
            'id' => 1,
            'nome' => 'Banco pingApp',
            'modalidades' => [
                [
                    'nome' => 'Crédito Pessoal',
                    'taxaJuros' => 0.02,
                    'modalidades' => [
                        [
                            'nome' => 'Crédito Pessoal',
                            'cod' => 3,
                        ],
                        [
                            'nome' => 'Crédito Pessoal',
                            'cod' => 13,
                        ],
                    ],
                ],
                [
                    'id' => 'a50edteste',
                    'nome' => 'Crédito Imobiliário',
                    'taxaJuros' => 0.09,
                    'parcelas' => [
                        [
                            'quantidade' => 120,
                            'valor' => 100000,
                        ],
                        [
                            'quantidade' => 180,
                            'valor' => 200000,
                        ],
                        [
                            'quantidade' => 240,
                            'valor' => 300000,
                        ],
                        [
                            'quantidade' => 300,
                            'valor' => 400000,
                        ],
                    ],
                ],
            ],
        ],
    ];
         $simulacao = [
                [
                 'cpf' => '12345678910',
                 'instituicao_id' => 1,
                 'codModalidade' => 'a50edteste'
                ],
                [
                'qntParcelaMin' => 10,
                'qntParcelaMax' => 20,
                'valorMin' => 1000,
                'valorMax' => 10000,
                'taxaJuros' => 0.5,
                ]

             ];
    return view('simulacao', ['nome' => $nome, 'simulacao' => $simulacao, 'instituicoes' => $instituicoes]);
});

Route::get('/simulacao/{id}', function ($id = null) {
    return view('simulacao', ['id' => $id]);
});