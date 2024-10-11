<?php

namespace App\Observers;

use App\Models\Departamento;
use Illuminate\Support\Str;

class DepartamentoObserver
{
    /**
     * Handle the Departamento "created" event.
     */
    public function creating(Departamento $departamento): void
    {
        $departamento->uuid = Str::uuid();
    }
}
