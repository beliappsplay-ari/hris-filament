<div class="relative mt-6 flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
        <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-blueGray-700">Salary Histories</h3>
            </div>
            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                {{-- <button
                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button">See all</button> --}}
            </div>
        </div>
    </div>

    <div class="block w-full overflow-x-auto">
        <table class="items-center bg-transparent w-full border-collapse ">
            <thead>
                <tr>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Effective Date
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Currency
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Salary
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Old Salary
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Reason
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Ref Date
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Remark
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Ref No
                    </th>
                    <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody>
                @if($employee->jobPlace)
                @foreach($employee->jobPlace->salaryHistory as $salaryHistory)
                <tr>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        {{ $salaryHistory->effective_date }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4 ">
                        {{ $salaryHistory->currency }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4 ">
                        {{ $salaryHistory->salary }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-center border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4">
                        {{ $salaryHistory->old_salary }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        {{ $salaryHistory->reason }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        {{ $salaryHistory->ref_date }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        {{ $salaryHistory->remark }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        {{ $salaryHistory->ref_no }}
                    </td>
                    <td
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        <a href="{{ route('filament.admin.resources.salary-histories.edit',$salaryHistory) }}" class="underline hover:decoration-pink-500">Edit</a>
                        
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td style="text-align: center" colspan="6"
                        class="border-t-0 px-6 align-middle border border-solid border-blueGray-100 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
                        No Salary History</td>
                </tr>
                @endif
            </tbody>

        </table>
    </div>
</div>
