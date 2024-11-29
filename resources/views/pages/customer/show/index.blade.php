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
            

            <!-- First Section: Personal Information -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Personal Information</h3>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">First Name</label>
                        <p class="text-gray-900">John</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Last Name</label>
                        <p class="text-gray-900">Doe</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Middle Name</label>
                        <p class="text-gray-900">Smith</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Birth Place</label>
                        <p class="text-gray-900">CDO</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Birthdate</label>
                        <p class="text-gray-900">01/01/1990</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Permanent Address</label>
                        <p class="text-gray-900">123 Main St, City, Country</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Present Address</label>
                        <p class="text-gray-900">123 Main St, City, Country</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Civil Status</label>
                        <p class="text-gray-900">Single</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Age</label>
                        <p class="text-gray-900">26</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Gender</label>
                        <p class="text-gray-900">Male</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Citizenship</label>
                        <p class="text-gray-900">Filipino-American</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Facebook Name</label>
                        <p class="text-gray-900">Cj Simene</p>
                    </div>
                </div>
            </div>

            <!-- Separator Line -->
            <hr class="my-6 border-gray-300" />

            <!-- Second Section: Spousal Data -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Spousal Data</h3>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Complete Name of Spouse</label>
                        <p class="text-gray-900">John Doe</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Contact Number</label>
                        <p class="text-gray-900">9284920580</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Birthdate</label>
                        <p class="text-gray-900">01/01/1990</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Age</label>
                        <p class="text-gray-900">26</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Occupation</label>
                        <p class="text-gray-900">Dev</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Company Name/ Address</label>
                        <p class="text-gray-900">CJK CDO</p>
                    </div>
                    <div class="w-full sm:w-1/3 mb-4">
                        <label class="block text-gray-500">Facebook Name</label>
                        <p class="text-gray-900">John Doe</p>
                    </div>
                </div>
            </div>

            <!-- Separator Line -->
            <hr class="my-6 border-gray-300" />

            <!-- Third Section: Company Information -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Company Information</h3>
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Agency Name</label>
                        <p class="text-gray-900">CJK</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Address / Tel. no</label>
                        <p class="text-gray-900">CDO 20294820</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Company Name</label>
                        <p class="text-gray-900">CJK CDO</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Address / Tel. no</label>
                        <p class="text-gray-900">CDO 20294820</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Date Hired</label>
                        <p class="text-gray-900">01/01/2025</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Day Off</label>
                        <p class="text-gray-900">MWF</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Position</label>
                        <p class="text-gray-900">Dev</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Monthly Salary</label>
                        <p class="text-gray-900">50,000</p>
                    </div>
                    <div class="w-full sm:w-1/2 mb-4">
                        <label class="block text-gray-500">Salary Schedule</label>
                        <p class="text-gray-900">MWF</p>
                    </div>
                </div>
            </div>

            <!-- Separator Line -->
        <hr class="my-6 border-gray-300" />

        <!-- Fourth Section: For Pensioners ONLY -->
        <div>
            <h3 class="text-2xl font-semibold mb-4">For Pensioners ONLY</h3>
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Monthly Pension</label>
                    <p class="text-gray-900">N/A</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Pension Schedule</label>
                    <p class="text-gray-900">N/A</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Pension Type</label>
                    <p class="text-gray-900">N/A</p>
                </div>
            </div>
        </div>
        <!-- Separator Line -->
        <hr class="my-6 border-gray-300" />

        <!-- Fifth Section: Background Data -->
        <div>
            <h3 class="text-2xl font-semibold mb-4">Background Data</h3>
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Father's Name</label>
                    <p class="text-gray-900">Cj Simene</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Contact No.</label>
                    <p class="text-gray-900">04957382957</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Mother's Name</label>
                    <p class="text-gray-900">J Simene</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Contact No.</label>
                    <p class="text-gray-900">04957382957</p>
                </div>
            </div>
        </div>
        <!-- Separator Line -->
        <hr class="my-6 border-gray-300" />

        <!-- Last Section: Bank Account Informations -->
        <div>
            <h3 class="text-2xl font-semibold mb-4">Bank Account Informations</h3>
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Bank / Branch</label>
                    <p class="text-gray-900">Cj Bank</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Card No.</label>
                    <p class="text-gray-900">049573</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Account No.</label>
                    <p class="text-gray-900">2928</p>
                </div>
                <div class="w-full sm:w-1/2 mb-4">
                    <label class="block text-gray-500">Pin No.</label>
                    <p class="text-gray-900">1234</p>
                </div>
            </div>
        </div>
        </div>

        

        </div>
        </div>

        



        <!-- Cards -->
        <!-- <section class="container px-4 mx-auto mt-12">
            <h3 class="text-2xl font-semibold mb-4">Pending/Submittedsss Requests</h3>
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
        </section>     -->

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
