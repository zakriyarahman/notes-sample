@extends('layouts.app')

@section('content')
    <div class="container">
    <h4>Create a Note</h4><hr>
        {!! Form::open(['route'=>array('notes.store'),'class'=>'form-horizontal']) !!}
        @include('notes.form')
        <div class="form-group form-actions row">
            <div class="col-sm-9 col-sm-offset-2">
                {!! Form::submit('Create Note', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
