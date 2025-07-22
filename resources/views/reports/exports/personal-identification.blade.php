<table>
    <tr>
        <td colspan="12">PERIOD {{$period}}</td>
    </tr>
    <thead>
        <tr>
            <th>personal identification</th>
            <th>Huawei ID</th>
            <th>Empno</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Nationality </th>
            <th>Birth date</th>
            <th>Blood</th>
            <th>Weight</th>
            <th>Height</th>
            <th>Ethnic</th>
            <th>Personal Email</th>
            <th>HTI Email </th>
            <th>Identity No </th>
            <th>Hire Date </th>
            <th>Degree</th>
            <th>Major Education Period </th>
            <th>Start Education Period </th>
            <th>Start date</th>
            <th>End date</th>
            <th>Join Date</th>
            <th>HP private</th>
            <th>Date Resigned</th>
            <th>Name of Education</th>
            <th>Hay level</th>
            <th>Post Code</th>
            <th>Division </th>
            <th>Passport NO </th>
            <th>Homebase </th>
            <th>Position </th>
            <th>Telp Limit </th>
            <th>Registered</th>
            <th>Efective Date</th>
            <th>Permanent Date</th>
            <th>Job Status</th>
            <th>Current Workbase</th>
            <th>Original Workbase</th>
            <th>Permanent Address</th>
            <th>Permanent City</th>
            <th>Scope Work</th>
            <th>Previous Employee</th>
            <th>Hire</th>
            <th>New Office HP (From DGE)</th>
            <th>Telp NO</th>
        </tr>

    </thead>
    <tbody>
        @foreach($records as $record)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>Huawei ID</td>
            <td>{{ $record->employee->empno }}</td>
            <td>{{ $record->employee->personalData->first_name }} {{ $record->employee->personalData->last_name }}</td>
            <td>{{ $record->employee->personalData->sex }}</td>
            <td>{{ $record->employee->personalData->nationality }} </td>
            <td>{{ $record->employee->personalData->birthday }}</td>
            <td>{{ $record->employee->additionalDetails->blood }}</td>
            <td>{{ $record->employee->additionalDetails->weight }}</td>
            <td>{{ $record->employee->additionalDetails->height }}</td>
            <td>{{ $record->employee->additionalDetails->ethnic }}</td>
            <td>{{ $record->employee->additionalDetails->personal_email }}</td>
            <td>{{ $record->employee->additionalDetails->hti_email }}</td>
            <td>{{ $record->employee->personalData->ktp }}</td>
            <td>{{ $record->contract->join_date->format('Y-m-d') }}</td>
            <td>
                
                {{ $record->lastEducation ? $record->lastEducation->type : '' }}
            </td>
            <td>{{ $record->lastEducation ? $record->lastEducation->major : '' }} </td>
            <td>{{ $record->lastEducation ? $record->lastEducation->period : '' }} </td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_start_date : $record->contract->tanggal_permanent}}</td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_end_date : ''}}</td>
            <td>{{ $record->contract->join_date->format('Y-m-d') }}</td>
            <td>{{ $record->employee->additionalDetails->no_telephone }}</td>
            <td>{{ $record->contract->resign_date }}</td>
            <td>{{ $record->lastEducation ? $record->lastEducation->name : '' }}</td>
            <td>{{ $record->contract->hay_level }}</td>
            <td>{{ $record->employee->additionalDetails->pos_code }}</td>

             <!--<td>
                @php $phoneAllowance = $record->allowancesDetails->where('type','Phone Allowance')->first() @endphp
                {{ $phoneAllowance ? $phoneAllowance->amount : '' }}
            </td>-->

            <td>{{ $record->contract->currentDivision->name }}</td>
            <td>{{ $record->employee->personalData->passport }}</td>
            <td>{{ $record->contract->currentHomebase->name }}</td>
            <td>{{ $record->contract->currentPosition->title }}</td>
            <td>
                @php $phoneAllowance = $record->allowancesDetails->where('type','Phone Allowance')->first() @endphp
                {{ $phoneAllowance ? $phoneAllowance->amount : '' }}
            </td>
            <td>On</td>
            <td>Efective Date</td>
            <td>{{$record->contract->employee_status == 'Permanent' ? $record->contract->tanggal_permanent : ''}}</td>
            <td>{{ $record->contract->employee_status }}</td>
            <td>{{$record->contract->current_workbase}}</td>
            <td>{{$record->contract->original_workbase}}</td>
            <td>{{ $record->employee->personalData->permanent_address }}</td>
            <td>{{ $record->employee->personalData->permanent_city }}</td>
            <td></td>
            <td>{{$record->contract->previousEmployment->company}}</td>
            <td></td>
            <td>New Office HP (From DGE)</td>
            <td>{{ $record->employee->additionalDetails->telephone }}</td>
        </tr>
        @endforeach
    </tbody>

</table>