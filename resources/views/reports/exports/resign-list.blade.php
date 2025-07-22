<table>
    <tr>
        <td colspan="12">PERIOD {{$period}}</td>
    </tr>
    <thead>
        <tr>
             <th>No.</th>
    <th>ID No</th>
    <th>Name</th>
    <th>Resign Date</th>
        </tr>

    </thead>
    <tbody>
        @foreach($records as $record)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $record->empno ? $record->empno : '' }}</td>
            <td>{{ $record->first_name ? $record->first_name : '' }}</td>
            <td>{{ $record->resign_date ? $record->resign_date : '' }}</td>
        </tr>
        @endforeach
    </tbody>

</table>