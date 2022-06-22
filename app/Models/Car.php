<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [

        'id',
        'placa',
        'marca',
        'modelo',
        'cor',
        'ano',
        'imagem01',
        'imagem02',
        'imagem03',
        'imagem04',
        'imagem05',
        'divida',
        'financiamento',
        'quitacao',
        'multa',
        'ipva',
        'licensiamento',
        'outros',
        'nomeVendedor',
        'valorVenda',
        'dataEntrada',
        'dataSaida'    


    ];
}
