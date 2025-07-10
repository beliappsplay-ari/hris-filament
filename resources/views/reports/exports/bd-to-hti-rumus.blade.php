<table>
    <tr>
        <td colspan="12">PERIOD {{$period}}</td>
    </tr>
    <thead>
        <tr>
            <td>No.</td>
            <td>Company</td>
            <td>Category (DCPE/ARP/C to ARP)</td>
            <td>Huawei ID</td>
            <td>Fullname</td>
            <td>Position</td>
            <td>Nationality</td>
            <td>Workscope</td>
            <td>COA Number</td>
            <td>Timesheet</td>
            <td>Payroll</td>
            <td>Join Date</td>
            <td>Start Date</td>
            <td>End Date</td>
            <td>Resign Date</td>
            <td>Status</td>
            <td>Previous Service Fee</td>
            <td>Previous Transport Allowance</td>
            <td>New Monthly Service Fee</td>
            <td>Transport Allowance</td>
            <td>Actual Working Day (Actual Month)</td>
            <td>Service fee in current month</td>
            <td>Transport Allowance in current month</td>
            <td>Actual Working Day (For Previous Month)</td>
            <td>Actual Service Fee Prorate</td>
            <td>Transport Allowance Prorate</td>
            <td>CATEGORY (A/B)</td>
            <td>(Overtime) Week Days &amp; Public Leave (Hours) (1.5x)</td>
            <td>(Overtime) Week Days &amp; Public Leave (Hours) (2x)</td>
            <td>(Overtime) Week End(Hours)(2x)</td>
            <td>(Overtime) Week End(Hours)(3x)</td>
            <td>(Overtime) Week End(Hours)(4x)</td>
            <td>Total Hours OT</td>
            <td>Total Hours OT (Multiple)</td>
            <td>(Overtime) Total Overtime (Amount)</td>
            <td>(Overtime) Rermark Overtime</td>
            <td>WEE Hours (Days)</td>
            <td>WEE Hours (Amount) (Rp 100.000 / Day)</td>
            <td>Remark WEE Hours</td>
            <td>Public Holidays (Hours)</td>
            <td>Additional Leave (AL) (8 Hours = 1 AL)</td>
            <td>Incentive On Week End (Days)</td>
            <td>Incentive on Week End (Amount) (Rp 200.000 / Day)</td>
            <td>Week Days &amp; Public Leave (Hours) (X2)</td>
            <td>Week Days &amp; Public Leave (Hours)(X2)</td>
            <td>Week End (Hours) &amp; Public Holiday (Hours)(X2)</td>
            <td>Week End (Hours) &amp; Public Holiday (Hours)(X3)</td>
            <td>Week End (Hours) &amp; Public Holiday (Hours)(X4)</td>
            <td>(Overtime Shift) Total Hours OT</td>
            <td>(Overtime Shift) Total Hours OT (Multiple)</td>
            <td>(Overtime Shift) Total Overtime (Amount)</td>
            <td>(Overtime Shift) Remark Overtime</td>
            <td>BPJS Ketenagakerjaan 4.24%</td>
            <td>BPJS Kesehatan 4%</td>
            <td>BPJS Pension 2%</td>
            <td>Insurance Plan</td>
            <td>Insurance Amount(IDR)</td>
            <td>Marital Status</td>
            <td>THR</td>
            <td>Total Other Income</td>
            <td>Other Income Galloping</td>
            <td>Other Income EOC Compensation</td>
            <td>Other Income Leave Compensation (Resign Employee)</td>
            <td>Other Income Severance</td>
            <td>Other Income Separation</td>
            <td>Other Income Incentive</td>
            <td>Other Income Remark of Other Income</td>
            <td>Business Trip Allowace</td>
            <td>Outstanding Leave Carry Over Leave 2023 to 2024</td>
            <td>Outstanding Leave Take Leave 2023</td>
            <td>Oustanding Leave 2023</td>
            <td>Oustanding Leave Remark Leave 2023</td>
            <td>Outstanding Leave 2024</td>
            <td>Take Leave/Public leave (Previous month) 2024</td>
            <td>Outstanding Leave 2024 on Actual Month (Nov)</td>
            <td>Remark Take Leave 2024</td>
            <td>Unpaid Leave</td>
            <td>Deduction Amount</td>
            <td>Deduction Remark</td>
            <td>No Record Finger In/Out</td>
            <td>Deduction No Record Finger In/Out Amount</td>
            <td>Deduction No Record Finger In/Out Remark</td>
            <td>Deduction Owe Hours</td>
            <td>Deduction Owe Hours Amount</td>
            <td>Other Deduction</td>
            <td>Remark Of Deduction</td>
            <td>Reconciliation</td>
            <td>Remark Of Reconciliation</td>
            <td>Last Remarks</td>
            <td>Gross Income</td>
            <td>Man.Fee</td>
            <td>Total Claim</td>
            <td>VAT 10%</td>
            <td>Total Invoice</td>
            <td>Name Supervisor</td>
            <td>ID Supervisor</td>
            <td>Name Dept Head</td>
            <td>ID Dept Head</td>
            <td>Transfer Date</td>
            <td>Amount</td>
            <td>Remarks</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Previous Employee</td>
            <td>Join Previous Employee</td>
        </tr>
    </thead>
    <tbody>
        @php
        $rowNumber = 3
        @endphp

        @foreach($records as $record)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>HUAWEI</td>
            <td>{{ $record->contract->category }}</td>
            <td>{{$record->contract->hti_id}}</td>
            <td>{{$record->employee->personalData->first_name}} {{$record->employee->personalData->last_name}}</td>
            <td>{{$record->contract->currentPosition ? $record->contract->currentPosition->title : ''}}</td>
            <td>{{$record->employee->personalData->nationality}}</td>
            <td></td>
            <td></td>
            <td>timesheet</td>
            <td>Payroll</td>
            <td>{{$record->contract->join_date}}</td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_start_date : $record->contract->tanggal_permanent}}</td>
            <td>{{$record->contract->employee_status == 'Contract' ? $record->contract->contract_end_date : ''}}</td>
            <td></td>
            <td>{{ $record->contract->employee_status }}</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>21</td>
            <td>=ROUND(U{{ $rowNumber }}/21*S{{ $rowNumber}},5)</td>
            <td>=ROUND(U{{ $rowNumber }}/21*T{{ $rowNumber}},5)</td>
            <td>0</td>
            <td>0</td>
            <td>=ROUND(X{{ $rowNumber }}/21*R{{ $rowNumber}},5)</td>
            <td>A</td>
            <td>(Overtime) Week Days &amp; Public Leave (Hours) (1.5x)</td>
            <td>(Overtime) Week Days &amp; Public Leave (Hours) (2x)</td>
            <td>(Overtime) Week End(Hours)(2x)</td>
            <td>(Overtime) Week End(Hours)(3x)</td>
            <td>(Overtime) Week End(Hours)(4x)</td>
            <td>Total Hours OT</td>
            <td>==(AB{{ $rowNumber }}*1.5)+(AC{{ $rowNumber }}*2)+(AD{{ $rowNumber }}*2)+(AE{{ $rowNumber }}*3)+(AF{{ $rowNumber }}*4)</td>
            <td>=ROUND(AH{{ $rowNumber }}/173*(Q{{ $rowNumber }}+R{{ $rowNumber }}),5)</td>
            <td>(Overtime) Rermark Overtime</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>=AX{{ $rowNumber }}/173*(Q{{ $rowNumber }}+R{{ $rowNumber }})</td>
            <td>Remark Overtime Shift</td>
            <td>=ROUND((($V{{ $rowNumber }}+$W{{ $rowNumber }}+$Y{{ $rowNumber }}+$Z{{ $rowNumber }})*4.24%),5)</td>
            <td>{{ $record->bpjs_kesehatan }}</td>
            <td>0</td>
            <td>Group I (RI 400)</td>
            <td>{{ $record->insurance }}</td>
            <td>{{ $record->tax_status }}</td>
            <td>
                @php
                    $thr = $record->allowancesDetails->where('type','THR')->first();
                @endphp
                {{ $thr ? $thr->amount : 0 }}
            </td>
            <td>=+BI{{ $rowNumber }}+BJ{{ $rowNumber }}+BK{{ $rowNumber }}+BL{{ $rowNumber }}+BM{{ $rowNumber }}+BN{{ $rowNumber }}</td>
            <td>0</td>
            <td>0</td>
            <td>=ROUND((BS{{ $rowNumber }}+BW{{ $rowNumber }})/21*Q{{ $rowNumber }},5)</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>=BQ{{ $rowNumber }}-BR{{ $rowNumber }}</td>
            <td>Remark Take Leave 2023</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>Remark Take Leave 2024</td>
            <td>Unpaid Leave</td>
            <td>=ROUND(BY{{ $rowNumber }}/21*Q{{ $rowNumber }},5)</td>
            <td>Deduction Remark</td>
            <td>No Record Finger In/Out</td>
            <td>=ROUND(CB{{ $rowNumber }}/21*Q{{ $rowNumber }},5)</td>
            <td></td>
            <td></td>
            <td>=ROUND(ROUND(CE{{ $rowNumber }}/8/21,5)*Q{{ $rowNumber }},5)</td>
            <td>=ROUND(CG{{ $rowNumber }},5)</td>
            <td>Remark Of Deduction</td>
            <td>=ROUND(CI{{ $rowNumber }},5)</td>
            <td></td>
            <td></td>
            <td>=ROUND((+V{{ $rowNumber }}+W{{ $rowNumber }}+Y{{ $rowNumber }}+Z{{ $rowNumber }}+AI{{ $rowNumber }}+AL{{ $rowNumber }}+AQ{{ $rowNumber }}+AY{{ $rowNumber }}+BA{{ $rowNumber }}+BB{{ $rowNumber }}+BC{{ $rowNumber }}+BE{{ $rowNumber }}+BG{{ $rowNumber }}+BH{{ $rowNumber }}+BP{{ $rowNumber }}-BZ{{ $rowNumber }}-CC{{ $rowNumber }}-CF{{ $rowNumber }}-CG{{ $rowNumber }}-CI{{ $rowNumber }}),5)</td>
            <td>=ROUND((CL{{ $rowNumber }}*6%),5)</td>
            <td>=ROUND((CL{{ $rowNumber }}+CM{{ $rowNumber }}),5)</td>
            <td>=CN{{ $rowNumber }}*11%</td>
            <td>=CN{{ $rowNumber }}+CO{{ $rowNumber }}</td>
            <td>Name Supervisor</td>
            <td>ID Supervisor</td>
            <td>Name Dept Head</td>
            <td>ID Dept Head</td>
            <td>Transfer Date</td>
            <td>Amount</td>
            <td>Remarks</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ $record->contract->previousEmployment->company }}</td>
            <td>{{ $record->contract->join_date_from_previous }}</td>
        </tr>
        @php
            $rowNumber++;
        @endphp
        @endforeach
    </tbody>
    <tbody>
   
    </tbody>
</table>