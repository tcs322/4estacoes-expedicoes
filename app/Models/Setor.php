<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setores';

    protected $fillable = [
        'nome',
        'uuid',
        'postos_trabalho_uuid'
    ];

    public function postoTrabalho()
    {
        return $this->hasOne(PostoTrabalho::class, 'uuid', 'postos_trabalho_uuid');
    }

    public function departamentos()
    {
        return $this->hasMany(Departamento::class, 'postos_trabalho_uuid', 'uuid');
    }
}
