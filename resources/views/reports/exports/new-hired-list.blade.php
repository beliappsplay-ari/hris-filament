<table>
    <tr>
        <td colspan="12">NEW HIRED LIST PERIOD {{$period}}</td>
    </tr>
    <thead>
        <tr>
             <th>No.</th>
    <th>ID No</th>
    <th>Name</th>
    <th>Join Date</th>
        </tr>

    </thead>
    <tbody>
        @foreach($records as $record)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $record->empno ? $record->empno : '' }}</td>
            <td>{{ $record->first_name ? $record->first_name : '' }}</td>
            <td>{{ $record->join_date ? $record->join_date : '' }}</td>
        </tr>
        @endforeach
    </tbody>

</table>