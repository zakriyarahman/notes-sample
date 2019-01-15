@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        {{-- @include('admin.sidebar') --}}

        <div class="col-md">
            <div class="card border border-primary">
                <div class="card-header">Notes List</div>
                <div class="card-body">
                    <div class="d-flex flex-row-reverse pb-2">
                        <a href="{{ route('notes.create') }}" class="btn btn-sm btn-success" title="Add New Note">
                            Add New<i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="table-striped">
                        <table id="datatable" class="table display">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Creation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notesList as $note)
                                <tr>
                                    <td>{{ $note->id }}</td>
                                    <td>
                                        <div class=".flex-column">
                                            <div>
                                                {{ $note->name }}
                                            </div>
                                            <div>
                                                <span class="small">
                                                    {{ $note->email }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $note->content }}</td>
                                    <td>
                                        <div class=".flex-column">
                                            <div>
                                                {{ data_get($note, 'createdBy.name', 'N/A') }}
                                            </div>
                                            <div>
                                                <span class="small">
                                                    {{ $note->created_at->format('m-d-y') }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <div>
                                                {!! Form::open(['route'=>['notes.destroy', $note], 'method'=>'DELETE']) !!}
                                                <button class="close" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
{{--                     <div class="d-flex flex-row-reverse">
                        {{ $notesList->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
