<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedicao extends Model
{
    use HasFactory;

    protected $table = 'expedicoes';

    protected $fillable = [
        'uuid',
        'descricao',
        'qtd_total_agendas',
        'qtd_total_cadernos',
        'cliente_uuid'
    ];
}
