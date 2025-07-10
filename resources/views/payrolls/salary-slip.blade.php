<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Pay Slip</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            font-family: Arial, sans-serif;
            color: black;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 16px;
        }

        .logo {
            width: 144px;
            height: 48px;
            margin-bottom: 16px;
        }

        h1 {
            text-align: center;
            font-weight: 400;
            font-size: 1.25rem;
            margin-bottom: 16px;
        }

        table.table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.6rem;
            color: black;
            border-bottom: 1px solid #000;
            border-left: 1px solid #000;
            border-top: 1px solid #000;
            border-right: 1px solid #000;
        }

        th,
        td {
            border: 0px solid black;
        }

        th {
            font-weight: 700;
            text-align: left;
        }

        td {
            font-weight: 400;
            vertical-align: top
        }

        .w-1-3 {
            width: 33.3333%;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .font-bold {
            font-weight: 700;
        }

        .py-1 {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .py-0-5 {
            padding-top: 2px;
            padding-bottom: 2px;
        }

        .py-4 {
            padding-top: 16px;
            padding-bottom: 16px;
        }

        .px-2 {
            padding-left: 8px;
            padding-right: 8px;
        }

        .mb-4 {
            margin-bottom: 16px;
        }

        .mt-2 {
            margin-top: 8px;
        }

        .font-normal {
            font-weight: 400;
        }

        .float-right {
            float: right
        }
        .data {
            display:flex; 
            justify-content: space-between;
            padding:3px;
        }

        @media (max-width: 640px) {
            .container {
                padding: 8px;
            }

            .logo {
                width: 120px;
                height: 40px;
                margin-bottom: 12px;
            }

            h1 {
                font-size: 1.125rem;
                margin-bottom: 12px;
            }

            table {
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ public_path('images/logo-DGE.png') }}" alt="DGE PT Dian Graha Elektrika logo in blue" class="logo" />
        <h1>PAY SLIP</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="2" style="padding-top: 20px;padding-left:10px;" class="w-1-3 font-bold">Empno : <span
                            class="font-normal">{{ $payroll->employee->empno }}</span></td>
                    <td colspan="2" style="padding-top: 20px;padding-left:10px;" class="w-1-3 font-bold text-left">Tax
                        Status : <span class="font-normal">{{ $payroll->tax_status }}</span></td>
                    <td colspan="2" style="padding-top: 20px;padding-left:10px;" class="w-1-3 font-bold text-left"> {{
                        $payroll->period->format('F y') }}</td>
                </tr>
                <tr style="border-bottom: 1px solid #000;">
                    <td colspan="2" style="padding-bottom: 20px;padding-left:10px;padding-top:10px;"
                        class="w-1-3 font-bold">Fullname : <span class="font-normal">{{ $payroll->employee->full_name
                            }}</span></td>
                    <td colspan="2" style="padding-bottom: 20px;padding-left:10px;padding-top:10px;"
                        class="w-1-3 font-bold text-left">NPWP No : <span class="font-normal">{{
                            $payroll->employee->personalData->npwp }}</span></td>
                    <td colspan="2" style="padding-bottom: 20px;padding-left:10px;padding-top:10px;"
                        class="w-1-3 font-bold text-left">Jamsostek No : <span class="font-normal">{{
                            $payroll->employee->personalData->jamsostek }}</span></td>
                </tr>
                <tr>
                    <th colspan="2" class="w-1-3 px-2 py-0-5">INCOME</th>
                    <th colspan="2" class="w-1-3 px-2 py-0-5">DEDUCTION</th>
                    <th colspan="2" class="w-1-3 px-2 py-0-5">ACCUMULATION</th>
                </tr>
                <tr>
                    <td colspan="2" class="px-2 py-0-5" style="fle">
                        <div class="data">
                            <span>Basic Salary </span>
                            <span class="float-right">{{ toRp($payroll->basic_salary,false) }}</span>
                        </div>
                        <div class="data">
                            <span>Compensatory Day Off </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            <span>Wee Hours </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            <span>Overtime </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            <span>B.Trip Allowance </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            <span>Shift Allowance </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            <span>Others** </span>
                            <span class="float-right"></span>
                        </div>
                    </td>
                    <td colspan="2" class="px-2 py-0-5">
                        <div class="data">
                            <span>Tax Income</span>
                            <span class="float-right">{{ toRp($payroll->tax_ter_per_month,false) }}</span>
                        </div>
                        <div class="data">
                            <span>Jamsostek</span>
                            <span class="float-right">{{ toRp($payroll->jkk_jkm,false) }}</span>
                        </div>
                        <div class="data">
                            <span>Deduct Remark *)</span>
                            <span class="float-right">0</span>
                        </div>
                   
                        <div class="data">
                            <span>BPJS Pension</span>
                            <span class="float-right">{{ toRp($payroll->deduct_bpjs_pension,false) }}</span>
                        </div>
                    </td>

                    <td colspan="2" class="px-2 py-0-5" style="fle">
                        <div class="data">
                            <span>Basic Salary </span>
                            <span class="float-right">{{ toRp($payroll->basic_salary,false) }}</span>
                        </div>
                        <div class="data">
                            <span>Compensatory Day Off </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            <span>Wee Hours </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            
                        </div>
                        <div class="data">
                            <span>B.Trip Allowance </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            <span>Shift Allowance </span>
                            <span class="float-right">0</span>
                        </div>
                        <div class="data">
                            
                        </div>
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="2">
                        @foreach(collect(json_decode($payroll->allowances_details)) as $allowancesDetail)
                        
                        <div class="data">
                            <span>{{ $allowancesDetail->type }} </span>
                            <span class="float-right">{{ toRp($allowancesDetail->amount,false) }}</span>
                        </div>
                        @endforeach
                    </td>
                    <td colspan="2">
                        @foreach(collect(json_decode($payroll->deduction_details)) as $deductionDetail)
                            
                            <div class="data">
                                <span>{{$deductionDetail->remark ? $deductionDetail->remark: $deductionDetail->deduction_type->name }} </span>
                                <span class="float-right">{{ toRp($deductionDetail->amount,false) }}</span>
                            </div>
                        @endforeach
                    </td>
                    <td colspan="2"></td>
                </tr>

                <tr style="border-bottom: 1px solid #000;">
                    <td colspan="2">
                        <div class="data">
                            <span>&nbsp;</span>
                            <span></span>
                        </div>
                        <div class="data">
                            <span>Premi-Health Insurance</span>
                            <span class="float-right">{{ toRp($payroll->insurance,false) }}</span>
                        </div>
                        <div class="data">
                            <span>TOTAL INCOME</span>
                            <span class="float-right">{{ toRp($payroll->total_income) }}</span>
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="data">
                            <span>BPJS</span>
                            <span class="float-right">{{ toRp($payroll->deduct_bpjs_kesehatan,false) }}</span>
                        </div>
                        <div class="data">
                            <span>Premi-Health Insurance</span>
                            <span class="float-right">{{ toRp($payroll->insurance,false) }}</span>
                        </div>
                        <div class="data">
                            <span>TOTAL DEDUCTION</span>
                            <span class="float-right">{{ toRp($payroll->total_deduction) }}</span>
                        </div>
                    </td>
                    <td colspan="2"></td>
                </tr>

                

                <tr>
                    <td class="px-2 py-2 font-bold">TAKE HOME PAY</td>
                    <td class="px-2 py-2 font-bold text-right">{{ toRp($payroll->take_homepay) }}</td>
                    <td></td>
                    <td></td>
                    <td class="px-2 py-2 font-bold text-right">Outstanding Leave = 0</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <p class="mt-2 font-bold" style="margin-top:8px; font-weight:700;">Note :</p>
    </div>
</body>

</html>