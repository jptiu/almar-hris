<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Automated Payment Reminder Request Form</h1>
        </div>

        <div class="bg-slate-200 p-3 rounded-t-lg">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div>
                    <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold ml-2">Automated Payment Reminder Form</h1>
                </div>
                <div class="lg:col-span-2">
                </div>
            </div>
        </div>
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div>
                    
                    <form>
                        <div class="grid grid-cols-6 gap-4">
                        <div class="md:col-span-1"></div>
                            <div class="md:col-span-2">
                                <label for="customer" class="text-black font-medium">Select Customer</label>
                                <div class="relative">
                                    <input type="text" id="customerInput" placeholder="Type to search..."
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        oninput="filterCustomers()" />
                                    <ul id="customerDropdown"
                                        class="absolute bg-white border border-gray-300 rounded-lg w-full mt-1 hidden max-h-48 overflow-y-auto z-10">
                                        
                                            <li class="px-4 py-2 cursor-pointer hover:bg-blue-500 hover:text-white"
                                                onclick="">
                                                
                                            </li>
                                        
                                    </ul>
                                    <input type="hidden" name="customer" id="selectedCustomer">
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label for="leaveType" class="block text-sm font-medium text-gray-700">Status</label>
                                <select id="leaveType" name="leaveType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>Select Type</option>
                                    <option>Due Soon</option>
                                    <option>Pending Approval</option>
                                </select>
                            </div>

                            <div class="md:col-span-1"></div>

                            <div class="md:col-span-1"></div>
                            <div class="md:col-span-2">
                                <label for="startDate" class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="date" id="startDate" name="startDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>

                            <div class="md:col-span-2">
                                <label for="amount_due" class="block text-sm font-medium text-gray-700">Amount Due</label>
                                <input type="text" name="birth_place" id="amount_due"
                                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm">
                            </div>
                            <div class="md:col-span-1"></div>

                            <div class="md:col-span-1"></div>

                            <div class="md:col-span-2 mb-4 mt-4">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Confirm Submission</button>
                            </div>

                            <div class="mb-4 grid grid-cols-2 gap-4">
                            <div>
                            
                            </div>
                        </div>

                        </div>
                    </form>
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
