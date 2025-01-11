<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        @if (session()->has('success'))
            <div class="alert alert-success">
                <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session()->get('success') }}</span>
                    </div>
                </div>
            </div>
        @endif
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
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
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
                                    @foreach ($loans['data'] as $loan)
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ $loan['id'] }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ $loan['customer']['first_name'] ?? 'N/A' }} {{ $loan['customer']['last_name'] ?? 'N/A' }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ $loan['customer']['house'] ?? '' }} {{ $loan['customer']['street'] ?? '' }}
                                                {{ $loan['customer']['barangay_name'] ?? '' }} {{ $loan['customer']['city_town'] ?? 'N/A' }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ number_format($loan['principal_amount'], 2) }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ \Carbon\Carbon::parse($loan['updated_at'])->format('M d, Y h:i A') }}
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <!-- Approve Button -->
                                                    <button id="show-approve-modal"
                                                        class="bg-green-400 text-white hover:bg-green-600 flex items-center gap-x-2 px-4 py-2 font-semibold rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                                            viewBox="0 -960 960 960" width="20px" fill="#F3F3F3">
                                                            <path
                                                                d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                                        </svg>
                                                        <span class="hidden xs:block ml-2">Approve</span>
                                                    </button>
                                                    <!-- Approve Modal -->
                                                    <div id="approve-modal"
                                                        class="fixed z-10 inset-0 overflow-y-auto hidden opacity-0 transition-opacity duration-300">
                                                        <div class="flex items-center justify-center min-h-screen">
                                                            <div
                                                                class="bg-white p-6 rounded shadow-md max-w-lg w-full">
                                                                <h2 class="text-lg font-bold">Are you sure you want to
                                                                    approve this loan?</h2>
                                                                <label for="approve-reason"
                                                                    class="block text-sm font-medium text-gray-700 mt-4">Reason
                                                                    for
                                                                    Approval</label>
                                                                <textarea id="approve-reason" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                                                                <div class="mt-4 flex justify-end">
                                                                    <button id="hide-approve-modal"
                                                                        class="px-4 py-2 bg-gray-300 rounded-md">Cancel</button>
                                                                    <button id="approve-confirm-btn"
                                                                        class="px-4 py-2 bg-red-500 text-white rounded-md ml-2">Confirm</button>
                                                                </div>

                                                                <!-- Hidden form to submit the approve reason -->
                                                                <form id="approve-form"
                                                                    action="{{ route('loan.approve', $loan['id']) }}"
                                                                    method="POST" class="hidden">
                                                                    @csrf
                                                                    <input type="hidden" name="reason"
                                                                        id="approve-reason-input">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Decline Button -->
                                                    <button id="show-decline-modal"
                                                        class="bg-red-400 text-white hover:bg-red-600 flex items-center gap-x-2 px-4 py-2 font-semibold rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                                            viewBox="0 -960 960 960" width="20px" fill="#F3F3F3">
                                                            <path
                                                                d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z" />
                                                        </svg>
                                                        <span class="hidden xs:block ml-2">Decline</span>
                                                    </button>
                                                    <!-- Decline Modal -->
                                                    <div id="decline-modal"
                                                        class="fixed z-10 inset-0 overflow-y-auto hidden opacity-0 transition-opacity duration-300">
                                                        <div class="flex items-center justify-center min-h-screen">
                                                            <div
                                                                class="bg-white p-6 rounded shadow-md max-w-lg w-full">
                                                                <h2 class="text-lg font-bold">Are you sure you want to
                                                                    decline this loan?</h2>
                                                                <label for="decline-reason"
                                                                    class="block text-sm font-medium text-gray-700 mt-4">Reason
                                                                    for
                                                                    Disapproval</label>
                                                                <textarea id="decline-reason" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                                                                <div class="mt-4 flex justify-end">
                                                                    <button id="hide-decline-modal"
                                                                        class="px-4 py-2 bg-gray-300 rounded-md">Cancel</button>
                                                                    <button id="decline-confirm-btn"
                                                                        class="px-4 py-2 bg-red-500 text-white rounded-md ml-2">Confirm</button>
                                                                </div>

                                                                <!-- Hidden form to submit the decline reason -->
                                                                <form id="decline-form"
                                                                    action="{{ route('loan.decline', $loan['id']) }}"
                                                                    method="POST" class="hidden">
                                                                    @csrf
                                                                    <input type="hidden" name="reason"
                                                                        id="decline-reason-input">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
            <!-- Pagination Section -->
            <div class="flex justify-between items-center mt-6">
                <nav>
                    <div class="pagination flex items-center gap-2">
                        @foreach ($loans['links'] as $link)
                            @if ($link['url'])
                                <a href="{{ route('pending.index') }}?{{ Arr::get(parse_url($link['url']), 'query', '') }}" 
                                   class="px-3 py-2 border rounded-md text-gray-600 {{ $link['active'] ? 'bg-indigo-500 text-white' : 'hover:bg-gray-200' }}">
                                    {!! $link['label'] !!}
                                </a>
                            @else
                                <span class="px-3 py-2 border rounded-md text-gray-400 cursor-not-allowed">{!! $link['label'] !!}</span>
                            @endif
                        @endforeach
                    </div>
                </nav>
            </div>
        </section>

        <!-- Approve Modal -->
        <div id="approve-modal"
            class="fixed z-10 inset-0 overflow-y-auto hidden opacity-0 transition-opacity duration-300">
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
        <div id="decline-modal"
            class="fixed z-10 inset-0 overflow-y-auto hidden opacity-0 transition-opacity duration-300">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white p-6 rounded shadow-md max-w-lg w-full">
                    <h2 class="text-lg font-bold">Are you sure you want to decline this loan?</h2>
                    <label for="decline-reason" class="block text-sm font-medium text-gray-700 mt-4">Reason for
                        Disapproval</label>
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
    const showModalButton = document.getElementById('show-modal');
    const hideModalButton = document.getElementById('hide-modal');
    const modal = document.getElementById('modal');

    showModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    hideModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>

<script>
    // Approve Modal
    const showApproveModalButton = document.getElementById('show-approve-modal');
    const hideApproveModalButton = document.getElementById('hide-approve-modal');
    const approveModal = document.getElementById('approve-modal');
    const approveConfirmBtn = document.getElementById('approve-confirm-btn');
    const approveReasonInput = document.getElementById('approve-reason');
    const approveForm = document.getElementById('approve-form');

    showApproveModalButton.addEventListener('click', () => {
        approveModal.classList.remove('hidden');
        setTimeout(() => approveModal.classList.remove('opacity-0'), 10);
    });

    hideApproveModalButton.addEventListener('click', () => {
        approveModal.classList.add('opacity-0');
        setTimeout(() => approveModal.classList.add('hidden'), 300);
    });

    approveConfirmBtn.addEventListener('click', () => {
        // Capture the approve reason
        const reason = approveReasonInput.value.trim();

        // If there's a reason, set it in the form input and submit
        if (reason) {
            document.getElementById('approve-reason-input').value = reason;
            approveForm.submit();
        } else {
            alert('Please provide a reason for the approve.');
        }
    });

    // Decline Modal
    const showDeclineModalButton = document.getElementById('show-decline-modal');
    const hideDeclineModalButton = document.getElementById('hide-decline-modal');
    const declineModal = document.getElementById('decline-modal');
    const declineConfirmBtn = document.getElementById('decline-confirm-btn');
    const declineReasonInput = document.getElementById('decline-reason');
    const declineForm = document.getElementById('decline-form');

    showDeclineModalButton.addEventListener('click', () => {
        declineModal.classList.remove('hidden');
        setTimeout(() => declineModal.classList.remove('opacity-0'), 10);
    });

    hideDeclineModalButton.addEventListener('click', () => {
        declineModal.classList.add('opacity-0');
        setTimeout(() => declineModal.classList.add('hidden'), 300);
    });

    declineConfirmBtn.addEventListener('click', () => {
        // Capture the decline reason
        const reason = declineReasonInput.value.trim();

        // If there's a reason, set it in the form input and submit
        if (reason) {
            document.getElementById('decline-reason-input').value = reason;
            declineForm.submit();
        } else {
            alert('Please provide a reason for the decline.');
        }
    });
</script>