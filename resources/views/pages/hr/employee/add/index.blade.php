<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Employment Information Sheet</h1>
        </div>

        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">

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
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div>
                            <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-2">Personal Detail</h1>
                            <span>Fill up the inputs to add Employee.</span>
                        </div>

                        <div class="lg:col-span-2">
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Position</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                <div class="md:col-span-1">
                                    <select name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                        <option value="business loan">Collector</option>
                                        <option value="personal loan">Branch Manager</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Full Name</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                <div class="md:col-span-2">
                                    <label for="first_name">First Name</label>
                                    <div>
                                        <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="last_name">Last Name</label>
                                    <div>
                                        <input name="last_name" id="last_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="middle_name">Middle Name</label>
                                    <div>
                                        <input name="middle_name" id="middle_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
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
                            <p class="font-medium text-lg">Address</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                <div class="md:col-span-1">
                                    <label for="house">Present Address</label>
                                    <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="street">Provincial Address</label>
                                    <input type="text" name="street" id="street" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Phone</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                <div class="md:col-span-1">
                                    <label for="first_name">Phone Number</label>
                                    <div>
                                        <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="first_name">Tel Number(optional)</label>
                                    <div>
                                        <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
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
                                    <label for="tel_number">Birthdate</label>
                                    <input type="date" name="tel_number" id="tel_number" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="cell_number">Age</label>
                                    <input type="number" name="cell_number" id="cell_number" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                            </div>

                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2 mt-4">
                                <div class="md:col-span-1">
                                    <label for="job_position">Birth Place</label>
                                    <input type="text" name="job_position" id="job_position" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Civil Status</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                <div class="md:col-span-1">
                                    <label for="job_position">Civil Status</label>
                                    <select name="status" id="status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                    </select>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="job_position">Religion</label>
                                    <select name="status" id="status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                        <option value="single">Roman Catholic</option>
                                        <option value="married">Muslim</option>
                                        <option value="married">Iglesia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Height/Weight</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                <div class="md:col-span-1">
                                    <label for="house">Height</label>
                                    <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="cm" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="street">Weight</label>
                                    <input type="text" name="street" id="street" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="kg" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div>
                            <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-2">Additional Details</h1>
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
                                    <label for="first_name">Spouse First Name</label>
                                    <div>
                                        <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="last_name">Spouse Last Name</label>
                                    <div>
                                        <input name="last_name" id="last_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="middle_name">Spouse Middle Name</label>
                                    <div>
                                        <input name="middle_name" id="middle_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>
                            </div>  

                            <div class="text-gray-600 mb-1">
                                <p class="font-medium text-lg">Child 1</p>
                            </div>

                            <div class="lg:col-span-2 mb-4">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                    <div class="md:col-span-2">
                                        <label for="house">Full Name</label>
                                        <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="street">Age</label>
                                        <input type="text" name="street" id="street" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                    </div>
                                </div>
                            </div> 

                            <div class="text-gray-600 mb-1">
                                <p class="font-medium text-lg">Child 2</p>
                            </div>

                            <div class="lg:col-span-2 mb-4">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                    <div class="md:col-span-2">
                                        <label for="house">Full Name</label>
                                        <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                    </div>

                                    <div class="md:col-span-1">
                                        <label for="street">Age</label>
                                        <input type="text" name="street" id="street" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
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
                                        <label for="first_name">Mother's Maiden First Name</label>
                                        <div>
                                            <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="last_name">Mother's Maiden Last Name</label>
                                        <div>
                                            <input name="last_name" id="last_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="middle_name">Mother's Maiden Middle Name</label>
                                        <div>
                                            <input name="middle_name" id="middle_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  

                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                        <div class="md:col-span-2">
                                            <label for="house">Occupation</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="street">Phone No.</label>
                                            <input type="text" name="street" id="street" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
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
                                        <label for="first_name">Father's First Name</label>
                                        <div>
                                            <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="last_name">Father's Last Name</label>
                                        <div>
                                            <input name="last_name" id="last_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="middle_name">Father's Middle Name</label>
                                        <div>
                                            <input name="middle_name" id="middle_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  

                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                        <div class="md:col-span-2">
                                            <label for="house">Occupation</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="street">Phone No.</label>
                                            <input type="text" name="street" id="street" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>
                                    </div>

                                </div>                                
                            </div> 
                        
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div>
                            <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-2">In case of Emergency</h1>
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
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6 mb-4">

                                    <div class="md:col-span-2">
                                        <label for="first_name">First Name</label>
                                        <div>
                                            <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="last_name">Last Name</label>
                                        <div>
                                            <input name="last_name" id="last_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <label for="middle_name">Middle Name</label>
                                        <div>
                                            <input name="middle_name" id="middle_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                        </div>
                                    </div>
                                </div>  

                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                        <div class="md:col-span-1">
                                            <label for="house">Address</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="street">Phone No.</label>
                                            <input type="text" name="street" id="street" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="job_position">Relationship</label>
                                            <select name="status" id="status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                <option value="single">Parents</option>
                                                <option value="married">Acquaintance</option>
                                                <option value="married">Siblings</option>
                                            </select>
                                        </div>
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
                            <p class="font-medium text-lg"></p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">                    
                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                    <a href="{{ route('customer.index') }}" class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-4">Cancel</a>
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>
