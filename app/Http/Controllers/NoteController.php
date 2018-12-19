<?php

namespace App\Http\Controllers;

use App\Note;
use App\Http\Requests\Notes\StoreRequest;
use App\Http\Requests\Notes\UpdateRequest;
use App\Http\Requests\Notes\DestroyRequest;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Bind the implementation
     *
     * @var App\Note
     */
    protected $note;

    /**
     * View resource
     *
     * @var string
     */
    protected $resource = 'notes.';

    /**
     * Construction
     *
     * @param App\Note $note
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Build the view
        $view = $this->resource . __FUNCTION__;

        // Paginate the view
        $notes = $this->note->with('createdBy')->paginate(10);

        // Render the view
        return view($view)->with(compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Build the view
        $view = $this->resource . __FUNCTION__;
        // Render the view
        return view($view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Notes\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $this->note->create($request->all());
        // Redirect
        return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Note $note)
    {
        $note->update($request->all());
        // Redirect
        return redirect()->route('notes.show', [$note]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        // Redirect back
        return redirect()->back();
    }
}
