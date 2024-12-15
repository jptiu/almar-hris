<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Request Leave</h1>
        </div>

        <div class="bg-slate-200 p-3 rounded-t-lg">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                <div>
                    <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold ml-2">Leave Application Form</h1>
                </div>
                <div class="lg:col-span-2">
                </div>
            </div>
        </div>
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            
            <div class="grid grid-cols-4 gap-4">
                <!-- <div class="bg-white p-4 border-r-2 border-gray-100 col-span-1">
                    <ul class="space-y-4"> 
                        <li> <strong>Full Name:</strong> John Doe </li> 
                        <li> <strong>Available Leave Credits:</strong> 15 </li> 
                        <li> <strong>Current Leave Credits:</strong> 5 </li> 
                    </ul>
                </div> -->
                <div class="bg-white p-4 rounded-lg col-span-6">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-4 grid grid-cols-3 gap-4">
                            <div>
                                <label for="daysWithPay" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="name" id="daysWithPay" name="daysWithPay" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="leaveType" class="block text-sm font-medium text-gray-700">Department</label>
                                <select id="leaveType" name="leaveType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>Select Type</option>
                                    <option>HR</option>
                                    <option>Admin</option>
                                </select>
                            </div>
                            <div>
                                <label for="leaveType" class="block text-sm font-medium text-gray-700">Position</label>
                                <select id="leaveType" name="leaveType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>Select Type</option>
                                    <option>HR</option>
                                    <option>Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4 grid grid-cols-3 gap-4">
                            <div>
                                <label for="startDate" class="block text-sm font-medium text-gray-700">Start Date</label>
                                <input type="date" id="startDate" name="startDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="endDate" class="block text-sm font-medium text-gray-700">End Date</label>
                                <input type="date" id="endDate" name="endDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="leaveType" class="block text-sm font-medium text-gray-700">Leave Type</label>
                                <select id="leaveType" name="leaveType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="Sick Leave">Sick Leave</option>
                                    <option value="Maternity Leave">Maternity Leave</option>
                                    <option value="Paternity Leave">Paternity Leave</option>
                                    <option value="Unpaid Leave">Unpaid Leave</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4 grid grid-cols-3 gap-4">
                            <div>
                                <label for="daysWithPay" class="block text-sm font-medium text-gray-700">No. of Days with Pay</label>
                                <input type="number" id="daysWithPay" name="daysWithPay" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="daysWithoutPay" class="block text-sm font-medium text-gray-700">No. of Days without Pay</label>
                                <input type="number" id="daysWithoutPay" name="daysWithoutPay" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
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

                        
                        <div class="mb-4 grid grid-cols-3 gap-4">
                            <div>
                                <label for="daysWithPay" class="block text-sm font-medium text-gray-700">Available Leave Credits</label>
                                <input type="number" id="daysWithPay" name="daysWithPay" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="daysWithoutPay" class="block text-sm font-medium text-gray-700">Current Leave Credits</label>
                                <input type="number" id="daysWithoutPay" name="daysWithoutPay" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                        <div class="mb-4" id="customTime" style="display: none;">
                            <label for="customHours" class="block text-sm font-medium text-gray-700">Custom Time (Hours:Minutes)</label>
                            <input type="time" id="customHours" name="customHours" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div class="mb-4"> 
                            <label for="reason" class="block text-sm font-medium text-gray-700">
                                Reason of Leave
                            </label> 
                            <textarea id="reason" name="reason" rows="4" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </textarea>
                        </div>
                        <div class="mb-4 mt-8 text-right">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Confirm Submission</button>
                        </div>
                    </form>
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
