<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />
        
         <!-- Cards -->
         <div class="flex justify-between relative items-center mb-4">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold lg:px-4">Employee Clock-in/Clock-out</h1>
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">

                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">John Doe</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: 7:00 AM</p>
                        <p>Clock-out: 5:00 PM</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-green-200 text-green-800 rounded-full">On-time</span>
                    </div>
                </div>
 
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">Jane Smith</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: 8:15 AM</p>
                        <p>Clock-out: 5:15 PM</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-orange-200 text-orange-800 rounded-full">Late</span>
                    </div>
                </div>
              
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">Bob Johnson</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: N/A</p>
                        <p>Clock-out: N/A</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full">Absent</span>
                    </div>
                </div>
                
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">Wow Mali</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: N/A</p>
                        <p>Clock-out: N/A</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full">Absent</span>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">Wow Mali</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: N/A</p>
                        <p>Clock-out: N/A</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full">Absent</span>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">Wow Mali</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: N/A</p>
                        <p>Clock-out: N/A</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full">Absent</span>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">Wow Mali</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: N/A</p>
                        <p>Clock-out: N/A</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full">Absent</span>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-24 h-24 rounded-full bg-gray-200"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">Wow Mali</h2>
                    <div class="text-center mt-4">
                        <p>Clock-in: N/A</p>
                        <p>Clock-out: N/A</p>
                    </div>
                    <div class="text-center mt-4">
                        <span class="px-2 py-1 bg-red-200 text-red-800 rounded-full">Absent</span>
                    </div>
                </div>
            </div>
        </section>


    </div>
</x-app-layout>
