<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
    font-size: 0.875rem;
    color: black;
    border-bottom: 1px solid #000;
    border-left: 1px solid #000;
    border-top: 1px solid #000;
    border-right: 1px solid #000;
  }
  th, td {
    border: 0px solid black;
  }
  th {
    font-weight: 700;
    text-align: left;
  }
  td {
    font-weight: 400;
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
    <img src="{{ asset('images/logo-DGE.png') }}" alt="DGE PT Dian Graha Elektrika logo in blue" class="logo" />
    <h1>PAY SLIP</h1>
    <table class="table">
      <tbody>
        <tr>
          <td colspan="2" style="padding-top: 20px;padding-left:10px;" class="w-1-3 font-bold">Empno : <span class="font-normal">H01918</span></td>
          <td colspan="2" style="padding-top: 20px;padding-left:10px;" class="w-1-3 font-bold text-left">Tax Status : <span class="font-normal">TK0</span></td>
          <td colspan="2" style="padding-top: 20px;padding-left:10px;" class="w-1-3 font-bold text-left">March 2025</td>
        </tr>
        <tr style="border-bottom: 1px solid #000;">
          <td colspan="2" style="padding-bottom: 20px;padding-left:10px;padding-top:10px;" class="w-1-3 font-bold">Fullname : <span class="font-normal">VINI AGUSTINA</span></td>
          <td colspan="2" style="padding-bottom: 20px;padding-left:10px;padding-top:10px;" class="w-1-3 font-bold text-left">NPWP No : <span class="font-normal">348060617061000</span></td>
          <td colspan="2" style="padding-bottom: 20px;padding-left:10px;padding-top:10px;" class="w-1-3 font-bold text-left">Jamsostek No : <span class="font-normal">10011201091</span></td>
        </tr>
        <tr>
            <th colspan="2" class="w-1-3 px-2 py-0-5">INCOME</th>
            <th colspan="2" class="w-1-3 px-2 py-0-5">DEDUCTION</th>
            <th colspan="2" class="w-1-3 px-2 py-0-5">ACCUMULATION</th>
        </tr>
        <tr>
            <td class="px-2 py-0-5">Basic Salary</td>
            <td class="px-2 py-0-5 text-right">14,385,600</td>
            <td class="px-2 py-0-5">Tax Income</td>
            <td class="px-2 py-0-5 text-right">4,100,175</td>
            <td class="px-2 py-0-5">Basic Salary</td>
            <td class="px-2 py-0-5 text-right">43,156,800</td>
          </tr>
          <tr>
            <td class="px-2 py-0-5">Compensatory Day Off</td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5">Jamsostek</td>
            <td class="px-2 py-0-5 text-right">307,712</td>
            <td class="px-2 py-0-5">Compensatory Day Off</td>
            <td class="px-2 py-0-5 text-right">0</td>
          </tr>
          <tr>
            <td class="px-2 py-0-5">Wee Hours</td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5">Deduct Remark *)</td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5">Wee Hours</td>
            <td class="px-2 py-0-5 text-right">0</td>
          </tr>
          <tr>
            <td class="px-2 py-0-5">Overtime</td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5">BPJS Pension</td>
            <td class="px-2 py-0-5 text-right">105,474</td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td class="px-2 py-0-5">B.Trip Allowance</td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5">B.Trip Allowance</td>
            <td class="px-2 py-0-5"></td>
          </tr>
          
          <tr>
            <td class="px-2 py-0-5">Shift Allowance</td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5">Shift Allowance</td>
            <td class="px-2 py-0-5 text-right">0</td>
          </tr>
          <tr>
            <td class="px-2 py-0-5">Others**</td>
            <td class="px-2 py-0-5 text-right">0</td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
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
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td class="px-2 py-4">THR 2025</td>
            <td class="px-2 py-0-5 text-right">15,385,600</td>
            <td class="px-2 py-4"></td>
            <td class="px-2 py-4"></td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td class="px-2 py-4">Performance Review Mar 2025</td>
            <td class="px-2 py-4 text-right">1,000,000</td>
            <td class="px-2 py-0-5">THR 2025</td>
            <td class="px-2 py-4 text-right">12,900,845</td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
          </tr>
          <tr>
          </tr>
          <tr>
          </tr>
          <tr>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5">BPJS</td>
            <td class="px-2 py-0-5 text-right">120,000</td>
            <td class="px-2 py-0-5 text-right"></td>
            <td class="px-2 py-0-5"></td>
          </tr>
          <tr>
            <td class="px-2 py-0-5">Premi-Health Insurance</td>
            <td class="px-2 py-0-5 text-right">205,520</td>
            <td class="px-2 py-0-5">Premi-Health Insurance</td>
            <td class="px-2 py-0-5 text-right">205,520</td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr style="border-bottom: 1px solid #000;">
            <td class="px-2 py-0-5">TOTAL INCOME</td>
            <td class="px-2 py-0-5 text-right">30,976,720</td>
            <td class="px-2 py-0-5">TOTAL DEDUCTION</td>
            <td class="px-2 py-0-5 text-right">17,739,726</td>
            <td class="px-2 py-0-5"></td>
            <td class="px-2 py-0-5"></td>
          </tr>
          
          <tr>
            <td class="px-2 py-2 font-bold">TAKE HOME PAY</td>
            <td class="px-2 py-2 font-bold text-right">13,236,994</td>
            <td></td>
            <td></td>
            <td class="px-2 py-2 font-bold text-right">Outstanding Leave = 7</td>
            <td></td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
      </tbody>
    </table>
   
    <p class="mt-2 font-bold" style="margin-top:8px; font-weight:700;">Note :</p>
    {{ $payrolls->links() }}
  </div>
</body>
</html>