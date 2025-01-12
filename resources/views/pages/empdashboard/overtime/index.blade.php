<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <section class="container px-4 mx-auto py-8">
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-1/4 bg-onyx-200 p-6 rounded-lg">
                <a href="{{ route('employeeDashboard.show') }}" class="text-white font-medium block mb-8">
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
                <form action="#" method="POST">
                    @csrf
                    <h2 class="text-xl font-semibold mb-2 pt-8">Overtime Request Form</h2>
                    <p class="text-gray-600 text-sm mt-2 mb-8">Please fill out the form below to submit your overtime request. Ensure all fields are completed accurately.</p>
                    <div class="mb-4 grid grid-cols-3 gap-4">
                        <div>
                            <label for="startDate" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" id="startDate" name="startDate" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="start-time" class="block text-sm font-medium text-gray-900 dark:text-white">Start time:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input type="time" id="start-time" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" min="09:00" max="18:00" value="00:00" required />
                            </div>
                        </div>
                        <div>
                            <label for="end-time" class="block text-sm font-medium text-gray-900 dark:text-white">End time:</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input type="time" id="end-time" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" min="09:00" max="18:00" value="00:00" required />
                            </div>
                        </div>
                    </div>
                    <div class="mb-4"> 
                        <label for="reason" class="block text-sm font-medium text-gray-700">
                            Reason for undertime.
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
