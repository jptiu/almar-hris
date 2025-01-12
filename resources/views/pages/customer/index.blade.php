<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Employee Profile</h1>
        </div>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            <div class="mb-6">
                <!-- Horizontal Tabs -->
                <div class="flex border-b">
                    <button class="tab-link px-4 py-2 -mb-px border-b-2 focus:outline-none" onclick="openTab(event, 'summary')">Employee Summary</button>
                    <button class="tab-link px-4 py-2 -mb-px text-gray-500 hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500 focus:outline-none" onclick="openTab(event, 'basic')">Basic Info</button>
                    <button class="tab-link px-4 py-2 -mb-px text-gray-500 hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500 focus:outline-none" onclick="openTab(event, 'work')">Work Info</button>
                    <button class="tab-link px-4 py-2 -mb-px text-gray-500 hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500 focus:outline-none" onclick="openTab(event, 'other')">Other Info</button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content mt-6" id="summary">
                    <div class="flex">
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
                                <div class="mt-4">
                                    <h4 class="text-lg font-medium text-gray-700">Employee Credits:</h4> 
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
                </div>

                <!-- basic Information Tab -->
                <div class="tab-content mt-6" id="basic" style="display:none;">
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

                        </div>
                </div>

                <!-- work Information Tab -->
                <div class="tab-content mt-6" id="work" style="display:none;">
                    <h2 class="text-xl font-bold mb-6">Work Information</h2>
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
                        </div>

                        <!-- Separator Line -->
                        <hr class="my-6 border-gray-300" />
                </div>

                <!-- Other Information Tab -->
                <div class="tab-content mt-6" id="other" style="display:none;">
                    <h2 class="text-xl font-bold">Other Information</h2>
                    <!-- Add your other information content here -->
                </div>
            </div>
        </div> 

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

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" text-blue-500 border-blue-500", " text-gray-500 border-transparent");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " text-blue-500 border-blue-500";
    }

    // Trigger the first tab to be active on page load
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.tab-link')[0].click();
    });
</script>
