<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        
        
        <!-- Cards -->
        <div class="flex justify-between relative items-center mb-4">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold lg:px-4">Pending Loans</h1>
            <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center">
            <div></div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />

                <!-- Add view button -->
                <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">Add View</span>
                </button>
                
            </div>

        </div>
        </div>
        <section class="container px-4 mx-auto">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black font-medium">
                                            ID
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black font-medium">
                                            Name
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black font-medium">
                                            Address
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black font-medium">
                                            Loan Amount
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black font-medium">
                                            Submission Date
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black font-medium">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                    @foreach ($loans as $loan)
                                        <>
                                            <td
                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                {{ $loan->id }}
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                {{ $loan->customer->first_name }} {{ $loan->customer->last_name}}
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                {{ $loan->customer->house }} {{ $loan->customer->street }}{{ $loan->customer->barangay }} {{ $loan->customer->city }}
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                {{ $loan->principal_amount }}
                                            </td>
                                            <td
                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                {{ $loan->date_of_loan }}
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <!-- Approve Button -->
                                                    <button id="show-approve-modal" class="bg-green-500 text-white hover:bg-green-700 flex items-center gap-x-2 px-4 py-2 font-semibold rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#F3F3F3">
                                                            <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z"/>
                                                        </svg>
                                                        <span class="hidden xs:block ml-2">Accept</span>
                                                    </button>

                                                    <!-- Decline Button -->
                                                    <button id="show-decline-modal" class="bg-red-400 text-white hover:bg-red-600 flex items-center gap-x-2 px-4 py-2 font-semibold rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#F3F3F3">
                                                            <path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z"/>
                                                        </svg>
                                                        <span class="hidden xs:block ml-2">Decline</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-end items-center justify-between mt-6">
                {{$loans->links()}}
            </div>
        </section>

        <!-- Approve Modal --> 
        <div  id="approve-modal" class="fixed z-10 inset-0 overflow-y-auto hidden opacity-0 transition-opacity duration-300"> 
            <div class="flex items-center justify-center min-h-screen"> 
                <div class="bg-white p-6 rounded shadow-md max-w-lg w-full"> 
                    <h2 class="text-lg font-bold">Are you sure you want to approve this loan?</h2> 
                    <label for="approve-notes" class="block text-sm font-medium text-gray-700 mt-4">
                        Additional Notes
                    </label> 
                        <textarea id="approve-notes" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea> 
                            <div class="mt-4 flex justify-end"> 
                                <button id="hide-approve-modal" class="px-4 py-2 bg-gray-300 rounded-md">Cancel</button> 
                                <button class="px-4 py-2 bg-blue-500 text-white rounded-md ml-2">Confirm</button> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                
        <!-- Decline Modal --> 
        <div id="decline-modal" class="fixed z-10 inset-0 overflow-y-auto hidden opacity-0 transition-opacity duration-300"> 
            <div class="flex items-center justify-center min-h-screen"> 
                <div class="bg-white p-6 rounded shadow-md max-w-lg w-full"> 
                    <h2 class="text-lg font-bold">Are you sure you want to decline this loan?</h2> 
                    <label for="decline-reason" class="block text-sm font-medium text-gray-700 mt-4">Reason for Disapproval</label> 
                        <textarea id="decline-reason" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea> 
                            <div class="mt-4 flex justify-end"> 
                                <button id="hide-decline-modal" class="px-4 py-2 bg-gray-300 rounded-md">Cancel</button> 
                                <button class="px-4 py-2 bg-blue-500 text-white rounded-md ml-2">Confirm</button> 
                            </div> 
                </div> 
            </div> 
        </div>

    </div>
</x-app-layout>

<script>
    // Approve Modal
    const showApproveModalButton = document.getElementById('show-approve-modal');
    const hideApproveModalButton = document.getElementById('hide-approve-modal');
    const approveModal = document.getElementById('approve-modal');

    showApproveModalButton.addEventListener('click', () => {
        approveModal.classList.remove('hidden');
        setTimeout(() => approveModal.classList.remove('opacity-0'), 10);
    });

    hideApproveModalButton.addEventListener('click', () => {
        approveModal.classList.add('opacity-0');
        setTimeout(() => approveModal.classList.add('hidden'), 300);
    });

    // Decline Modal
    const showDeclineModalButton = document.getElementById('show-decline-modal');
    const hideDeclineModalButton = document.getElementById('hide-decline-modal');
    const declineModal = document.getElementById('decline-modal');

    showDeclineModalButton.addEventListener('click', () => {
        declineModal.classList.remove('hidden');
        setTimeout(() => declineModal.classList.remove('opacity-0'), 10);
    });

    hideDeclineModalButton.addEventListener('click', () => {
        declineModal.classList.add('opacity-0');
        setTimeout(() => declineModal.classList.add('hidden'), 300);
    });
</script>

