<?php

namespace App\Http\View;

use Illuminate\View\View;

class UserComposer
{
    /**
     * The name of the composer that is passed
     *
     * @var name
     */
    protected $name = 'authUser';

    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with($this->name, $this->user);
    }
}
