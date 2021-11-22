<div class="table-responsive">
    <table class="table" id="students-table">
        <thead class ="bg-success">
            <tr>
                <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Citizenship</th>
        <th>Religion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $students)
            <tr class ="bg-primary">
                <td>{{ $students->firstname }}</td>
            <td>{{ $students->middlename }}</td>
            <td>{{ $students->lastname }}</td>
            <td>{{ $students->birthdate }}</td>
            <td>{{ $students->gender }}</td>
            <td>{{ $students->address }}</td>
            <td>{{ $students->citizenship }}</td>
            <td>{{ $students->religion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['students.destroy', $students->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$students->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('students.edit', [$students->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
