<?php

namespace App\Observers;

use App\Models\Setor;
use Illuminate\Support\Str;

class SetorObserver
{
    /**
     * Handle the Setor "created" event.
     */
    public function creating(Setor $Setor): void
    {
        $Setor->uuid = Str::uuid();
    }

    /**
     * Handle the Setor "created" event.
     */
    public function created(Setor $Setor): void
    {
        //
    }

    /**
     * Handle the Setor "updated" event.
     */
    public function updated(Setor $Setor): void
    {
        //
    }

    /**
     * Handle the Setor "deleted" event.
     */
    public function deleted(Setor $Setor): void
    {
        //
    }

    /**
     * Handle the Setor "restored" event.
     */
    public function restored(Setor $Setor): void
    {
        //
    }

    /**
     * Handle the Setor "force deleted" event.
     */
    public function forceDeleted(Setor $Setor): void
    {
        //
    }
}
