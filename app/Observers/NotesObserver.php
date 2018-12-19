<?php

namespace App\Observers;

use App\Note;

class NotesObserver
{
    /**
     * Handle the note "creating" event.
     *
     * @param  \App\Note  $note
     * @return void
     */
    public function creating(Note $note)
    {
        if(empty(auth()->user())) return;
        $note->creator = $note->creator ?: auth()->user()->getKey();
    }

    /**
     * Handle the note "created" event.
     *
     * @param  \App\Note  $note
     * @return void
     */
    public function created(Note $note)
    {
        //
    }

    /**
     * Handle the note "updated" event.
     *
     * @param  \App\Note  $note
     * @return void
     */
    public function updated(Note $note)
    {
        //
    }

    /**
     * Handle the note "deleted" event.
     *
     * @param  \App\Note  $note
     * @return void
     */
    public function deleted(Note $note)
    {
        //
    }

    /**
     * Handle the note "restored" event.
     *
     * @param  \App\Note  $note
     * @return void
     */
    public function restored(Note $note)
    {
        //
    }

    /**
     * Handle the note "force deleted" event.
     *
     * @param  \App\Note  $note
     * @return void
     */
    public function forceDeleted(Note $note)
    {
        //
    }
}
