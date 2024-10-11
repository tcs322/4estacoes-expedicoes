<?php

namespace App\Observers;

use App\Models\PostoTrabalho;
use Illuminate\Support\Str;

class PostoTrabalhoObserver
{
    /**
     * Handle the PostoTrabalho "created" event.
     */
    public function creating(PostoTrabalho $postoTrabalho): void
    {
        $postoTrabalho->uuid = Str::uuid();
    }

    /**
     * Handle the PostoTrabalho "created" event.
     */
    public function created(PostoTrabalho $postoTrabalho): void
    {
        //
    }

    /**
     * Handle the PostoTrabalho "updated" event.
     */
    public function updated(PostoTrabalho $postoTrabalho): void
    {
        //
    }

    /**
     * Handle the PostoTrabalho "deleted" event.
     */
    public function deleted(PostoTrabalho $postoTrabalho): void
    {
        //
    }

    /**
     * Handle the PostoTrabalho "restored" event.
     */
    public function restored(PostoTrabalho $postoTrabalho): void
    {
        //
    }

    /**
     * Handle the PostoTrabalho "force deleted" event.
     */
    public function forceDeleted(PostoTrabalho $postoTrabalho): void
    {
        //
    }
}
