@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-right">
        <a href="{!! route('notes.create') !!}" class="btn btn-sm btn-default">
           <i class="fa fa-plus"></i>
           Add New Note
        </a>
    </div>
    <div>
        <table class="table table-striped table-bordered" id="table">
            <thead>
                <tr class="table-primary">
                   <th>ID</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Content</th>
                   <th>Creator</th>
                   <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->name }}</td>
                    <td>{{ $note->email }}</td>
                    <td>{{ $note->content }}</td>
                    <td>{{ data_get($note, 'createdBy.name', 'N/A') }}</td>
                    <td>
                        {!! Form::open(['route'=>['notes.destroy', $note], 'method'=>'DELETE']) !!}
                            <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $notes->links() }}
    </div>
</div>
@endsection
