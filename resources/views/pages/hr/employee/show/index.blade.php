<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Employment Information Sheet</h1>
        </div>

        <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div id="loading" class="hidden fixed inset-0 bg-gray-500 bg-opacity-90 flex items-center justify-center z-50">
                    <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-32 w-32 mb-4"></div>
                </div>

                <div id="step1">

                    <div class="flex place-content-center justify-center items-center mb-16 mt-2">
                        <ol class="space-y-4 sm:flex sm:space-x-6 sm:space-y-0 rtl:space-x-reverse">
                            <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                    1
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Personal Details</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    2
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Educational Background</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    3
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Employment History</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    4
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Upload File</h3>
                                </span>
                            </li>
                        </ol>            
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6">
                            <div>
                                <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-1">Personal Detail</h1>
                                <span>Fill up the inputs to add Employee.</span>
                            </div>

                            <div class="lg:col-span-2">
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Position</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                    <div class="md:col-span-1">
                                        <select name="position_desired" id="position_desired" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="Collector" {{ $employee->position_desired == 'Collector' ? 'selected' : ''}}>Collector</option>
                                            <option value="Branch Manager" {{ $employee->position_desired == 'Branch Manager' ? 'selected' : ''}}>Branch Manager</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Full Name</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                    <div class="md:col-span-2">
                                        <label for="f_name">First Name</label>
                                        <div>
                                            <input name="f_name" id="f_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->f_name }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="l_name">Last Name</label>
                                        <div>
                                            <input name="l_name" id="l_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->m_name }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="m_name">Middle Name</label>
                                        <div>
                                            <input name="m_name" id="m_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->l_name }}" />
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Address</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                    <div class="md:col-span-1">
                                        <label for="present_address">Present Address</label>
                                        <input type="text" name="present_address" id="present_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->present_address }}" placeholder="" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="provincial_address">Provincial Address</label>
                                        <input type="text" name="provincial_address" id="provincial_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->provincial_address }}" placeholder="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Phone</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                    <div class="md:col-span-1">
                                        <label for="phone_number">Phone Number</label>
                                        <div>
                                            <input name="phone_number" id="phone_number" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->phone_number }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="tel_number">Tel Number(optional)</label>
                                        <div>
                                            <input name="tel_number" id="tel_number" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->tel_number }}" />
                                        </div>
                                    </div>

                                </div>  
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Birth</p>
                            </div>

                            <div class="lg:col-span-2">

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                    <div class="md:col-span-1">
                                        <label for="birth_date">Birthdate</label>
                                        <input type="date" name="birth_date" id="birth_date" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->birth_date }}" placeholder="" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" id="age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->age }}" placeholder="" />
                                    </div>
                                </div>

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2 mt-4 mb-4">
                                    <div class="md:col-span-1">
                                        <label for="birth_place">Birth Place</label>
                                        <input type="text" name="birth_place" id="birth_place" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->birth_place }}" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Civil Status</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                    <div class="md:col-span-1">
                                        <label for="civil_status">Civil Status</label>
                                        <select name="civil_status" id="civil_status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="Single" {{ $employee->civil_status == 'Single' ? 'selected' : ''}}>Single</option>
                                            <option value="Married" {{ $employee->civil_status == 'Married' ? 'selected' : ''}}>Married</option>
                                        </select>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="religion">Religion</label>
                                        <select name="religion" id="religion" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="Roman Catholic" {{ $employee->religion == 'Roman Catholic' ? 'selected' : ''}}>Roman Catholic</option>
                                            <option value="Muslim" {{ $employee->religion == 'Muslim' ? 'selected' : ''}}>Muslim</option>
                                            <option value="Born Again" {{ $employee->religion == 'Born Again' ? 'selected' : ''}}>Born Again</option>
                                            <option value="Iglesia" {{ $employee->religion == 'Iglesia' ? 'selected' : ''}}>Iglesia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Height/Weight</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                    <div class="md:col-span-1">
                                        <label for="height">Height</label>
                                        <input type="text" name="height" id="height" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->height }}" placeholder="cm" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="weight">Weight</label>
                                        <input type="text" name="weight" id="weight" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->weight }}" placeholder="kg" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div>
                                <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-1">Additional Details</h1>
                                <span>Spouse and Family Member</span>
                            </div>

                            <div class="lg:col-span-2">
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Spouse</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6 mb-4">

                                    <div class="md:col-span-2">
                                        <label for="f_spouse">Spouse First Name</label>
                                        <div>
                                            <input name="f_spouse" id="f_spouse" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->f_spouse }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="l_spouse">Spouse Last Name</label>
                                        <div>
                                            <input name="l_spouse" id="l_spouse" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->l_spouse }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="m_spouse">Spouse Middle Name</label>
                                        <div>
                                            <input name="m_spouse" id="m_spouse" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->m_spouse }}" />
                                        </div>
                                    </div>
                                </div>  

                                <div class="text-gray-600 mb-1">
                                    <p class="font-medium text-lg">Child 1</p>
                                </div>

                                <div class="lg:col-span-2 mb-4">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                        <div class="md:col-span-2">
                                            <label for="child_1_name">Full Name</label>
                                            <input type="text" name="child_1_name" id="child_1_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->child_1_name }}" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="child_1_age">Age</label>
                                            <input type="text" name="child_1_age" id="child_1_age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->child_1_age }}" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1 flex items-start justify-start mt-8">
                                            <button type="button" id="add-child" class="text-slate-600 px-2 py-1 rounded hover:text-orange-500 italic text-sm">Click here to add Children Info</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-gray-600 mb-1 hidden" id="child2-label">
                                    <p class="font-medium text-lg">Child 2</p>
                                </div>

                                <div class="lg:col-span-2 mb-4 hidden" id="child2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                        <div class="md:col-span-2">
                                            <label for="child_2_name">Full Name</label>
                                            <input type="text" name="child_2_name" id="child_2_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->child_2_name }}" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="child_2_age">Age</label>
                                            <input type="text" name="child_2_age" id="child_2_age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->child_2_age }}" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1 flex items-start justify-start mt-8">
                                            <button type="button" class="text-red-400 text-sm px-2 py-1 rounded remove-child italic">Remove</button>
                                        </div>
                                    </div>
                                </div> 

                                <div class="text-gray-600 mb-1 hidden" id="child3-label">
                                    <p class="font-medium text-lg">Child 3</p>
                                </div>

                                <div class="lg:col-span-2 mb-4 hidden" id="child3">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                        <div class="md:col-span-2">
                                            <label for="child_3_name">Full Name</label>
                                            <input type="text" name="child_3_name" id="child_3_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->child_3_name }}" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="child_3_age">Age</label>
                                            <input type="text" name="child_3_age" id="child_3_age" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->child_3_age }}" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1 flex items-start justify-start mt-8">
                                            <button type="button" class="text-red-400 text-sm px-2 py-1 rounded remove-child italic">Remove</button>
                                        </div>
                                    </div>
                                </div> 
                            
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Family</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="text-gray-600 mb-1">
                                    <p class="font-medium text-lg">Mother</p>
                                </div>

                                <div class="lg:col-span-2 mb-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6 mb-4">

                                        <div class="md:col-span-2">
                                            <label for="m_maiden_f_name">Mother's Maiden First Name</label>
                                            <div>
                                                <input name="m_maiden_f_name" id="m_maiden_f_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->m_maiden_f_name }}" />
                                            </div>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="m_maiden_l_name">Mother's Maiden Last Name</label>
                                            <div>
                                                <input name="m_maiden_l_name" id="m_maiden_l_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->m_maiden_l_name }}" />
                                            </div>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="m_maiden_m_name">Mother's Maiden Middle Name</label>
                                            <div>
                                                <input name="m_maiden_m_name" id="m_maiden_m_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->m_maiden_m_name }}" />
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                            <div class="md:col-span-2">
                                                <label for="m_occupation">Occupation</label>
                                                <input type="text" name="m_occupation" id="m_occupation" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->m_occupation }}" placeholder="" />
                                            </div>

                                            <div class="md:col-span-1">
                                                <label for="m_phone">Phone No.</label>
                                                <input type="text" name="m_phone" id="m_phone" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->m_phone }}" placeholder="" />
                                            </div>
                                        </div>

                                    </div>                                
                                </div> 

                                <div class="text-gray-600 mb-1 mt-4">
                                    <p class="font-medium text-lg">Father</p>
                                </div>

                                <div class="lg:col-span-2 mb-4">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6 mb-2">

                                        <div class="md:col-span-2">
                                            <label for="father_f_name">Father's First Name</label>
                                            <div>
                                                <input name="father_f_name" id="father_f_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->father_f_name }}" />
                                            </div>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="father_l_name">Father's Last Name</label>
                                            <div>
                                                <input name="father_l_name" id="father_l_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->father_l_name }}" />
                                            </div>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="father_m_name">Father's Middle Name</label>
                                            <div>
                                                <input name="father_m_name" id="father_m_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->father_m_name }}" />
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                            <div class="md:col-span-2">
                                                <label for="f_occupation">Occupation</label>
                                                <input type="text" name="f_occupation" id="f_occupation" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->f_occupation }}" placeholder="" />
                                            </div>

                                            <div class="md:col-span-1">
                                                <label for="f_phone">Phone No.</label>
                                                <input type="text" name="f_phone" id="f_phone" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->f_phone }}" placeholder="" />
                                            </div>
                                        </div>

                                    </div>                                
                                </div> 
                            
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div>
                                <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-1">In case of Emergency</h1>
                                <span>Person to be notified in case of emergency</span>
                            </div>

                            <div class="lg:col-span-2">
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Emergency Contact</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="lg:col-span-2 mb-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1 mb-4">

                                        <div class="md:col-span-1">
                                            <label for="person_emergency">Full Name</label>
                                            <div>
                                                <input name="person_emergency" id="person_emergency" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->person_emergency }}" />
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                            <div class="md:col-span-1">
                                                <label for="emergency_address">Address</label>
                                                <input type="text" name="emergency_address" id="emergency_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->emergency_address }}" placeholder="" />
                                            </div>

                                            <div class="md:col-span-1">
                                                <label for="emergency_phone">Phone No.</label>
                                                <input type="text" name="emergency_phone" id="emergency_phone" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->emergency_phone }}" placeholder="" />
                                            </div>

                                            <div class="md:col-span-1">
                                                <label for="relationship">Relationship</label>
                                                <select name="relationship" id="relationship" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                    <option value="Parents" {{ $employee->relationship == 'Parents' ? 'selected' : ''}}>Parents</option>
                                                    <option value="Acquaintance" {{ $employee->relationship == 'Acquaintance' ? 'selected' : ''}}>Acquaintance</option>
                                                    <option value="Siblings" {{ $employee->relationship == 'Siblings' ? 'selected' : ''}}>Siblings</option>
                                                    <option value="Friend" {{ $employee->relationship == 'Friend' ? 'selected' : ''}}>Friend</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>                                
                                </div> 
                            
                            </div>
                        </div>
                    </div>

                    <x-section-border />
                </div>

                <div id="step2" class="hidden">
                    <div class="flex place-content-center justify-center items-center mb-16 mt-2">
                        <ol class="space-y-4 sm:flex sm:space-x-6 sm:space-y-0 rtl:space-x-reverse">
                            <li class="flex items-center text-gray-500 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-blue-500">
                                    1
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Personal Details</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-blue-600 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-gray-400">
                                    2
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Educational Background</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    3
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Employment History</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    4
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Upload File</h3>
                                </span>
                            </li>
                        </ol>            
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6">
                            <div>
                                <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-1">Educational Background</h1>
                                <span>Fill up the inputs to add Employee's Educational Background.</span>
                            </div>

                            <div class="lg:col-span-2">
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Elementary</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                    <div class="md:col-span-2">
                                        <label for="elementary">Name of School</label>
                                        <div>
                                            <input name="elementary" id="elementary" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->elementary }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="elem_address">Address</label>
                                        <div>
                                            <input name="elem_address" id="elem_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="elem_year">Year Graduated</label>
                                        <div>
                                            <input name="elem_year" id="elem_year" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Secondary</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                    <div class="md:col-span-2">
                                        <label for="secondary">Name of School</label>
                                        <div>
                                            <input name="secondary" id="secondary" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->secondary }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="sec_address">Address</label>
                                        <div>
                                            <input name="sec_address" id="sec_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="sec_year">Year Graduated</label>
                                        <div>
                                            <input name="sec_year" id="sec_year" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">College</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                    <div class="md:col-span-2">
                                        <label for="college">Name of School</label>
                                        <div>
                                            <input name="college" id="college" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->college }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="college_address">Address</label>
                                        <div>
                                            <input name="college_address" id="college_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="college_year">Year Graduated</label>
                                        <div>
                                            <input name="college_year" id="college_year" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-4">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Course</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                    <div class="md:col-span-2">
                                        <label for="course">Name of School</label>
                                        <div>
                                            <input name="course" id="course" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->course }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="course_address">Address</label>
                                        <div>
                                            <input name="course_address" id="course_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="course_year">Year Graduated</label>
                                        <div>
                                            <input name="course_year" id="course_year" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-10">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Vocational</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                    <div class="md:col-span-2">
                                        <label for="vocational">Name of School</label>
                                        <div>
                                            <input name="vocational" id="vocational" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->vocational }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="voc_address">Address</label>
                                        <div>
                                            <input name="voc_address" id="voc_address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="voc_year">Year Graduated</label>
                                        <div>
                                            <input name="voc_year" id="voc_year" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                </div>

                <div id="step3" class="hidden">
                    <div class="flex place-content-center justify-center items-center mb-16 mt-2">
                        <ol class="space-y-4 sm:flex sm:space-x-6 sm:space-y-0 rtl:space-x-reverse">
                            <li class="flex items-center text-gray-500 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-blue-500">
                                    1
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Personal Details</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    2
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Educational Background</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-blue-600 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-gray-400">
                                    3
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Employment History</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    4
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Upload File</h3>
                                </span>
                            </li>
                        </ol>            
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-10">
                            <div>
                                <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-1">Employment History</h1>
                                <span>Fill up the inputs to add Employee's Employment History</span>
                            </div>

                            <div class="lg:col-span-2">
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-10">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Employment Details</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6 mb-4">

                                    <div class="md:col-span-2">
                                        <label for="n_company_1">Name of Company</label>
                                        <div>
                                            <input name="n_company_1" id="n_company_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->n_company_1 }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="a_company_1">Address</label>
                                        <div>
                                            <input name="a_company_add_1" id="a_company_add_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->a_company_add_1 }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="p_company_1">Position</label>
                                        <div>
                                            <input name="p_company_1" id="p_company_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->p_company_1 }}" />
                                        </div>
                                    </div>
                                </div>  

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                    <div class="md:col-span-2">
                                        <label for="f_company_1">Date Hired (From)</label>
                                        <div>
                                            <input type="date" name="f_company_1" id="f_company_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->f_company_1 }}" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="t_company_1">To</label>
                                        <div>
                                            <input type="date" name="t_company_1" id="t_company_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->t_company_1 }}" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2 flex items-start justify-start mt-8">
                                        <button type="button" id="add-employment" class="text-slate-600 px-2 py-1 rounded hover:text-orange-500 italic text-sm">Add Employment</button>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-10">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg"></p>
                            </div>

                            <div class="lg:col-span-2 mb-4 hidden" id="employment2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                                    <div class="md:col-span-2">
                                        <label for="n_company_2">Name of Company</label>
                                        <div>
                                            <input name="n_company_2" id="n_company_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="a_company_1">Address</label>
                                        <div>
                                            <input name="a_company_1" id="a_company_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="p_company_2">Position</label>
                                        <div>
                                            <input name="p_company_2" id="p_company_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6 mt-4">
                                    <div class="md:col-span-2">
                                        <label for="f_company_2">Date Hired (From)</label>
                                        <div>
                                            <input type="date" name="f_company_2" id="f_company_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="t_company_2">To</label>
                                        <div>
                                            <input type="date" name="t_company_2" id="t_company_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2 flex items-start justify-start mt-8">
                                        <button type="button" class="text-red-400 text-sm px-2 py-1 rounded remove-employment italic">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-16">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg"></p>
                            </div>


                            <div class="lg:col-span-2 mb-4 hidden" id="employment3">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                                    <div class="md:col-span-2">
                                        <label for="n_company_3">Name of Company</label>
                                        <div>
                                            <input name="n_company_3" id="n_company_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="a_company_add_3">Address</label>
                                        <div>
                                            <input name="a_company_add_3" id="a_company_add_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="p_company_3">Position</label>
                                        <div>
                                            <input name="p_company_3" id="p_company_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6 mt-4">
                                    <div class="md:col-span-2">
                                        <label for="f_company_3">Date Hired (From)</label>
                                        <div>
                                            <input type="date" name="f_company_3" id="f_company_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="t_company_3">To</label>
                                        <div>
                                            <input type="date" name="t_company_3" id="t_company_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2 flex items-start justify-start mt-8">
                                        <button type="button" class="text-red-400 text-sm px-2 py-1 rounded remove-employment italic">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg">Character Reference <span class="text-slate-400">(not related to you)</span></p>
                            </div>

                            <div class="lg:col-span-2 mb-4">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-10">
                                    <div class="md:col-span-2">
                                        <label for="cf_name_1">Name</label>
                                        <div>
                                            <input name="cf_name_1" id="cf_name_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->cf_name_1 }}" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_occ_1">Occupation</label>
                                        <div>
                                            <input name="cf_occ_1" id="cf_occ_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->cf_occ_1 }}" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_add_1">Address</label>
                                        <div>
                                            <input name="cf_add_1" id="cf_add_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->cf_add_1 }}" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_phone_1">Phone Number</label>
                                        <div>
                                            <input name="cf_phone_1" id="cf_phone_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $employee->cf_phone_1 }}" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <div class="md:col-span-2 flex items-start justify-start mt-8">
                                            <button type="button" id="add-character-reference" class="text-slate-600 px-2 py-1 rounded hover:text-orange-500 italic text-sm">Add Reference</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg"></p>
                            </div>

                            <div class="lg:col-span-2 mb-4 hidden" id="character-reference2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-10">
                                    <div class="md:col-span-2">
                                        <label for="cf_name_2">Name</label>
                                        <div>
                                            <input name="cf_name_2" id="cf_name_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_occ_2">Occupation</label>
                                        <div>
                                            <input name="cf_occ_2" id="cf_occ_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_add_2">Address</label>
                                        <div>
                                            <input name="cf_add_2" id="cf_add_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_phone_2">Phone Number</label>
                                        <div>
                                            <input name="cf_phone_2" id="cf_phone_2" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <div class="md:col-span-2 flex items-start justify-start mt-8">
                                            <button type="button" class="text-red-400 text-sm px-2 py-1 rounded remove-character-reference italic">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-10">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg"></p>
                            </div>

                            <div class="lg:col-span-2 mb-4 hidden" id="character-reference3">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-10">
                                    <div class="md:col-span-2">
                                        <label for="cf_name_3">Name</label>
                                        <div>
                                            <input name="cf_name_3" id="cf_name_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_occ_3">Occupation</label>
                                        <div>
                                            <input name="cf_occ_3" id="cf_occ_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_add_3">Address</label>
                                        <div>
                                            <input name="cf_add_3" id="cf_add_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <label for="cf_phone_3">Phone Number</label>
                                        <div>
                                            <input name="cf_phone_3" id="cf_phone_3" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                    <div class="md:col-span-2">
                                        <div class="md:col-span-2 flex items-start justify-start mt-8">
                                            <button type="button" class="text-red-400 text-sm px-2 py-1 rounded remove-character-reference italic">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="step4" class="hidden">
                    <div class="flex place-content-center justify-center items-center mb-16 mt-2">
                        <ol class="space-y-4 sm:flex sm:space-x-6 sm:space-y-0 rtl:space-x-reverse">
                            <li class="flex items-center text-gray-500 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-blue-500">
                                    1
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Personal Details</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    2
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Educational Background</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                    3
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Employment History</h3>
                                </span>
                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                                </svg>
                            </li>
                            <li class="flex items-center text-blue-600 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-gray-400">
                                    4
                                </span>
                                <span>
                                    <h3 class="font-medium leading-tight">Upload File</h3>
                                </span>
                            </li>
                        </ol>            
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-6">
                            <div>
                                <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-1">Upload File</h1>
                                <span>Upload Image and Files</span>
                            </div>

                            <div class="lg:col-span-2">
                            </div>
                        </div>
                    </div>

                    <x-section-border />

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-8">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg"></p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2 mb-6">
                                    <div class="md:col-span-1">
                                        <label for="sss">SSS No.</label>
                                        <select name="sss" id="sss" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="To Be Submitted" {{ $employee->sss == 'To Be Submitted' ? 'selected' : ''}}>To Be Submitted</option>
                                            <option value="Pending" {{ $employee->sss == 'Pending' ? 'selected' : ''}}>Pending</option>
                                        </select>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="pagibig">PAG-IBIG No.</label>
                                        <select name="pagibig" id="pagibig" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="To Be Submitted" {{ $employee->pagibig == 'To Be Submitted' ? 'selected' : ''}}>To Be Submitted</option>
                                            <option value="Pending" {{ $employee->pagibig == 'Pending' ? 'selected' : ''}}>Pending</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2 mb-6">
                                    <div class="md:col-span-1">
                                        <label for="philhealth">PHILHEALTH No.</label>
                                        <select name="philhealth" id="philhealth" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="To Be Submitted" {{ $employee->philhealth == 'To Be Submitted' ? 'selected' : ''}}>To Be Submitted</option>
                                            <option value="Pending" {{ $employee->philhealth == 'Pending' ? 'selected' : ''}}>Pending</option>
                                        </select>
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="tin">TIN No.</label>
                                        <select name="tin" id="tin" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                            <option value="To Be Submitted" {{ $employee->tin == 'To Be Submitted' ? 'selected' : ''}}>To Be Submitted</option>
                                            <option value="Pending" {{ $employee->tin == 'Pending' ? 'selected' : ''}}>Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-8">
                            <div class="text-gray-600">
                                <p class="font-medium text-lg"></p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2 mb-6">
                                    <div class="md:col-span-1">
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Drag & Drop</span> or click to upload</p>
                                                <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" name="file">
                                        </label>
                                        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Upload</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-end space-x-2">
                    <button type="button" id="prevBtn" class="bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
                    <button type="button" id="nextBtn" class="bg-blue-500 text-white px-4 py-2 rounded">Next</button>
                    <button type="submit" id="submitBtn" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>

<script>
    let currentStep = 1;
    const totalSteps = 4;

    document.getElementById('nextBtn').addEventListener('click', () => {
        showLoading();
        setTimeout(() => {
            if (currentStep < totalSteps) {
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                currentStep++;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
            }
            hideLoading();
            updateButtons();
        }, 1500); // Simulate loading time
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        showLoading();
        setTimeout(() => {
            if (currentStep > 1) {
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                currentStep--;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
            }
            hideLoading();
            updateButtons();
        }, 1500); // Simulate loading time
    });

    function updateButtons() {
        document.getElementById('prevBtn').style.display = currentStep === 1 ? 'none' : 'inline-block';
        document.getElementById('nextBtn').style.display = currentStep === totalSteps ? 'none' : 'inline-block';
        document.getElementById('submitBtn').style.display = currentStep === totalSteps ? 'inline-block' : 'none';
    }

    function showLoading() {
        document.getElementById('loading').classList.remove('hidden');
    }

    function hideLoading() {
        document.getElementById('loading').classList.add('hidden');
    }

    // Initialize buttons on page load
    updateButtons();
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let childCount = 1;
        const maxChildren = 3;
        const addChildButton = document.getElementById('add-child');

        addChildButton.addEventListener('click', function () {
            if (childCount < maxChildren) {
                childCount++;
                    document.getElementById(`child${childCount}`).classList.remove('hidden');
                document.getElementById(`child${childCount}-label`).classList.remove('hidden');
            }
        });

        document.querySelectorAll('.remove-child').forEach(button => {
            button.addEventListener('click', function () {
                const parentDiv = this.parentElement.parentElement.parentElement;
                parentDiv.classList.add('hidden');
                    parentDiv.querySelectorAll('input').forEach(input => input.value = '');
                    const labelDiv = document.getElementById(`${parentDiv.id}-label`);
                    if (labelDiv) {
                        labelDiv.classList.add('hidden');
                }
                childCount--;
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let employmentCount = 1;
        const maxEmployment = 3;
        const addEmploymentButton = document.getElementById('add-employment');

        addEmploymentButton.addEventListener('click', function () {
            if (employmentCount < maxEmployment) {
                employmentCount++;
                document.getElementById(`employment${employmentCount}`).classList.remove('hidden');
                document.getElementById(`employment${employmentCount}-label`).classList.remove('hidden');
            }
        });

        document.querySelectorAll('.remove-employment').forEach(button => {
            button.addEventListener('click', function () {
                const parentDiv = this.parentElement.parentElement.parentElement;
                parentDiv.classList.add('hidden');
                parentDiv.querySelectorAll('input').forEach(input => input.value = '');
                const labelDiv = document.getElementById(`${parentDiv.id}-label`);
                if (labelDiv) {
                    labelDiv.classList.add('hidden');
                }
                employmentCount--;
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let characterReferenceCount = 1;
        const maxCharacterReferences = 3;
        const addCharacterReferenceButton = document.getElementById('add-character-reference');

        addCharacterReferenceButton.addEventListener('click', function () {
            if (characterReferenceCount < maxCharacterReferences) {
                characterReferenceCount++;
                document.getElementById(`character-reference${characterReferenceCount}`).classList.remove('hidden');
                document.getElementById(`character-reference${characterReferenceCount}-label`).classList.remove('hidden');
            }
        });

        document.querySelectorAll('.remove-character-reference').forEach(button => {
            button.addEventListener('click', function () {
                const parentDiv = this.parentElement.parentElement.parentElement;
                parentDiv.classList.add('hidden');
                parentDiv.querySelectorAll('input').forEach(input => input.value = '');
                const labelDiv = document.getElementById(`${parentDiv.id}-label`);
                if (labelDiv) {
                    labelDiv.classList.add('hidden');
                }
                characterReferenceCount--;
            });
        });
    });
</script>