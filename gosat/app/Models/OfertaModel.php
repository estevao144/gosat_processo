<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfertaModel extends Model
{
    use HasFactory;

    protected $table = 'ofertas';
    public $timestamps = true;
    protected $fillable = 
    [
        'cpf', 
        'instituicaoFinanceira',
        'valorAPagar',
        'valorSolicitado',
        'taxaJuros',
        'qntParcelas',
        'created_at', 'updated_at'
    ];


    
}