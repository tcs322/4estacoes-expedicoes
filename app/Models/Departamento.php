<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamentos';

    protected $fillable = [
        'uuid',
        'postos_trabalho_uuid',
        'setores_uuid',
        'nome'
    ];

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setores_uuid', 'uuid');
    }

    public function postoTrabalho()
    {
        return $this->belongsTo(PostoTrabalho::class, 'postos_trabalho_uuid', 'uuid');
    }
}
