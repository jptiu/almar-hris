<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <div class="relative">
        <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Request Check</h1>
    </div>

    <!-- Dashboard actions -->
    <div class="sm:flex sm:justify-between sm:items-center mb-4">
        <div></div>

        <!-- Right: Actions -->
        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

            <!-- Filter button -->
            
            <!-- <x-dropdown-filter align="right" /> -->

            <!-- Add view button -->
            
            <div id="modal" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog"
                aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <form action="{{ route('barangay.importcsv') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div
                                            class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <svg class="h-6 w-6 text-blue-500" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="16 16 12 12 8 16" />
                                                <line x1="12" y1="12" x2="12" y2="21" />
                                                <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3" />
                                                <polyline points="16 16 12 12 8 16" />
                                            </svg>
                                        </div>
                                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                            <h3 class="text-base font-semibold leading-6 text-gray-900"
                                                id="modal-title">Import Barangay</h3>
                                            <div class="mt-2">
                                                <div class="fields">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control" id="file"
                                                            name="file" accept=".csv">
                                                        <label class="input-group-text"
                                                            for="file">Upload</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="submit"
                                        class="inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Upload</button>
                                    <button id="hide-modal" type="button"
                                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <h2 class="mb-4">Branch Manager: Request Check</h2>

        <!-- Form -->
        <form action="#" method="POST" class="mb-6">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Date -->
                <div>
                    <label for="request_date" class="block mb-1">Date</label>
                    <input type="date" name="request_date" id="request_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" required>
                </div>
                <!-- Amount -->
                <div>
                    <label for="amount" class="block mb-1">Amount</label>
                    <input type="number" step="0.01" name="amount" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" required>
                </div>
                <!-- Submit Button -->
                <div class="flex items-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
                </div>
            </div>
        </form>

        <!-- Display Requested Checks -->
        <h3 class="mb-2">Requested Checks</h3>
        <table class="table-auto border-collapse border border-gray-200 w-full">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Date</th>
                    <th class="border px-4 py-2">Amount</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 py-2"></td>
                    </tr>
                
                    <tr>
                        <td colspan="2" class="border px-4 py-2 text-center">No requests found.</td>
                    </tr>
                
            </tbody>
        </table>
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
