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
use Illuminate\Support\Facades\Log;

class ApiEmployeeController extends Controller
{
    public function create(CreateEmployeeRequest $request)
    {
        try {
            // Parse birthday
            $birthday = Carbon::parse($request->dateOfBirth);
            
            // Parse fullname into first_name and last_name
            $names = $this->parseFullName($request->fullname);
            
            DB::beginTransaction();
            
            $employee = Employee::create([
                'empno' => $request->empno
            ]);
            
            $employee->personalData()->create([
                'first_name' => $names['first_name'],
                'last_name' => $names['last_name'],
                'email' => $request->email, // Add email field
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
                'ktp' => $request->ktp,
                'npwp' => $request->NPWPNo,
                'jamsostek' => $request->JamsostekNo,
            ]);

            $employee->completenessPersonalData()->create();

            DB::commit();
            
            return response()->json([
                'success' => true,
                'message' => "Employee successfully created",
                'result' => $employee->load('personalData')
            ], 201);
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Employee creation failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to create employee: ' . $e->getMessage(),
                'result' => null
            ], 500);
        }
    }

    public function update(UpdateEmployeeRequest $request)
    {
        try {
            $employee = Employee::where('empno', $request->empno)->firstOrFail();
            
            // Parse birthday
            $birthday = Carbon::parse($request->dateOfBirth);
            
            // Parse fullname into first_name and last_name
            $names = $this->parseFullName($request->fullname);
            
            DB::beginTransaction();
            
            $employee->personalData()->update([
                'first_name' => $names['first_name'],
                'last_name' => $names['last_name'],
                'email' => $request->email, // Fixed: use $request->email instead of undefined $email
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
                'ktp' => $request->ktp,
                'npwp' => $request->NPWPNo,
                'jamsostek' => $request->JamsostekNo,
            ]);

            DB::commit();
            
            return response()->json([
                'success' => true,
                'message' => "Employee successfully updated",
                'result' => $employee->load('personalData')
            ], 200);
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Employee update failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to update employee: ' . $e->getMessage(),
                'result' => null
            ], 500);
        }
    }

    public function generateEmpno()
    {
        try {
            $empno = generateEMPNO();
            
            return response()->json([
                'success' => true,
                'message' => "Employee number successfully generated",
                'result' => [
                    'empno' => $empno
                ]
            ], 200);
            
        } catch (Exception $e) {
            Log::error('Employee number generation failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to generate employee number: ' . $e->getMessage(),
                'result' => null
            ], 500);
        }
    }

    public function get(GetEmployeeRequest $request)
    {
        try {
            $employee = Employee::where('empno', $request->empno)
                              ->with(['personalData'])
                              ->first();
            
            if (!$employee) {
                return response()->json([
                    'success' => false,
                    'message' => "Employee not found",
                    'result' => null
                ], 404);
            }
            
            return response()->json([
                'success' => true,
                'message' => "Employee data successfully fetched",
                'result' => $employee
            ], 200);
            
        } catch (Exception $e) {
            Log::error('Employee fetch failed: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch employee data: ' . $e->getMessage(),
                'result' => null
            ], 500);
        }
    }

    /**
     * Parse full name into first_name and last_name
     * 
     * @param string $fullname
     * @return array
     */
    private function parseFullName($fullname)
    {
        $nameParts = explode(' ', trim($fullname));
        $count = count($nameParts);
        
        switch ($count) {
            case 1:
                return [
                    'first_name' => $nameParts[0],
                    'last_name' => null
                ];
            case 2:
                return [
                    'first_name' => $nameParts[0],
                    'last_name' => $nameParts[1]
                ];
            case 3:
                return [
                    'first_name' => $nameParts[0],
                    'last_name' => $nameParts[1] . ' ' . $nameParts[2]
                ];
            default:
                // For 4 or more parts
                return [
                    'first_name' => $nameParts[0],
                    'last_name' => implode(' ', array_slice($nameParts, 1))
                ];
        }
    }
}