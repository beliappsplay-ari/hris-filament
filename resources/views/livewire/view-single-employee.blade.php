<div>
    <div class="bg-white overflow-hidden shadow rounded-lg border">
        {{-- <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $record->personalData->first_name }} {{ $record->personalData->last_name }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                {{ $record->empno }}
            </p>
        </div> --}}
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <div class="grid grid-flow-col grid-rows-4 gap-4">
                <dl class="sm:divide-y sm:divide-gray-200 flex items-center justify-center p-4">
                    <div class="relative group">
                        <!-- Animated Background Blur -->
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-purple-600 rounded-2xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                        </div>

                        <!-- Main Card -->
                        <div
                            class="relative px-7 py-6 bg-black/80 backdrop-blur-xl rounded-xl leading-none flex flex-col items-center max-w-sm">
                            <!-- Status Indicator -->
                            <div class="absolute top-4 right-4 flex items-center">
                                <div class="h-3 w-3 bg-green-400 rounded-full animate-pulse"></div>
                            </div>

                            <!-- Profile Image with Ring Animation -->
                            <div class="relative group">
                                <div
                                    class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-purple-600 rounded-full blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200 animate-tilt">
                                </div>
                                <div class="relative">
                                    <img src="{{ $record->image ? asset('/storage/'.$record->image)  : asset('images/avatar-default.png') }}"
                                        class="w-32 h-32 rounded-full object-cover transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-6"
                                        alt="Profile">
                                </div>
                            </div>

                            <!-- Profile Info -->
                            <div class="mt-6 text-center">
                                <h2
                                    class="text-2xl font-bold bg-gradient-to-r from-pink-500 to-violet-500 text-transparent bg-clip-text">
                                    {{ $record->personalData->first_name }} {{ $record->personalData->last_name }}</h2>
                                <p class="text-purple-400 font-medium mt-1">{{ $record->empno }}</p>
                                <p class="text-gray-300 mt-2 text-sm">{{ $record->personalData->sex }}</p>
                            </div>

                            <!-- Animated Stats -->
                            <div class="flex justify-between w-full mt-6 px-4">
                                <div class="text-center transform transition-all duration-300 hover:scale-110">
                                    <p
                                        class="text-2xl font-bold bg-gradient-to-r from-pink-500 to-violet-500 text-transparent bg-clip-text">
                                        {{ $record->contracts->count() }}</p>
                                    <p class="text-gray-400 text-xs">Contracts</p>
                                </div>
                                <div class="text-center transform transition-all duration-300 hover:scale-110">
                                    <p
                                        class="text-2xl font-bold bg-gradient-to-r from-pink-500 to-violet-500 text-transparent bg-clip-text">
                                        0</p>
                                    <p class="text-gray-400 text-xs">Projects</p>
                                </div>
                            </div>
                            <div class="flex justify-between w-full mt-6 px-4">
                                @if($record->isCompletePersonalData())
                                <svg style="--c-400:var(--success-400);--c-500:var(--success-500);"
                                    class="text-2xl font-bold fi-ta-icon-item fi-ta-icon-item-size-lg w-6 fi-color-custom text-custom-500 dark:text-custom-400 fi-color-success"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                </svg>
                                @else
                                <svg style="--c-400:var(--danger-400);--c-500:var(--danger-500);"
                                    class="text-2xl font-bold fi-ta-icon-item fi-ta-icon-item-size-lg h-6 w-6 fi-color-custom text-custom-500 dark:text-custom-400 fi-color-danger"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z">
                                    </path>
                                </svg>
                                @endif
                                Completeness
                            </div>

                            {{--
                            <!-- Connect Button -->
                            <button class="relative mt-8 w-full group/btn">
                                <div
                                    class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-purple-600 rounded-lg blur opacity-75 group-hover/btn:opacity-100 transition duration-1000 group-hover:duration-200">
                                </div>
                                <div
                                    class="relative px-6 py-3 bg-black rounded-lg leading-none flex items-center justify-center">
                                    <span
                                        class="text-gray-200 group-hover/btn:text-white transition duration-200">Connect</span>
                                </div>
                            </button>

                            <!-- Tech Stack Pills -->
                            <div class="flex flex-wrap gap-2 mt-6 justify-center">
                                <span
                                    class="px-3 py-1 text-xs bg-purple-900/50 text-purple-300 rounded-full">React</span>
                                <span
                                    class="px-3 py-1 text-xs bg-blue-900/50 text-blue-300 rounded-full">TypeScript</span>
                                <span
                                    class="px-3 py-1 text-xs bg-teal-900/50 text-teal-300 rounded-full">Tailwind</span>
                            </div> --}}
                        </div>
                    </div>
                </dl>
                <dl class="mt-3 sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            EMAIL
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->email }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            PHONE NUMBER
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->no_handphone }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            RELIGION
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->religion }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            BIRTHDAY
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->birthday_place }}, {{ $record->personalData->birthday }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            MARITAL STATUS
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->marital_status }}
                        </dd>
                    </div>
                </dl>
                <dl class="mt-3 sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            NATIONALITY
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->nationality }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            KTP
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->ktp }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            NPWP
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->npwp }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            JAMSOSTEK
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->jamsostek }}
                        </dd>
                    </div>
                    <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="mt-1 text-sm font-medium text-gray-500">
                            PASSPORT
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $record->personalData->passport }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>