<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Employee Profile</h1>
        </div>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="flex mb-6">
                <!-- First Section: Profile Image and Basic Info on the left -->
                <div class="w-1/4 flex items-center">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mr-4 border-4 {{ $employee->status == 'Regular' ? 'border-blue-500' : 'border-green-500' }}">
                        <!-- Profile Image placeholder -->
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="w-full h-full rounded-full object-cover" />
                    </div>
                    <div>
                        <p class="bg-green-500 px-2 text-xs w-1/2 text-center rounded font-semibold text-white">
                            Regular
                        </p>
                        <h2 class="text-xl font-bold">{{$employee->f_name .' '. $employee->l_name}}</h2>
                        <p class="text-gray-600">{{$employee->position_desired}}</p>
                    </div>
                </div>

                <!-- Add a gap between the two sections -->
                <div class="w-1/12"></div>

                <!-- Progress Bar on the right -->
                <div class="w-7/12 flex items-center justify-end relative">
                    <div class="w-full">
                        <label for="progress" class="block text-sm font-medium text-gray-700">
                            Regular
                        </label>
                        <div class="relative">
                            @if ($employee->status == 'Probation')
                                @php
                                    $startDate = \Carbon\Carbon::parse($employee->probation_start_date);
                                    $endDate = \Carbon\Carbon::parse($employee->probation_end_date);
                                    $currentDate = \Carbon\Carbon::now();
                                    $totalDays = $endDate->diffInDays($startDate);
                                    $elapsedDays = $currentDate->diffInDays($startDate);
                                    $percentage = ($elapsedDays / $totalDays) * 100;
                                @endphp
                                <div class="overflow-hidden h-4 text-xs flex rounded bg-blue-200">
                                    <div style="width: {{ $percentage }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                                </div>
                                <p class="text-right text-xs mt-1">{{ round($percentage) }}%</p>
                            @else
                                <div class="overflow-hidden h-4 text-xs flex rounded bg-green-200">
                                    <div style="width: 100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"></div>
                                </div>
                                <p class="text-right text-xs mt-1">100%</p>
                            @endif
                        </div>
                        <div class="flex items-center mt-2">
                            <p class="text-sm">Employment date: December 24, 2023</p>
                            <div class="ml-2 relative">
                                <span class="tooltip-icon cursor-pointer text-gray-500" title="Start of Probation Period December 24, 2023, End of Probation Period December 24, 2024">
                                    ⓘ
                                </span>
                            </div>
                        </div>
                        <!-- Add Employee Credits section -->
                        <div class="mt-4"> <h4 class="text-lg font-medium text-gray-700">Employee Credits:</h4> 
                            <div class="grid grid-cols-3 gap-4 mt-2"> 
                                <p class="text-sm mt-1">Holiday Leave: 0/3</p> 
                                <p class="text-sm mt-1">Sick Leave: 2/12</p> 
                                <p class="text-sm mt-1">Paid Leave: 0/60</p> 
                                <p class="text-sm mt-1">Other Leave: 5/10</p> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>


            <!-- Separator Line -->
            <hr class="my-6 border-gray-300" />

            <!-- Second Section: Personal Information -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Personal Information</h3>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">First Name</label>
                        <p class="text-gray-900">{{$employee->f_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Last Name</label>
                        <p class="text-gray-900">{{$employee->l_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Middle Name</label>
                        <p class="text-gray-900">{{$employee->m_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Age</label>
                        <p class="text-gray-900">{{$employee->age}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Birthdate</label>
                        <p class="text-gray-900">{{$employee->birth_date}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Present Address</label>
                        <p class="text-gray-900">{{$employee->present_address}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Provincial Address</label>
                        <p class="text-gray-900">{{$employee->provincial_address}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Phone Number</label>
                        <p class="text-gray-900">{{$employee->phone_number}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Birthdate</label>
                        <p class="text-gray-900">{{$employee->birth_date}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Birth Place</label>
                        <p class="text-gray-900">{{$employee->birth_place}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Civil Status</label>
                        <p class="text-gray-900">{{$employee->civil_status}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Religion</label>
                        <p class="text-gray-900">{{$employee->religion}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Height</label>
                        <p class="text-gray-900">{{$employee->Height}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Weight</label>
                        <p class="text-gray-900">{{$employee->weight}}</p>
                    </div>
                </div>
            </div>

            <!-- Separator Line -->
            <hr class="my-6 border-gray-300" />

            <div>
                <h3 class="text-2xl font-semibold mb-4">Family Information</h3>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Spouse Fullname</label>
                        <p class="text-gray-900">{{$employee->f_spouse .' '. $employee->m_spouse  .' '. $employee->l_spouse}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">First Child Fullname</label>
                        <p class="text-gray-900">{{$employee->child_1_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Second Child Fullname</label>
                        <p class="text-gray-900">{{$employee->child_2_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Third Child Fullname</label>
                        <p class="text-gray-900">{{$employee->child_3_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Mother's Maiden Name</label>
                        <p class="text-gray-900">{{$employee->m_maiden_f_name .' '. $employee->m_maiden_m_name  .' '. $employee->m_maiden_l_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Father's Maiden Name</label>
                        <p class="text-gray-900">{{$employee->father_f_name .' '. $employee->father_m_name  .' '. $employee->father_l_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Contact Person(Name)</label>
                        <p class="text-gray-900">{{$employee->emergency_name}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Contact Person(Address)</label>
                        <p class="text-gray-900">{{$employee->emergency_address}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Contact Person(Phone)</label>
                        <p class="text-gray-900">{{$employee->emergency_phone}}</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Contact Person(Relationship)</label>
                        <p class="text-gray-900">{{$employee->relationship}}</p>
                    </div>
                </div>
            </div>

            <!-- Separator Line -->
            <hr class="my-6 border-gray-300" />

            <!-- Third Section: Employment Details -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Employment Details</h3>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Designation</label>
                        <p class="text-gray-900">Software Engineer</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Branch/Department</label>
                        <p class="text-gray-900">IT Department</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Period of Service (Years)</label>
                        <p class="text-gray-900">5 Years</p>
                    </div>
                </div>
            </div>

            <!-- Separator Line -->
            <hr class="my-6 border-gray-300" />

            <!-- Fourth Section: Resignation Details -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Resignation Details</h3>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Date of Resignation</label>
                        <p class="text-gray-900">MM/DD/YYYY</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Resignation Effective Date</label>
                        <p class="text-gray-900">MM/DD/YYYY</p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Cards -->
        <section class="container px-4 mx-auto mt-12">
            <h3 class="text-2xl font-semibold mb-4">Pending/Submitted Requests</h3>
                <div class="flex flex-col">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-4">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Date Filed
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Leave Type
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Date From
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Date To
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                No of Days w/ Pay
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                               Reason
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                               Status
                                            </th>

                                            <th scope="col"
                                                class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Action
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                            <tr>
                                                <td
                                                    class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                    02/11/2024
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    Sick Leave
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    02/11/2024
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    02/12/2024
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    0
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    Sick
                                                </td>
                                                <td
                                                    class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    Pending
                                                </td>
                                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                    <div class="flex items-center gap-x-6">
                                                        <button
                                                            class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-eye"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                                <path
                                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                            </svg>
                                                        </button>

                                                        <a href="#"
                                                            class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pencil"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                                            </svg>
                                                        </a>

                                                        <form action="#"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="text-gray-500 mt-1 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                    <path
                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>    

    </div>
    
</x-app-layout>

<script>
function toggleCustomTime(value) {
    var customTime = document.getElementById('customTime');
    if (value === 'Custom') {
        customTime.style.display = 'block';
    } else {
        customTime.style.display = 'none';
    }
}
</script>

