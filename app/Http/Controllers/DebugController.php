<?php

namespace App\Http\Controllers;

use App\Models\Advance;
use App\Models\Contract;
use App\Models\Employee;
use App\Models\HomebaseHistory;
use App\Models\OthersIncomeTaxable;
use App\Models\Payroll;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DebugController extends Controller
{
   public function debug()
   {
      $period = getPeriodOptions();
      dd($period);
      $contract = Contract::find(41);
      dd($contract->projects);
      return view('debug');
      // $employee = Employee::find(113)->load('educations');
      // dd($employee->educations->sortByDesc(function ($item) {
      //    return strtotime($item->period);
      // }));
   }
}
