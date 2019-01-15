@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
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
{{--                     <div class="d-flex flex-row-reverse">
                        {{ $notesList->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );
    </script>
@endsection
