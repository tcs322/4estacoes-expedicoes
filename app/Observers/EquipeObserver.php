<?php

namespace App\Observers;

use App\Models\Equipe;
use Illuminate\Support\Str;

class EquipeObserver
{
    /**
     * Handle the Equipe "created" event.
     */
    public function creating(Equipe $equipe): void
    {
        $equipe->uuid = Str::uuid();
    }

    /**
     * Handle the Equipe "created" event.
     */
    public function created(Equipe $equipe): void
    {
        //
    }

    /**
     * Handle the Equipe "updated" event.
     */
    public function updated(Equipe $equipe): void
    {
        //
    }

    /**
     * Handle the Equipe "deleted" event.
     */
    public function deleted(Equipe $equipe): void
    {
        //
    }

    /**
     * Handle the Equipe "restored" event.
     */
    public function restored(Equipe $equipe): void
    {
        //
    }

    /**
     * Handle the Equipe "force deleted" event.
     */
    public function forceDeleted(Equipe $equipe): void
    {
        //
    }
}
