<x-filament-panels::page>

    <form class="mx-auto" action="{{ route('reports.generate') }}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
            <select name="type" id="type"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="bd-hti">Breakdown for HTI</option>
                <option value="bd-hti-rumus">Breakdown for HTI Rumus</option>
                <option value="bd-employee">Breakdown for Employee</option>
                <option value="personal-identification">Personal Identification</option>
                 <option value="resign-list">Resign List</option>
            </select>
        </div>
        <div class="mb-5">
            <label for="period" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Period</label>
            <input name="period" type="text" id="period" value="{{ now()->format('Ym') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" required />
            @if(session()->has('error-period'))
            <span class="mt-2 text-sm text-danger-600 peer-[&:not(:placeholder-shown):not(:focus):invalid]:block">
                Incorrect period format
            </span>
            @endif
        </div>

        <button type="submit" style="--c-400:var(--info-400);--c-500:var(--info-500);--c-600:var(--info-600);"
            class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-info fi-color-info fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action">Submit
        </button>
    </form>

</x-filament-panels::page>