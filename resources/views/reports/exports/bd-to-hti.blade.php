<table>
    <tr>
        <td colspan="12">PERIOD {{$period}}</td>
    </tr>
    <thead>
        <tr>
            <th>No</th>
            <th>Empno</th>
            <th>HTI ID</th>
            <th>Fullname</th>
            <th>Nationality</th>
            <th>Position</th>
            <th>Join</th>
            <th>Start</th>
            <th>End</th>
            <th>Resign</th>
            <th>Status</th>
            <th>Actual Working Days(Actual Month)</th>
            <th>Actual Salary</th>
            <th>Actual Working Days(Previous Month)</th>
            <th>Actual Salary Prorate</th>
            <th>0</th>
            <th>Phone</th>
            <th>Parking</th>
            <th>Wee Days</th>
            <th>Wee Hour</th>
            <th>CdoDays</th>
            <th>CDO</th>
            <th>Shift</th>
            <th>THR</th>
            <th>Sal Actual</th>
            <th>3.7%</th>
            <th>0.54%</th>
            <th>BT All</th>
            <th>Others</th>
            <th>Others Income Remark</th>
            <th>Deduct</th>
            <th>Deduction Remark</th>
            <th>Insurance</th>
            <th>Perform Review</th>
            <th>Recon to HTI</th>
            <th>Remark</th>
            <th>Gross Inc</th>
            <th>Fee</th>
            <th>Claim</th>
            <th>Vat</th>
            <th>PPH</th>
            <th>Tot.Inv</th>
            <th>Position</th>
            <th>InsPlan</th>
        </tr>
       
    </thead>
    <tbody>
        @foreach($records as $record)
        
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$record->employee->empno}}</td>
            <td>{{$record->contract->hti_id}}</td>
            <td>{{$record->employee->personalData->first_name}} {{$record->employee->personalData->last_name}}</td>
            <td>{{$record->employee->personalData->nationality}}</td>
            <td>{{$record->contract->currentPosition ? $record->contract->currentPosition->title : ''}}</td>
            <td>{{$record->contract->join_date}}</td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_start_date : $record->contract->tanggal_permanent}}</td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_end_date : ''}}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                @php $phoneAllowance = $record->allowancesDetails->where('type','Phone Allowance')->first() @endphp
                {{ $phoneAllowance ? $phoneAllowance->amount : '' }}
            </td>
            <td>
                @php $parkingAllowance = $record->allowancesDetails->where('type','Parking Allowance')->first() @endphp
                {{ $parkingAllowance ? $parkingAllowance->amount : '' }}
            </td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>{{ $record->basic_salary }}</td>
            <td>{{ $record->basic_salary * 0.037 }}</td>
            <td>{{ $record->basic_salary * 0.0054 }}</td>
            <td>0</td>
            <td>{{ $record->allowances }}</td>
            <td></td>
            <td>{{ $record->deductions }}</td>
            <td></td>
            <td>{{ $record->insurance }}</td>
            <td>
                @php $performanceReview = $record->allowancesDetails->where('type','Performance Review')->first() @endphp
                {{ $performanceReview ? $performanceReview->amount : '' }}
            </td>
            <td></td>
            <td></td>
            <td>{{ $record->gross }}</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td></td>
            <td></td>
            <td>{{$record->contract->currentPosition ? $record->contract->currentPosition->title : ''}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>