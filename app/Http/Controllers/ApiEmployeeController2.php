<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\GetEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiEmployeeController extends Controller
{
    public function create(CreateEmployeeRequest $request){
        $birthday = Carbon::parse($request->dateOfBirth);
        $fullname = explode(' ',$request->fullname);
        if(count($fullname) == 1){
            $first_name = $fullname[0];
            $last_name = null;
        }
        if(count($fullname) == 2){
            $first_name = $fullname[0];
            $last_name = $fullname[1];
        }
        if(count($fullname) == 3){
            $first_name = $fullname[0];
            $last_name = $fullname[1].' '.$fullname[2];
        }
        if(count($fullname) == 4){
            $first_name = $fullname[0];
            $last_name = $fullname[1].' '.$fullname[2].' '.$fullname[3];
        }
        // dd($first_name);
        DB::beginTransaction();
        try {
            $employee = Employee::create([
                'empno' => $request->empno
            ]);
            $employee->personalData()->create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'birthday' => $birthday,
                'birthday_place' => $request->PlaceOfBirth,
                'sex' => strtolower($request->Sex),
                'religion' => $request->Religion,
                'marital_status' => $request->MaritalStatus,
                'nationality' => $request->Nationality,
                'permanent_address' => $request->PermanentAddress,
                'permanent_city' => $request->PermanentCity,
                'correspondence_address' => $request->CorrespondenceAddress,
                'correspondence_city' => $request->CorrespondenceCity,
                'no_handphone' => $request->TelephoneNo,
                'ktp' =>$request->ktp,
                'npwp' =>$request->NPWPNo,
                'jamsostek' => $request->JamsostekNo,
            ]);

            $employee->completenessPersonalData()->create();

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => "Employee successfully created",
                'result' => $employee->load('personalData')
            ],201);
        }catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'result' => null
            ]);
        }


        return $empno;
    }

    public function update(UpdateEmployeeRequest $request){
        $employee = Employee::where('empno',$request->empno)->firstOrFail();
        $birthday = Carbon::parse($request->dateOfBirth);
        $fullname = explode(' ',$request->fullname);
        if(count($fullname) == 1){
            $first_name = $fullname[0];
            $last_name = null;
        }
        if(count($fullname) == 2){
            $first_name = $fullname[0];
            $last_name = $fullname[1];
        }
        if(count($fullname) == 3){
            $first_name = $fullname[0];
            $last_name = $fullname[1].' '.$fullname[2];
        }
        if(count($fullname) == 4){
            $first_name = $fullname[0];
            $last_name = $fullname[1].' '.$fullname[2].' '.$fullname[3];
        }
        // dd($first_name);
        DB::beginTransaction();
        try {
            $employee->personalData()->update([
                'first_name' => $first_name,
                'email' => $email,
                'last_name' => $last_name,
                'birthday' => $birthday,
                'birthday_place' => $request->PlaceOfBirth,
                'sex' => strtolower($request->Sex),
                'religion' => $request->Religion,
                'marital_status' => $request->MaritalStatus,
                'nationality' => $request->Nationality,
                'permanent_address' => $request->PermanentAddress,
                'permanent_city' => $request->PermanentCity,
                'correspondence_address' => $request->CorrespondenceAddress,
                'correspondence_city' => $request->CorrespondenceCity,
                'no_handphone' => $request->TelephoneNo,
                'ktp' =>$request->ktp,
                'npwp' =>$request->NPWPNo,
                'jamsostek' => $request->JamsostekNo,
            ]);

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => "Employee successfully Updated",
                'result' => $employee->load('personalData')
            ],201);
        }catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'result' => null
            ]);
        }


        return $empno;
    }

    public function generateEmpno(){
        $empno = generateEMPNO();
        return response()->json([
            'success' => true,
            'message' => "Empno successfully generated",
            'result' => [
                'empno' => $empno
            ]
        ],200);
    }

    public function get(GetEmployeeRequest $request){
        $employee = Employee::where('empno',$request->empno)->with(['personalData'])->first();
        if(!$employee){
            return response()->json([
                'success' => false,
                'message' => "Employee not Found",
                'result' => null
            ],404);
        }
        return response()->json([
            'success' => true,
            'message' => "Employee Data successfully fetched",
            'result' => $employee
        ],200);
    }
}
