<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">My Profile</h1>
        </div>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="flex items-center text-gray-600 mb-12">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <a href="{{ route('customer.index') }}" class="text-base font-semibold">Back</a>
        </div>

            <!-- Tabs Section -->
            <div class="mt-6 mb-8 border-b border-gray-200">
                <!-- Tabs -->
                <nav class="flex space-x-4">
                    <!-- Profile Tab -->
                    <button
                    id="profile-tab"
                    class="tab-btn px-4 py-2 text-sm font-medium text-accent-600 border-b-2 border-accent-100 hover:text-accent-600 focus:outline-none"
                    onclick="switchTab('profile')"
                    >
                    Profile Information
                    </button>
                    <!-- Loan History Tab -->
                    <button
                    id="loan-history-tab"
                    class="tab-btn px-4 py-2 text-sm font-medium text-gray-500 border-b-2 border-accent-100 hover:text-accent-600 focus:outline-none"
                    onclick="switchTab('loan-history')"
                    >
                    Loan History
                    </button>
                </nav>
            </div>
            

            <div id="loan-history" class="tab-content mt-6 hidden">
                <!-- Page Header -->
                <!-- <div class="flex justify-between items-center mb-6">
                    <h1 class="text-xl font-bold text-gray-800">Loan History</h1>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-medium px-4 py-2 rounded-md">
                    Add New Loan
                    </button>
                </div> -->

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100 text-left text-sm font-medium text-gray-600">
                        <th class="border border-gray-200 px-4 py-2">Loan Type</th>
                        <th class="border border-gray-200 px-4 py-2">Transaction Type</th>
                        <th class="border border-gray-200 px-4 py-2">Transaction No</th>
                        <th class="border border-gray-200 px-4 py-2">Date of Loan</th>
                        <th class="border border-gray-200 px-4 py-2">Customer ID</th>
                        <th class="border border-gray-200 px-4 py-2">Customer Type</th>
                        <th class="border border-gray-200 px-4 py-2">Status</th>
                        <th class="border border-gray-200 px-4 py-2">Collateral</th>
                        <th class="border border-gray-200 px-4 py-2">Cert</th>
                        <th class="border border-gray-200 px-4 py-2">Principal Amount</th>
                        <th class="border border-gray-200 px-4 py-2">Days to Pay</th>
                        <th class="border border-gray-200 px-4 py-2">Months to Pay</th>
                        <th class="border border-gray-200 px-4 py-2">Interest Rate</th>
                        <th class="border border-gray-200 px-4 py-2">Interest Amount</th>
                        <th class="border border-gray-200 px-4 py-2">SVC Charge</th>
                        <th class="border border-gray-200 px-4 py-2">Payable Amount</th>
                        <th class="border border-gray-200 px-4 py-2">Branch ID</th>
                        <th class="border border-gray-200 px-4 py-2">File</th>
                        <th class="border border-gray-200 px-4 py-2">Note</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700">
                        <!-- Example Row -->
                        @foreach($customer->loans as $loan)
                        <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2">{{$loan->loan_type}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->transaction_type}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->id}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->date_of_loan}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$customer->id}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->customer_type}}</td>
                        <td class="border border-gray-200 px-4 py-2 text-green-600 font-medium">{{$loan->status}}</td>
                        <td class="border border-gray-200 px-4 py-2 text-center">{{$loan->transaction_with_collateral}}</td>
                        <td class="border border-gray-200 px-4 py-2 text-center">{{$loan->transaction_with_cert}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->principal_amount}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->days_to_pay}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->months_to_pay}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->interest}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->interest_amount}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->svc_charge}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->payable_amount}}</td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->branch_id}}</td>
                        <td class="border border-gray-200 px-4 py-2">
                            <a href="#" class="text-blue-500 underline">Download</a>
                        </td>
                        <td class="border border-gray-200 px-4 py-2">{{$loan->note}}</td>
                        </tr>
                        <!-- Repeat rows for more data -->
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>


            <!-- First Section: Personal Information -->
            <div id="profile" class="tab-content mt-6"> 
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Personal Information</h3>
                    <div>
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Customer Type:</div>
                            <div class="text-gray-900">{{$customer->type}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Full Name:</div>
                            <div class="text-gray-900">{{$customer->first_name}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Personal Contact Number:</div>
                            <div class="text-gray-900">{{$customer->cell_number}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Birthdate:</div>
                            <div class="text-gray-900">{{$customer->birth_date}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Birth Place:</div>
                            <div class="text-gray-900">{{$customer->birth_place}} </div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Address:</div>
                            <div class="text-gray-900">{{$customer->house}}, {{$customer->street}},
                            {{$customer->barangay}}, {{$customer->city}}
                            </div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Civil Status:</div>
                            <div class="text-gray-900">{{$customer->civil_status}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Age:</div>
                            <div class="text-gray-900">{{$customer->age}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Gender:</div>
                            <div class="text-gray-900">{{$customer->gender}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Citizenship:</div>
                            <div class="text-gray-900">{{$customer->citizenship}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Facebook:</div>
                            <div class="text-gray-900">{{$customer->facebook_name}}</div>
                        </li> 
                    </div>
                    
                </div>

                <!-- Separator Line -->
                <hr class="my-6 border-gray-300" />

                <!-- Second Section: Spousal Data -->

                <div>
                    <h3 class="text-2xl font-semibold mb-4">Spousal Data</h3>
                    <div>
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Complete Name of Spouse:</div>
                            <div class="text-gray-900">{{$customer->spouse_name}}</div>
                        </li>   

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Personal Contact Number:</div>
                            <div class="text-gray-900">{{$customer->cell_number}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Birthdate:</div>
                            <div class="text-gray-900">{{$customer->birth_date}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Age:</div>
                            <div class="text-gray-900">{{$customer->age}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Occupation:</div>
                            <div class="text-gray-900">{{$customer->occupation}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Company Name/ Address:</div>
                            <div class="text-gray-900">{{$customer->c_nameadd}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Facebook:</div>
                            <div class="text-gray-900">{{$customer->facebook_name}}</div>
                        </li> 
                    </div>
                    
                </div>

                <!-- Separator Line -->
                <hr class="my-6 border-gray-300" />

                <!-- Third Section: Company Information -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Company Information</h3>
                    <div>
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Agency Name:</div>
                            <div class="text-gray-900">{{$customer->agency_name}}</div>
                        </li>   

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Address / Tel. no:</div>
                            <div class="text-gray-900">{{$customer->add_tel}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Company Name:</div>
                            <div class="text-gray-900">{{$customer->comp_name}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Address / Tel. no:</div>
                            <div class="text-gray-900">{{$customer->add_tel}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Date Hired:</div>
                            <div class="text-gray-900">{{$customer->date_hired}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Day Off:</div>
                            <div class="text-gray-900">{{$customer->day_off}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Position:</div>
                            <div class="text-gray-900">{{$customer->job_position}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Monthly Salary:</div>
                            <div class="text-gray-900">{{$customer->monthly_salary}}</div>
                        </li> 

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Salary Schedule:</div>
                            <div class="text-gray-900">{{$customer->salary_sched}}</div>
                        </li> 
                    </div>
                    
                </div>
                    
                    
                
                        
                <!-- Separator Line -->
                <hr class="my-6 border-gray-300" />

                <!-- Fourth Section: For Pensioners ONLY -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">For Pensioners ONLY</h3>
                    <div>
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Monthly Pension:</div>
                            <div class="text-gray-900">{{$customer->monthly_pension}}</div>
                        </li>   

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Pension Schedule:</div>
                            <div class="text-gray-900">{{$customer->pension_sched}}</div>
                        </li>  

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Pension Type:</div>
                            <div class="text-gray-900">{{$customer->pension_type}}</div>
                        </li>  

                    </div>
                    
                </div>
            
                <!-- Separator Line -->
                <hr class="my-6 border-gray-300" />

                <!-- Fifth Section: Background Data -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Background Data</h3>
                    <div>
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Father's Name:</div>
                            <div class="text-gray-900">{{$customer->fathers_name}}</div>
                        </li>   
                        
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Contact No.:</div>
                            <div class="text-gray-900">{{$customer->cell_number}}</div>
                        </li>   
                        
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Mother's Name:</div>
                            <div class="text-gray-900">{{$customer->mothers_name}}C Simene</div>
                        </li>    

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Contact No.:</div>
                            <div class="text-gray-900">{{$customer->cell_number}}</div>
                        </li>   
                    </div>
                    
                </div>

                <!-- Separator Line -->
                <hr class="my-6 border-gray-300" />

                <!-- Last Section: Bank Account Informations -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Bank Account Informations</h3>
                    <div>
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Bank / Branch:</div>
                            <div class="text-gray-900">{{$customer->branch}}</div>
                        </li>   
                        
                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Card No.:</div>
                            <div class="text-gray-900">{{$customer->card_no}}</div>
                        </li>    

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Account No.:</div>
                            <div class="text-gray-900">{{$customer->acc_no}}</div>
                        </li>   

                        <li class="flex flex-wrap mb-2">
                            <div class="text-gray-500 w-72">Pin No.:</div>
                            <div class="text-gray-900">{{$customer->pin_no}}</div>
                        </li>   
                    </div>
                    
                </div>  
            </div>

    </div>
    
</x-app-layout>

<script>
    function switchTab(tabId) {
        // Hide all tab content
        document.querySelectorAll(".tab-content").forEach((content) => {
        content.classList.add("hidden");
        });

        // Remove active styles from all tab buttons
        document.querySelectorAll(".tab-btn").forEach((btn) => {
        btn.classList.remove("text-accent-600", "border-accent-100");
        btn.classList.add("text-gray-500");
        });

        // Show the selected tab content
        document.getElementById(tabId).classList.remove("hidden");

        // Highlight the active tab button
        document
        .getElementById(tabId + "-tab")
        .classList.add("text-accent-600", "border-accent-100");
        document
        .getElementById(tabId + "-tab")
        .classList.remove("text-gray-500");
    }

    // Set default active tab
    switchTab("profile");
</script>
