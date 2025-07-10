<div>
    <div class="bg-white overflow-hidden shadow rounded-lg border">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $contract->employee->personalData->first_name }} {{ $contract->employee->personalData->last_name }}
            </h3>
            <p class="max-w-2xl text-sm text-gray-500">
                {{ $contract->empno }}
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <div class="grid grid-flow-col grid-rows-4 gap-4">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">HTI ID</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->hti_id}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Previous employment</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->previousEmployment ? $contract->previousEmployment->company : ""}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Prev employment remark</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->previous_employment_remark}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Join date from previous</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->join_date_from_previous}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Ex DGE</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->is_ex_dge ? "YES" : "NO"}}
                        </dd>
                    </div>
                    @if($contract->is_ex_dge)
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Ex DGE Note</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->ex_dge_note}}
                        </dd>
                    </div>
                    @endif
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Ex NSN</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->is_ex_nsn ? "YES" : "NO"}}
                        </dd>
                    </div>
                    @if($contract->is_ex_nsn)
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Ex NSN Note</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->ex_nsn_note}}
                        </dd>
                    </div>
                    @endif
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Join Date</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->join_date}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Rehire Date</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->rehire_date}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Start Payroll</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->start_payroll}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->employee_status}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Status Remark</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->employee_status_remark}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Tanggal Pengangkatan</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->tanggal_pengangkatan}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Tanggal Permanent</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->tanggal_permanent}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Contract start date</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->contract_start_date}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Contract End Date</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->contract_end_date}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Resign Date</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->resign_date}}
                        </dd>
                    </div>

                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Temporary Extension</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->temporary_extension}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Further Status</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->further_status}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Reason Resign</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->reason_resign}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Performance Review Amount</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->performance_review_amount}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Recon Payroll</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->recon_payroll ? "YES" : "NO" }}
                        </dd>
                    </div>

                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Recon Process in Payroll</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->recon_process_in_payroll}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Current Homebase
                        </dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->currentHomebase ? $contract->currentHomebase->name : "N/A" }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Current Department
                        </dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->currentDepartment ? $contract->currentDepartment->name : "N/A" }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Current Division
                        </dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->currentDivision ? $contract->currentDivision->name : "N/A" }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">project</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->currentProject ? $contract->currentProject->name : "N/A" }}
                        </dd>
                    </div>
                </dl>
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Current Position
                    </dt>
                    <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $contract->currentPosition ? $contract->currentPosition->title : "N/A" }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Current Business Unit
                    </dt>
                    <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $contract->currentBusinessUnit ?  $contract->currentBusinessUnit->name : "N/A" }}
                    </dd>
                </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">hay_level</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->hay_level}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Position Allowance</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->position_allowance}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Has Sign in Bonus</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->has_sign_in_bonus ? "YES" : "NO"}}
                        </dd>
                    </div>
                    @if($contract->has_sign_in_bonus)
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Sign in bonus</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ toRp($contract->sign_in_bonus,false)}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Sign in Bonus Type</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->sign_in_bonus_type}}
                        </dd>
                    </div>
                    @endif
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Original Workbase</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->original_workbase}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Current Workbase</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->current_workbase}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Relocating Allowance</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ toRp($contract->relocating_allowance,false)}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Phone Limit</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ toRp($contract->phone_limit,false)}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Parking Allowance</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ toRp($contract->parking_allowance,false)}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Immediate Superior</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->immediate_superior}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Basic Salary</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ toRp($contract->basic_salary,false)}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Project Base</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->project_base}}
                        </dd>
                    </div>
                    {{-- <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Area Payslip</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->area_payslip}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Scope of Salary</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->scope_of_salary}}
                        </dd>
                    </div> --}}
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">cdo_entitlement</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->cdo_entitlement ? "YES" : "NO"}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">wee_hours_entitlement</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->wee_hours_entitlement ? "YES" : "NO"}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">jamsostek_entitlement</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->jamsostek_entitlement ? "YES" : "NO"}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">insurance_entitlement</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->insurance_entitlement ? "YES" : "NO"}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">expatriate_entitlement</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->expatriate_entitlement ? "YES" : "NO"}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">travel_allow_entitlement</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->travel_allowance_entitlement ? "YES" : "NO"}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">thr</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->thr}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Tax type</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->tax_type}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Category</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->category}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Blacklisted</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->is_blacklisted ? "YES" : "NO"}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Blacklist_reason</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->blacklist_reason}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Penalty amount</dt>
                        <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $contract->penalty_amount}}
                        </dd>
                    </div>
                    
                </dl>
            </div>
        </div>
    </div>
</div>