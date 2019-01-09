<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
    <div class="table-striped">
        <table id="table_id" class="table display">
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
</body>
</html>
