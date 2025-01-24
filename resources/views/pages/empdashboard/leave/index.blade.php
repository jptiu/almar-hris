<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <section class="container px-4 mx-auto py-8">
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-1/4 bg-onyx-200 p-6 rounded-lg">
                <a href="{{ route('customer.index') }}" class="text-white font-medium block mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back
                </a>
               
                <ul class="space-y-4 text-white"> 
                    <li> <strong>Full Name:</strong> John Doe </li> 
                    <li> <strong>Department:</strong> CDO HR </li> 
                    <li> <strong>Position:</strong> Collector </li> 
                    <li> <strong>Available Leave Credits:</strong> 15 </li> 
                    <li> <strong>Current Leave Credits:</strong> 5 </li> 
                </ul>
            </div>

            <!-- Form Content -->
            <div class="w-3/4 bg-white p-8">
                <form action="{{ route('leaveEmployee.store') }}" method="POST">
                    @csrf
                    <h2 class="text-xl font-semibold mb-2 pt-8">Leave Request Form</h2>
                    <p class="text-gray-600 text-sm mt-2 mb-8">Please fill out the form below to submit your leave request. Ensure all fields are completed accurately.</p>
                    <div class="mb-4 grid grid-cols-3 gap-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                            <input type="date" id="end_date" name="end_date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="leave_type" class="block text-sm font-medium text-gray-700">Leave Type</label>
                            <select id="leave_type" name="leave_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="Sick Leave">Sick Leave</option>
                                <option value="Maternity Leave">Maternity Leave</option>
                                <option value="Paternity Leave">Paternity Leave</option>
                                <option value="Unpaid Leave">Unpaid Leave</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-3 gap-4">
                        <div>
                            <label for="days_with_pay" class="block text-sm font-medium text-gray-700">No. of Days with Pay</label>
                            <input type="number" id="days_with_pay" name="days_with_pay" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="days_without_pay" class="block text-sm font-medium text-gray-700">No. of Days without Pay</label>
                            <input type="number" id="days_without_pay" name="days_without_pay" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="duration" class="block text-sm font-medium text-gray-700">Duration</label>
                            <select id="duration" name="duration" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" onchange="toggleCustomTime(this.value)">
                                <option value="Select">Select</option>
                                <option value="Half Day">Half Day</option>
                                <option value="Whole Day">Whole Day</option>
                                <option value="Custom">Custom</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4"> 
                        <label for="reason" class="block text-sm font-medium text-gray-700">
                            Reason of Leave
                        </label> 
                        <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4 mt-8 text-right">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Confirm Submission</button>
                    </div>
                </form>
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
