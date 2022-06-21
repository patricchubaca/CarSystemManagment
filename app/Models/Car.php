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
