<div>
    <div x-data="{ open: false }"
        class="bg-white py-2 flex flex-col items-center justify-center relative overflow-hidden sm:py-12">
        <div @click="open = ! open" class="p-4 bg-blue-100 w-full rounded flex justify-between items-center">
            <div class="flex items-center gap-2">
                <svg width="800px" height="800px" viewBox="0 0 1024 1024" class="icon h-6 w-6 text-blue-500"
                    version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M474.1 155.6v28.6H494c-1.4-3.2-2-6.8-1.4-10.6 1.2-8.8 8.4-15.8 17.2-16.8 11.8-1.3 21.8 7.9 21.8 19.5 0 2.8-0.6 5.5-1.6 7.9h19.9v-28.6c0-9.1-7.4-16.4-16.4-16.4h-42.9c-9.1 0-16.5 7.3-16.5 16.4z"
                        fill="#D5D9CF" />
                    <path
                        d="M555.4 189.7h-33.8l3.4-7.7c0.8-1.8 1.2-3.7 1.2-5.7 0-4-1.7-7.9-4.7-10.5-3-2.7-7-4-11-3.5-6.3 0.7-11.5 5.8-12.4 12-0.4 2.7 0 5.3 1 7.7l3.4 7.7h-33.8v-34.1c0-12.1 9.8-21.9 21.9-21.9h42.9c12.1 0 21.9 9.8 21.9 21.9v34.1z m-18.4-11h7.3v-23.1c0-6-4.9-10.9-10.9-10.9h-42.9c-6 0-10.9 4.9-10.9 10.9v23.1h7.3c-0.2-1.9-0.1-3.9 0.1-5.9 1.5-11.2 10.8-20.3 22.1-21.5 7.1-0.8 14.3 1.5 19.6 6.3 5.3 4.8 8.4 11.6 8.4 18.7 0 0.8 0 1.6-0.1 2.4z"
                        fill="#333336" />
                    <path
                        d="M754 884.8H270c-15.3 0-27.7-12.4-27.7-27.7V214c0-15.3 12.4-27.7 27.7-27.7h484c15.3 0 27.7 12.4 27.7 27.7v643c0.1 15.4-12.4 27.8-27.7 27.8z"
                        fill="#68A240" />
                    <path
                        d="M754 890.3H270c-18.3 0-33.2-14.9-33.2-33.2V214c0-18.3 14.9-33.2 33.2-33.2h484c18.3 0 33.2 14.9 33.2 33.2v643c0.1 18.4-14.8 33.3-33.2 33.3zM270 191.8c-12.3 0-22.2 10-22.2 22.2v643c0 12.3 10 22.2 22.2 22.2h484c12.3 0 22.2-10 22.2-22.2V214c0-12.3-10-22.2-22.2-22.2H270z"
                        fill="#333336" />
                    <path d="M344.2 231.1h335.6v516H344.2z" fill="#F2F0E7" />
                    <path d="M685.3 752.6H338.7v-527h346.6v527z m-335.6-11h324.6v-505H349.7v505z" fill="#333336" />
                    <path
                        d="M630.2 289H393.8v-70.9c0-16.1 13.1-29.3 29.3-29.3h177.8c16.1 0 29.3 13.1 29.3 29.3V289z m-225.4-11h214.3v-59.9c0-10.1-8.2-18.3-18.3-18.3H423.1c-10.1 0-18.3 8.2-18.3 18.3V278z"
                        fill="#333336" />
                    <path d="M614.9 249.2v21.1c0 2-1.6 3.5-3.5 3.5h-21.1v20h37.4c4 0 7.3-3.3 7.3-7.3v-37.4h-20.1z"
                        fill="#68A240" />
                    <path
                        d="M627.6 299.3h-42.9v-31h24.7v-24.7h31v42.9c0 7.1-5.7 12.8-12.8 12.8z m-31.9-11h31.9c1 0 1.8-0.8 1.8-1.8v-31.9h-9v15.6c0 5-4.1 9-9 9h-15.6v9.1z"
                        fill="#333336" />
                    <path d="M409.2 249.2v21.1c0 2 1.6 3.5 3.5 3.5h21.1v20h-37.4c-4 0-7.3-3.3-7.3-7.3v-37.4h20.1z"
                        fill="#68A240" />
                    <path
                        d="M439.4 299.3h-42.9c-7.1 0-12.8-5.7-12.8-12.8v-42.9h31v24.7h24.7v31z m-44.7-44.6v31.9c0 1 0.8 1.8 1.8 1.8h31.9v-9h-15.6c-5 0-9-4.1-9-9v-15.6h-9.1z"
                        fill="#333336" />
                    <path
                        d="M589.1 213.1H434.9c-9.4 0-16.9-7.6-16.9-16.9 0-9.4 7.6-16.9 16.9-16.9H589c9.4 0 16.9 7.6 16.9 16.9 0.1 9.3-7.5 16.9-16.8 16.9z"
                        fill="#D5D9CF" />
                    <path
                        d="M589.1 218.6H434.9c-12.4 0-22.4-10.1-22.4-22.4s10.1-22.4 22.4-22.4H589c12.4 0 22.4 10.1 22.4 22.4s-10 22.4-22.3 22.4z m-154.2-33.9c-6.3 0-11.4 5.1-11.4 11.4s5.1 11.4 11.4 11.4H589c6.3 0 11.4-5.1 11.4-11.4s-5.1-11.4-11.4-11.4H434.9zM276 237.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM266 275.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM276 313.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM266 351.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM276 389.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM266 427.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM276 465.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM266 503.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM276 541.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM266 579.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM276 617.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5zM266 655.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5z"
                        fill="#333336" />
                    <path
                        d="M276 693.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5z"
                        fill="#333336" />
                    <path
                        d="M266 731.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5z"
                        fill="#333336" />
                    <path
                        d="M276 769.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5z"
                        fill="#333336" />
                    <path
                        d="M266 807.7h-21.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H266c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5z"
                        fill="#333336" />
                    <path
                        d="M276 845.7h-31.8c-3 0-5.5-2.5-5.5-5.5s2.5-5.5 5.5-5.5H276c3 0 5.5 2.5 5.5 5.5s-2.5 5.5-5.5 5.5z"
                        fill="#333336" />
                    <path
                        d="M634.2 614.8l-54.6 54.6c-2.8 2.8-7.4 2.8-10.2 0l-97-97c-6.1-6.1-6.1-16.1 0-22.3l42.6-42.6c6.1-6.1 16.1-6.1 22.3 0l97 97c2.8 2.9 2.8 7.5-0.1 10.3z"
                        fill="#D5D9CF" />
                    <path
                        d="M574.5 677.1c-3.4 0-6.6-1.3-9-3.7l-97-97c-4-4-6.2-9.3-6.2-15s2.2-11 6.2-15l42.6-42.6c8.3-8.3 21.8-8.3 30 0l97 97c5 5 5 13 0 18l-54.6 54.6c-2.4 2.3-5.6 3.7-9 3.7z m-48.4-168.6c-2.6 0-5.2 1-7.2 3L476.2 554c-1.9 1.9-3 4.5-3 7.2s1.1 5.3 3 7.2l97 97c0.4 0.4 0.9 0.5 1.2 0.5 0.3 0 0.8-0.1 1.2-0.5l54.6-54.6c0.7-0.7 0.7-1.7 0-2.4l-97-97c-1.9-1.9-4.5-2.9-7.1-2.9z"
                        fill="#333336" />
                    <path d="M497.511 597.634l64.842-64.84 58.9 58.9-64.84 64.842z" fill="#FFD632" />
                    <path
                        d="M556.4 664.2l-66.7-66.7 72.6-72.6 66.7 66.7-72.6 72.6z m-51.1-66.6l51.1 51.1 57.1-57.1-51.1-51.1-57.1 57.1z"
                        fill="#333336" />
                    <path d="M531.7 602.8l16.4 16.5" fill="#68A240" />
                    <path
                        d="M548.1 624.8c-1.4 0-2.8-0.5-3.9-1.6l-16.5-16.5c-2.1-2.1-2.1-5.6 0-7.8 2.1-2.1 5.6-2.1 7.8 0l16.5 16.5c2.1 2.1 2.1 5.6 0 7.8-1 1.1-2.4 1.6-3.9 1.6z"
                        fill="#333336" />
                    <path d="M550.1 584.4l16.5 16.5" fill="#68A240" />
                    <path
                        d="M566.6 606.4c-1.4 0-2.8-0.5-3.9-1.6l-16.5-16.5c-2.1-2.1-2.1-5.6 0-7.8 2.1-2.1 5.6-2.1 7.8 0l16.5 16.5c2.1 2.1 2.1 5.6 0 7.8-1.1 1.1-2.5 1.6-3.9 1.6z"
                        fill="#333336" />
                    <path d="M568.6 565.9l16.5 16.5" fill="#68A240" />
                    <path
                        d="M585.1 587.9c-1.4 0-2.8-0.5-3.9-1.6l-16.5-16.5c-2.1-2.1-2.1-5.6 0-7.8 2.1-2.1 5.6-2.1 7.8 0l16.5 16.5c2.1 2.1 2.1 5.6 0 7.8-1.1 1-2.5 1.6-3.9 1.6z"
                        fill="#333336" />
                </svg>

                <h4 class="font-medium text-sm text-blue-500">Form Job Placement</h4>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
        <div x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-0" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-10"
            x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-white p-4 ">
            <form method="post" class="fi-form grid gap-y-6" wire:submit="update">
                <div style="--cols-default: repeat(1, minmax(0, 1fr)); --cols-lg: repeat(2, minmax(0, 1fr));"
                    class="grid grid-cols-[--cols-default] lg:grid-cols-[--cols-lg] fi-fo-component-ctn gap-6">

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.hti_id.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.hti_id">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Hti id
                                        </span>
                                    </label>
                                </div>
                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.hti_id" maxlength="255" type="text" wire:model="data.hti_id" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.previous_employment.Filament\Forms\Components\Toggle">
                        <div style="padding-top:30px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.previous_employment"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Previous
                                    Employment</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.previous_employment">
                                        <button x-data="{
                              state: $wire.$entangle('data.previous_employment', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.previous_employment" role="switch"
                                            type="button" wire:loading.attr="disabled"
                                            wire:target="data.previous_employment" style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Previous employment
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.join_date_from_previous.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.join_date_from_previous">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Join date from previous
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.join_date_from_previous" type="date"
                                                wire:model="data.join_date_from_previous" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.is_ex_nsn.Filament\Forms\Components\Toggle">
                        <div style="padding-top:30px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.is_ex_nsn"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is Ex NSN</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.is_ex_nsn">
                                        <button x-data="{
                              state: $wire.$entangle('data.is_ex_nsn', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.is_ex_nsn" role="switch" type="button"
                                            wire:loading.attr="disabled" wire:target="data.is_ex_nsn"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Is ex nsn
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.ex_nsn_note.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.ex_nsn_note">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Ex nsn note
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.ex_nsn_note" maxlength="255" type="text"
                                                wire:model="data.ex_nsn_note" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.has_performance_review.Filament\Forms\Components\Toggle">
                        <div style="padding-top:30px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.has_performance_review"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Has Perfomance
                                    Review</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.has_performance_review">
                                        <button x-data="{
                              state: $wire.$entangle('data.has_performance_review', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.has_performance_review" role="switch"
                                            type="button" wire:loading.attr="disabled"
                                            wire:target="data.has_performance_review"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Has performance review
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.performance_review_remark.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.performance_review_remark">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Performance review remark
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.performance_review_remark" maxlength="255" type="text"
                                                wire:model="data.performance_review_remark" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.performance_review_reason.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.performance_review_reason">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Performance review reason
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.performance_review_reason" maxlength="255" type="text"
                                                wire:model="data.performance_review_reason" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.performance_review_effective_date.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.performance_review_effective_date">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Performance review effective date
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.performance_review_effective_date" type="date"
                                                wire:model="data.performance_review_effective_date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.performance_review_amount.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.performance_review_amount">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Performance review amount
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.performance_review_amount" inputmode="decimal" step="any"
                                                type="number" wire:model="data.performance_review_amount" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.join_date.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.join_date">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Join date
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.join_date" type="date" wire:model="data.join_date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.rehire_date.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.rehire_date">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Rehire date
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.rehire_date" type="date" wire:model="data.rehire_date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.start_payroll.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.start_payroll">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Start payroll
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.start_payroll" maxlength="255" type="text"
                                                wire:model="data.start_payroll" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.employee_status.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.employee_status">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Employee status
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.employee_status" maxlength="255" type="text"
                                                wire:model="data.employee_status" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.tanggal_pengangkatan.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.tanggal_pengangkatan">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Tanggal pengangkatan
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.tanggal_pengangkatan" type="date"
                                                wire:model="data.tanggal_pengangkatan" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.tanggal_permanent.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.tanggal_permanent">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Tanggal permanent
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.tanggal_permanent" type="date"
                                                wire:model="data.tanggal_permanent" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.resign_date.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.resign_date">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Resign date
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.resign_date" type="date" wire:model="data.resign_date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.temporary_extension.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.temporary_extension">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Temporary extension
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.temporary_extension" type="date"
                                                wire:model="data.temporary_extension" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.further_status.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.further_status">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Further status
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.further_status" maxlength="255" type="text"
                                                wire:model="data.further_status" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: 1 / -1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.reason_resign.Filament\Forms\Components\Textarea">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.reason_resign">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Reason resign
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-textarea overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <div wire:ignore.self="" style="height: '3.75rem'">
                                                <textarea x-ignore="" ax-load="visible || event (ax-modal-opened)"
                                                    ax-load-src="http://127.0.0.1:8000/js/filament/forms/components/textarea.js?v=3.2.133.0"
                                                    x-data="textareaFormComponent({
                                          initialHeight: 3.75,
                                          shouldAutosize: false,
                                          state: $wire.$entangle('data.reason_resign'),
                                      })" x-model="state"
                                                    class="block h-full w-full border-none bg-transparent px-3 py-1.5 text-base text-gray-950 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6"
                                                    id="data.reason_resign" wire:model="data.reason_resign"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.recon_payroll.Filament\Forms\Components\Toggle">
                        <div style="padding-top:30px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.recon_payroll"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is Recon
                                    Payroll</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.recon_payroll">
                                        <button x-data="{
                              state: $wire.$entangle('data.recon_payroll', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.recon_payroll" role="switch" type="button"
                                            wire:loading.attr="disabled" wire:target="data.recon_payroll"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Recon payroll
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.recon_process_in_payroll.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.recon_process_in_payroll">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Recon process in payroll
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.recon_process_in_payroll" maxlength="255" type="text"
                                                wire:model="data.recon_process_in_payroll" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid auto-cols-fr gap-y-2">
                        <div
                            class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-select">
                            <div class="min-w-0 flex-1">
                                <select
                                    class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                    id="data.homebase" wire:model.live="data.homebase">
                                    <option>Select Homebase</option>
                                    @foreach($homebases as $homebase)
                                    <option value="{{ $homebase->id }}">{{ $homebase->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]"
                        wire:key="BHmuJTWEKm1L6yN1T10l.data.division.Filament\Forms\Components\Select">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between ">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.division">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Division
                                        </span>
                                    </label>
                                </div>
                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-select">
                                        <div class="min-w-0 flex-1">
                                            <select
                                                class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                                id="data.division" wire:model.live="data.division">
                                                <option>Select Division</option>
                                                @foreach($divisions as $division)
                                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]"
                        wire:key="BHmuJTWEKm1L6yN1T10l.data.project.Filament\Forms\Components\Select">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between ">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.project">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Project
                                        </span>
                                    </label>
                                </div>
                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-select">
                                        <div class="min-w-0 flex-1">
                                            <select
                                                class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                                id="data.project" wire:model.live="data.project">
                                                <option>Select Project</option>
                                                @foreach($projects as $project)
                                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]"
                        wire:key="BHmuJTWEKm1L6yN1T10l.data.position.Filament\Forms\Components\Select">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between ">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.position">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Position
                                        </span>
                                    </label>
                                </div>
                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-select">
                                        <div class="min-w-0 flex-1">
                                            <select
                                                class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                                id="data.position" wire:model.live="data.position">
                                                <option>Select Position</option>
                                                @foreach($positions as $position)
                                                <option value="{{ $position->id }}">{{ $position->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.hay_level.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.hay_level">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Hay level
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.hay_level" maxlength="255" type="text"
                                                wire:model="data.hay_level" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.position_allowance.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.position_allowance">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Position allowance
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.position_allowance" inputmode="decimal" step="any"
                                                type="number" wire:model="data.position_allowance" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.has_sign_in_bonus.Filament\Forms\Components\Toggle">
                        <div style="padding-top:30px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.has_sign_in_bonus"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Has Sign In
                                    Bonus</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.has_sign_in_bonus">
                                        <button x-data="{
                              state: $wire.$entangle('data.has_sign_in_bonus', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.has_sign_in_bonus" role="switch" type="button"
                                            wire:loading.attr="disabled" wire:target="data.has_sign_in_bonus"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Has sign in bonus
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.sign_in_bonus.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.sign_in_bonus">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Sign in bonus
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.sign_in_bonus" inputmode="decimal" step="any" type="number"
                                                wire:model="data.sign_in_bonus" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.sign_in_bonus_type.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.sign_in_bonus_type">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Sign in bonus type
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.sign_in_bonus_type" maxlength="255" type="text"
                                                wire:model="data.sign_in_bonus_type" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]"
                        wire:key="BHmuJTWEKm1L6yN1T10l.data.homebase.Filament\Forms\Components\Select">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between ">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.homebase">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Homebase
                                        </span>
                                    </label>
                                </div>
                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-select">
                                        <div class="min-w-0 flex-1">
                                            <select
                                                class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                                id="data.homebase" wire:model.live="data.homebase">
                                                <option>Select Homebase</option>
                                                @foreach($homebases as $homebase)
                                                <option value="{{ $homebase->id }}">{{ $homebase->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.original_workbase.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.original_workbase">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Original workbase
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.original_workbase" maxlength="255" type="text"
                                                wire:model="data.original_workbase" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.current_workbase.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.current_workbase">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Current workbase
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.current_workbase" maxlength="255" type="text"
                                                wire:model="data.current_workbase" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.relocating_allowance.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.relocating_allowance">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Relocating allowance
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.relocating_allowance" inputmode="decimal" step="any"
                                                type="number" wire:model="data.relocating_allowance" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.additional_allowance.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.additional_allowance">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Additional allowance
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.additional_allowance" inputmode="decimal" step="any"
                                                type="number" wire:model="data.additional_allowance" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.ot_lumpsum.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.ot_lumpsum">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            OT Lumpsum
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.ot_lumpsum" inputmode="decimal" step="any"
                                                type="number" wire:model="data.ot_lumpsum" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.immediate_superior.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.immediate_superior">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Immediate superior
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.immediate_superior" maxlength="255" type="text"
                                                wire:model="data.immediate_superior" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.basic_salary.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.basic_salary">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Basic salary
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.basic_salary" inputmode="decimal" step="any" type="number"
                                                wire:model="data.basic_salary" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.project_base.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.project_base">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Project base
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.project_base" maxlength="255" type="text"
                                                wire:model="data.project_base" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.area_payslip.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.area_payslip">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Area payslip
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.area_payslip" maxlength="255" type="text"
                                                wire:model="data.area_payslip" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.scope_of_salary.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.scope_of_salary">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Scope of salary
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.scope_of_salary" maxlength="255" type="text"
                                                wire:model="data.scope_of_salary" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.cdo_entitlement.Filament\Forms\Components\Toggle">
                        <div style="padding-top:10px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.cdo_entitlement"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CDO
                                    Entitlement</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.cdo_entitlement">
                                        <button x-data="{
                              state: $wire.$entangle('data.cdo_entitlement', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.cdo_entitlement" role="switch" type="button"
                                            wire:loading.attr="disabled" wire:target="data.cdo_entitlement"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Cdo entitlement
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.wee_hours_entitlement.Filament\Forms\Components\Toggle">
                        <div style="padding-top:10px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.wee_hours_entitlement"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wee Hours
                                    Entitlement</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.wee_hours_entitlement">
                                        <button x-data="{
                              state: $wire.$entangle('data.wee_hours_entitlement', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.wee_hours_entitlement" role="switch"
                                            type="button" wire:loading.attr="disabled"
                                            wire:target="data.wee_hours_entitlement"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Wee hours entitlement
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.jamsostek_entitlement.Filament\Forms\Components\Toggle">
                        <div style="padding-top:10px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.jamsostek_entitlement"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jamsostek
                                    Entitlement</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.jamsostek_entitlement">
                                        <button x-data="{
                              state: $wire.$entangle('data.jamsostek_entitlement', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.jamsostek_entitlement" role="switch"
                                            type="button" wire:loading.attr="disabled"
                                            wire:target="data.jamsostek_entitlement"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Jamsostek entitlement
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.insurance_entitlement.Filament\Forms\Components\Toggle">
                        <div style="padding-top:10px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.insurance_entitlement"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Insurance
                                    Entitlement</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.insurance_entitlement">
                                        <button x-data="{
                              state: $wire.$entangle('data.insurance_entitlement', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.insurance_entitlement" role="switch"
                                            type="button" wire:loading.attr="disabled"
                                            wire:target="data.insurance_entitlement"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Insurance entitlement
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.expatriate_entitlement.Filament\Forms\Components\Toggle">
                        <div style="padding-top:10px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.expatriate_entitlement"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expatriate
                                    Entitlement</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.expatriate_entitlement">
                                        <button x-data="{
                              state: $wire.$entangle('data.expatriate_entitlement', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.expatriate_entitlement" role="switch"
                                            type="button" wire:loading.attr="disabled"
                                            wire:target="data.expatriate_entitlement"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Expatriate entitlement
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.travel_allowance_entitlement.Filament\Forms\Components\Toggle">
                        <div style="padding-top:10px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox"
                                    wire:model="data.travel_allowance_entitlement"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Travel Allowance
                                    Entitlement</label>
                            </div>
                        </div>
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.travel_allowance_entitlement">
                                        <button x-data="{
                              state: $wire.$entangle('data.travel_allowance_entitlement', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.travel_allowance_entitlement" role="switch"
                                            type="button" wire:loading.attr="disabled"
                                            wire:target="data.travel_allowance_entitlement"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Travel allowance entitlement
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.thr.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.thr">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Thr
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.thr" maxlength="255" type="text" wire:model="data.thr" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.tax_type.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.tax_type">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Tax Type
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.tax_type" maxlength="255" type="text"
                                                wire:model="data.tax_type" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.category.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.category">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Category
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.category" maxlength="255" type="text"
                                                wire:model="data.category" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.is_blacklisted.Filament\Forms\Components\Toggle">
                        <div style="padding-top:30px;">
                            <div class="flex flex-wrap gap-2 items-center mb-4">
                                <input id="default-checkbox" type="checkbox" wire:model="data.is_blacklisted"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is
                                    Blacklisted</label>
                            </div>
                        </div>
                    </div> --}}
                        {{-- <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.is_blacklisted">
                                        <button x-data="{
                              state: $wire.$entangle('data.is_blacklisted', false),
                          }" x-bind:aria-checked="state?.toString()" x-on:click="state = ! state" x-bind:class="
                              state
                                  ? 'fi-color-custom bg-custom-600 fi-color-primary'
                                  : 'bg-gray-200 dark:bg-gray-700 fi-color-gray'
                          " x-bind:style="
                              state
                                  ? '--c-600:var(--primary-600)'
                                  : '--c-600:var(--gray-600)'
                          " class="fi-fo-toggle relative inline-flex h-6 w-11 shrink-0 cursor-pointer rounded-full border-2 border-transparent outline-none transition-colors duration-200 ease-in-out disabled:pointer-events-none disabled:opacity-70 fi-color-custom bg-custom-600 fi-color-primary"
                                            aria-checked="true" id="data.is_blacklisted" role="switch" type="button"
                                            wire:loading.attr="disabled" wire:target="data.is_blacklisted"
                                            style="--c-600: var(--primary-600)">
                                            <span
                                                class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5 rtl:-translate-x-5"
                                                x-bind:class="{
                                  'translate-x-5 rtl:-translate-x-5': state,
                                  'translate-x-0': ! state,
                              }">
                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-0 ease-out duration-100': state,
                                      'opacity-100 ease-in duration-200': ! state,
                                  }">
                                                </span>

                                                <span
                                                    class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                    aria-hidden="true" x-bind:class="{
                                      'opacity-100 ease-in duration-200': state,
                                      'opacity-0 ease-out duration-100': ! state,
                                  }">
                                                </span>
                                            </span>
                                        </button>

                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Is blacklisted
                                            <sup class="text-danger-600 dark:text-danger-400 font-medium">*</sup>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div> 
                    </div> --}}

                    {{-- <div style="--col-span-default: 1 / -1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.blacklist_reason.Filament\Forms\Components\Textarea">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.blacklist_reason">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Blacklist reason
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-textarea overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <div wire:ignore.self="" style="height: '3.75rem'">
                                                <textarea x-ignore="" ax-load="visible || event (ax-modal-opened)"
                                                    ax-load-src="http://127.0.0.1:8000/js/filament/forms/components/textarea.js?v=3.2.133.0"
                                                    x-data="textareaFormComponent({
                                          initialHeight: 3.75,
                                          shouldAutosize: false,
                                          state: $wire.$entangle('data.blacklist_reason'),
                                      })" x-model="state"
                                                    class="block h-full w-full border-none bg-transparent px-3 py-1.5 text-base text-gray-950 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6"
                                                    id="data.blacklist_reason"
                                                    wire:model="data.blacklist_reason"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.penalty_amount.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.penalty_amount">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Penalty amount
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.penalty_amount" inputmode="decimal" step="any" type="number"
                                                wire:model="data.penalty_amount" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.transfer_dates.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.transfer_dates">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Transfer dates
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.transfer_dates" type="text" wire:model="data.transfer_dates" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.amount_transferred.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.amount_transferred">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Amount transferred
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.amount_transferred" type="text"
                                                wire:model="data.amount_transferred" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.received_dates.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.received_dates">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Received dates
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.received_dates" type="text" wire:model="data.received_dates" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.amount_received.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.amount_received">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Amount received
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.amount_received" type="text"
                                                wire:model="data.amount_received" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.received_dge_bank.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.received_dge_bank">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Received dge bank
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.received_dge_bank" type="text"
                                                wire:model="data.received_dge_bank" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.fund_source.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.fund_source">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Fund source
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.fund_source" maxlength="255" type="text"
                                                wire:model="data.fund_source" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.bt_period.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.bt_period">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Bt period
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.bt_period" type="text" wire:model="data.bt_period" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.allowance_bt_amount.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.allowance_bt_amount">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Allowance bt amount
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.allowance_bt_amount" type="text"
                                                wire:model="data.allowance_bt_amount" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.btid_no_settled_id.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.btid_no_settled_id">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Btid no settled id
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.btid_no_settled_id" type="text"
                                                wire:model="data.btid_no_settled_id" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.exp_without_bt_amount.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.exp_without_bt_amount">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Exp without bt amount
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.exp_without_bt_amount" type="text"
                                                wire:model="data.exp_without_bt_amount" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.start_claim_date.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.start_claim_date">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Start claim date
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.start_claim_date" type="text"
                                                wire:model="data.start_claim_date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.deduct_last_payment_period.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.deduct_last_payment_period">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Deduct last payment period
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.deduct_last_payment_period" type="date"
                                                wire:model="data.deduct_last_payment_period" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.deduct_last_payment_amount.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.deduct_last_payment_amount">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Deduct last payment amount
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.deduct_last_payment_amount" inputmode="decimal" step="any"
                                                type="number" wire:model="data.deduct_last_payment_amount" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.deduct_salary_period.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.deduct_salary_period">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Deduct salary period
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.deduct_salary_period" type="date"
                                                wire:model="data.deduct_salary_period" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.deduct_salary_amount.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.deduct_salary_amount">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Deduct salary amount
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.deduct_salary_amount" inputmode="decimal" step="any"
                                                type="number" wire:model="data.deduct_salary_amount" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.recon_to_hti_in_brd_period.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.recon_to_hti_in_brd_period">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Recon to hti in brd period
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.recon_to_hti_in_brd_period" type="date"
                                                wire:model="data.recon_to_hti_in_brd_period" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.amount_recon_to_hti.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.amount_recon_to_hti">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Amount recon to hti
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.amount_recon_to_hti" inputmode="decimal" step="any"
                                                type="number" wire:model="data.amount_recon_to_hti" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.password.Filament\Forms\Components\TextInput">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.password">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Password
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-text-input overflow-hidden">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.password" maxlength="255" type="password"
                                                wire:model="data.password" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.contract_start_date.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.contract_start_date">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Contract start date
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.contract_start_date" type="date"
                                                wire:model="data.contract_start_date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1" class="col-[--col-span-default]"
                        wire:key="kq1XJtGUJvm66Z0ZOSAy.data.contract_end_date.Filament\Forms\Components\DatePicker">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.contract_end_date">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Contract end date
                                        </span>
                                    </label>
                                </div>

                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                        <div class="fi-input-wrp-input min-w-0 flex-1">
                                            <input
                                                class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-3 pe-3"
                                                id="data.contract_end_date" type="date"
                                                wire:model="data.contract_end_date" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]"
                        wire:key="BHmuJTWEKm1L6yN1T10l.data.type_of_contract_print.Filament\Forms\Components\Select">
                        <div data-field-wrapper="" class="fi-fo-field-wrp">
                            <div class="grid gap-y-2">
                                <div class="flex items-center gap-x-3 justify-between ">
                                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3"
                                        for="data.type_of_contract_print">
                                        <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                                            Type Of Contract Print
                                        </span>
                                    </label>
                                </div>
                                <div class="grid auto-cols-fr gap-y-2">
                                    <div
                                        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500 fi-fo-select">
                                        <div class="min-w-0 flex-1">
                                            <select
                                                class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3"
                                                id="data.type_of_contract_print"
                                                wire:model.live="data.type_of_contract_print">
                                                <option>Select Type Of Contract Print</option>
                                                @foreach(config('rollo.typeOfContractPrint') as $typeOfContractPrint)
                                                <option value="{{ $typeOfContractPrint }}">{{ $typeOfContractPrint }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button x-bind:id="$id('key-bindings')"
                    x-mousetrap.global.mod-s="document.getElementById($el.id).click()" x-data="{
                    form: null,
                    isProcessing: false,
                    processingMessage: null,
                }" x-init="
                    form = $el.closest('form')
        
                    form?.addEventListener('form-processing-started', (event) => {
                        isProcessing = true
                        processingMessage = event.detail.message
                    })
        
                    form?.addEventListener('form-processing-finished', () => {
                        isProcessing = false
                    })
                " x-bind:class="{ 'enabled:opacity-70 enabled:cursor-wait': isProcessing }"
                    style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                    class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action"
                    type="submit" wire:loading.attr="disabled" x-bind:disabled="isProcessing" id="key-bindings-1">


                    <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="animate-spin fi-btn-icon transition duration-75 h-5 w-5 text-white"
                        wire:loading.delay.default="" wire:target="create">
                        <path clip-rule="evenodd"
                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor">
                        </path>
                    </svg>


                    <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="animate-spin fi-btn-icon transition duration-75 h-5 w-5 text-white" x-show="isProcessing"
                        style="display: none;">
                        <path clip-rule="evenodd"
                            d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor">
                        </path>
                    </svg>
                    <span x-show="! isProcessing" class="fi-btn-label">
                        Update
                    </span>
                    <span x-show="isProcessing" x-text="processingMessage" class="fi-btn-label"
                        style="display: none;"></span>

                </button>
            </form>
        </div>
    </div>


</div>