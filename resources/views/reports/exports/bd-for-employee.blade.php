<table>
    <tr>
        <td colspan="12">PERIOD {{$period}}</td>
    </tr>
    <thead>
        <tr>
            <th>No</th>
            <th>Empno</th>
            <th>Fullname</th>
            <th>Join</th>
            <th>Start</th>
            <th>End</th>
            <th>Resign</th>
            <th>Days (Tot Act Day+Public Holiday exl.sat sun)</th>
            <th>Basic Sal</th>
            <th>Actual Sal</th>
            <th>CdoDays</th>
            <th>CDO</th>
            <th>Wee Days</th>
            <th>Wee Hour</th>
            <th>Shift Day</th>
            <th>Shift</th>
            <th>Allowance BTR</th>
            <th>Telp</th>
            <th>Parking</th>
            <th>THR</th>
            <th>Overtime</th>
            <th>incentive</th>
            <th>position all</th>
            <th>Perform.Review</th>
            <th>Oth.inc</th>
            <th>Remark Other income</th>
            <th>Jamsostek 2%</th>
            <th>Tax</th>
            <th>Deduction</th>
            <th>dedAdv_remark</th>
            <th>Ded After Pay</th>
            <th>ded Remark</th>
            <th>THP</th>
            <th>Dept -Project</th>
            <th>Freelance</th>
            <th>Position</th>
            <th>insuranceplan</th>
            <th>NPWPNo</th>
            <th>taxstatus</th>
            <th>ip</th>
            <th>Sex</th>
            <th>BPJS</th>
            <th>BPJS NO</th>
            <th>bpjs_pension_karyawan</th>
            <th>taxrefund</th>
            <th>joinprev</th>
            <th>employment</th>
        </tr>

    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$record->employee->empno}}</td>
            <td>{{$record->employee->personalData->first_name}} {{$record->employee->personalData->last_name}}</td>
            <td>{{$record->contract->join_date}}</td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_start_date :
                $record->contract->tanggal_permanent}}</td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_end_date : ''}}</td>
            <td></td> {{-- resign --}}
            <td></td>
            <td>{{ $record->basic_salary }}</td>
            <td>{{ $record->basic_salary }}</td>
            <td></td>{{-- CDO Days --}}
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>{{-- Shift --}}
            <td></td>{{-- allowance BTR --}}
            <td>
                @php $phoneAllowance = $record->allowancesDetails->where('type','Phone Allowance')->first() @endphp
                {{ $phoneAllowance ? $phoneAllowance->amount : '' }}
            </td>
            <td>
                @php $parkingAllowance = $record->allowancesDetails->where('type','Parking Allowance')->first() @endphp
                {{ $parkingAllowance ? $parkingAllowance->amount : '' }}
            </td>
            <td></td>{{-- THR --}}

            <td></td>
            <td></td>
            <td></td>
            <td>
                @php $performanceReview = $record->allowancesDetails->where('type','Performance Review')->first()
                @endphp
                {{ $performanceReview ? $performanceReview->amount : '' }}
            </td>
            <td>{{ $record->allowances }}</td>
            <td></td>{{-- remark other income --}}
            <td>{{ $record->basic_salary * 0.02 }}</td>
            <td>{{ $record->tax_ter_per_month }}</td>
            <td>{{ $record->deductions }}</td>
            <td></td>{{-- dedAdv_remark--}}
            <td></td>{{-- Ded After Pay--}}
            <td></td>{{-- ded Remark--}}
            <td>{{ $record->take_homepay }}</td>
            <td></td>
            <td></td>
            <td>{{$record->contract->currentPosition ? $record->contract->currentPosition->title : ''}}</td>
            <td></td> {{-- insuranceplan --}}

            <td>{{ $record->employee->personalData->npwp }}</td>
            <td>{{ $record->contract->tax_status }}</td>
            <td></td>
            <td>{{ $record->employee->personalData->sex }}</td>
            <td>{{ $record->deduct_bpjs_kesehatan }}</td>
            <td>{{ $record->employee->additionalDetails->bpjs_no }}</td>
            <td>{{ $record->deduct_bpjs_pension }}</td>
            <td></td>
            <td>{{ $record->contract->join_date_from_previous }}</td>
            <td>{{ $record->contract->previousEmployment->company }}</td>
        </tr>
        @endforeach
    </tbody>
</table>