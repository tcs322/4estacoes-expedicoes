<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipes';

    protected $fillable = [
        'uuid',
        'nome',
        'situacao',
    ];

    protected $casts = [
        'situacao' => 'integer',
    ];

    function servidores() {
        return $this->hasMany(Servidor::class, 'equipe_uuid', 'uuid');
    }
}
