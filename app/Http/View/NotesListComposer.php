<?php

namespace App\Http\View;

use App\Note;
use Illuminate\View\View;

class NotesListComposer
{
    /**
     * The name of the composer that is passed
     *
     * @var name
     */
    protected $name = 'notesList';

    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with($this->name, $this->getData());
    }

    /**
     * Get the data
     *
     * @return \Illuminate\Support\Collection
     */
    public function getData()
    {
        return $this->note->with('createdBy')->orderByDesc('created_at')->paginate(10);
    }
}
