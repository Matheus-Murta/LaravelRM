<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv';

    protected $table = 'TCCOTACAO';

    protected $primaryKey = 'CODCOTACAO';
    protected $fillable = [
        'CODCOTACAO',
        'DESCRICAO',
        'DATAENTREGA',
        'DATCOTACAO'
    ];
}
