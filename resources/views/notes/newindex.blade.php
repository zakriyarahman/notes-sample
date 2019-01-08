@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- @include('admin.sidebar') --}}

        <div class="col-md">
            <div class="card border border-primary">
                <div class="card-header">Notes List</div>
                <div class="card-body">
                    <a href="{{ route('notes.create') }}" class="btn btn-sm btn-success btn-sm d-flex flex-column " title="Add New Note">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <div class="table-striped">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Content</th>
                                    <th>Creator</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notesList as $note)
                                <tr>
                                    <td>{{ $note->id }}</td>
                                    <td>{{ $note->name }}</td>
                                    <td>{{ $note->email }}</td>
                                    <td>{{ $note->content }}</td>
                                    <td>{{ data_get($note, 'createdBy.name', 'N/A') }}</td>
                                    <td>
                                        {!! Form::open(['route'=>['notes.destroy', $note], 'method'=>'DELETE']) !!}
                                        <button class="close" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $notesList->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
