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


        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <div class="container mx-auto p-4">
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                    <!-- Header Section -->
                    <div class="relative">
                        <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <div class="text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Attendance</h3>
                        </div>
                        <!-- Dropdown Trigger -->
                        <button id="dropdownButton" class="bg-onyx-300 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-onyx-200">
                            Clock In/Out ⌄
                        </button>
                        </div>
                        <!-- Dropdown Menu -->
                        <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md hidden">
                        <button id="clockIn" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Clock In
                        </button>
                        <button id="clockOut" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Clock Out
                        </button>
                        </div>
                    </div>

                    <!-- Attendance List -->
                    <div class="mt-4">
                        <div class="divide-y divide-gray-200">
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-600">01/06/25</span>
                            <span class="text-orange-500 font-bold">OUT</span>
                            <span class="text-gray-600">05:21 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-600">01/06/25</span>
                            <span class="text-blue-500 font-bold">IN</span>
                            <span class="text-gray-600">07:08 AM</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-600">01/06/25</span>
                            <span class="text-orange-500 font-bold">OUT</span>
                            <span class="text-gray-600">05:21 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-600">01/06/25</span>
                            <span class="text-blue-500 font-bold">IN</span>
                            <span class="text-gray-600">07:08 AM</span>
                        </div>
                        </div>
                    </div>
                    <!-- Footer Link -->
                    <!-- <div class="mt-4 text-center">
                        <a href="#" class="text-green-500 font-medium hover:underline">
                        Show Team Attendance →
                        </a>
                    </div> -->
                    </div>
                </div>

                <!-- Card 2-->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                    <div class="flex items-center space-x-2">
                        <div class="text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Notification</h3>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Your leave has been approved</p>
                        <p class="text-gray-600 text-sm">January 6, 2025</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">New announcement: Team meeting on Friday</p>
                        <p class="text-gray-600 text-sm">January 5, 2025</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Reminder: Submit your monthly report</p>
                        <p class="text-gray-600 text-sm">January 4, 2025</p>
                        </li>
                        
                        @foreach ($lists as $list)
                        <h1>sss</h1>
                            <a href="{{ route('employee.profile', $list->id) }}"
                                class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-eye"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </a>
                        @endforeach
                       
                    </ul>
                    <!-- <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition">
                        Learn More
                    </button> -->
                    </div>
                </div>

                <!-- Card 3-->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                    <div class="flex items-center space-x-2">
                        <div class="text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Pending Requests</h3>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Leave Request</p>
                        <p class="text-gray-600 text-sm">Date: January 6, 2025</p>
                        <p class="text-yellow-500 text-sm font-medium">Status: Pending</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Overtime Request</p>
                        <p class="text-gray-600 text-sm">Date: January 5, 2025</p>
                        <p class="text-yellow-500 text-sm font-medium">Status: Pending</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Undertime Request</p>
                        <p class="text-gray-600 text-sm">Date: January 4, 2025</p>
                        <p class="text-yellow-500 text-sm font-medium">Status: Pending</p>
                        </li>
                    </ul>
                    <!-- <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition">
                        Learn More
                    </button> -->
                    </div>
                </div>
                </div>
            </div>

            <!-- Confirmation Modal -->
            <div id="confirmationModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Are you sure?</h2>
                <p class="text-gray-600 mb-6">This action cannot be undone.</p>
                <div class="flex space-x-4">
                    <button 
                    id="confirmAction" 
                    class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition"
                    >
                    Yes, Proceed
                    </button>
                    <button 
                    id="cancelAction" 
                    class="bg-gray-300 text-gray-700 py-2 px-4 rounded hover:bg-gray-400 transition"
                    >
                    Cancel
                    </button>
                </div>
                </div>
            </div>
        </body>

        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <div class="container mx-auto p-4">
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                    <!-- Header Section -->
                    <div class="relative">
                        <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <div class="text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Leave Credits</h3>
                        </div>
                        
                        </div>
                    </div>

                    <table class="w-full text-left mt-4">
                        <thead>
                        <tr class="text-gray-600 font-medium">
                            <th class="py-2">Type</th>
                            <th class="py-2">Credits</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="py-2 text-gray-800">Sick Leave</td>
                            <td class="py-2 text-gray-800">8 days</td>
                        </tr>
                        <tr>
                            <td class="py-2 text-gray-800">Vacation Leave</td>
                            <td class="py-2 text-gray-800">10 days</td>
                        </tr>
                        <tr>
                            <td class="py-2 text-gray-800">Emergency Leave</td>
                            <td class="py-2 text-gray-800">5 days</td>
                        </tr>
                        <tr>
                            <td class="py-2 text-gray-800">Paternity Leave</td>
                            <td class="py-2 text-gray-800">5 days</td>
                        </tr>
                        <tr>
                            <td class="py-2 text-gray-800">Bereavement Leave</td>
                            <td class="py-2 text-gray-800">5 days</td>
                        </tr>
                        </tbody>
                    </table>
                        <button onclick="openModal()" class="w-full mt-4 bg-onyx-300 text-white py-2 px-4 rounded hover:bg-onyx-200 transition">
                            Apply
                        </button>


                        <!-- Modal -->
                        <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="relative bg-white rounded-lg shadow-lg w-11/12 max-w-md">
                                <!-- Modal Header -->
                                <div class="flex justify-between items-center border-b px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-800">Choose an Option</h3>
                                <button class="text-gray-400 hover:text-gray-600 focus:outline-none" onclick="closeModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                </div>

                                <!-- Modal Content -->
                                <div class="p-6 space-y-4">
                                    <a  href="{{ route('leaveEmployee.index') }}" >
                                        <button class="w-full text-left py-3 px-4 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 mb-2" onclick="redirectToLeave()">
                                            Leave
                                        </button>
                                    </a>
                                    <a href="{{ route('overtimeEmployee.index') }}" >
                                        <button class="w-full text-left py-3 px-4 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 mb-2" onclick="handleOption('Overtime')">
                                            Overtime
                                        </button>
                                    </a>
                                    <a href="{{ route('undertimeEmployee.index') }}" >
                                        <button href="{{ route('overtimeEmployee.index') }}" class="w-full text-left py-3 px-4 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 mb-2" onclick="handleOption('Overtime')">
                                            Undertime
                                        </button>
                                    </a>
                                </div>

                                <!-- Modal Footer -->
                                <div class="border-t px-6 py-4">
                                <button class="w-full py-2 px-4 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400" onclick="closeModal()">
                                    Close
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2-->
                <!-- <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                    <div class="flex items-center space-x-2">
                        <div class="text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" class="text-gray-600 w-6 h-6">
                                <path d="M18 17h-3v-6a6 6 0 0 0-12 0v6H6v2h12v-2zM12 3a4 4 0 0 1 4 4v5h-8V7a4 4 0 0 1 4-4z"></path>
                            </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Leave Credits</h3>
                        </div>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Your leave has been approved</p>
                        <p class="text-gray-600 text-sm">January 6, 2025</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">New announcement: Team meeting on Friday</p>
                        <p class="text-gray-600 text-sm">January 5, 2025</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Reminder: Submit your monthly report</p>
                        <p class="text-gray-600 text-sm">January 4, 2025</p>
                        </li>
                    </ul>
                    <button class="mt-4 bg-green-500  text-white py-2 px-4 rounded hover:bg-green-600 transition">
                        Learn More
                    </button>
                    </div>
                </div> -->

                <!-- Card 3-->
                <!-- <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800">Pending Requests</h3>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Leave Request</p>
                        <p class="text-gray-600 text-sm">Date: January 6, 2025</p>
                        <p class="text-yellow-500 text-sm font-medium">Status: Pending</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Overtime Request</p>
                        <p class="text-gray-600 text-sm">Date: January 5, 2025</p>
                        <p class="text-yellow-500 text-sm font-medium">Status: Pending</p>
                        </li>
                        <li class="py-2">
                        <p class="text-gray-800 font-medium">Undertime Request</p>
                        <p class="text-gray-600 text-sm">Date: January 4, 2025</p>
                        <p class="text-yellow-500 text-sm font-medium">Status: Pending</p>
                        </li>
                    </ul>
                    <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition">
                        Learn More
                    </button>
                    </div>
                </div>
                </div>
            </div> -->

            <!-- Confirmation Modal -->
            <div id="confirmationModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Are you sure?</h2>
                <p class="text-gray-600 mb-6">This action cannot be undone.</p>
                <div class="flex space-x-4">
                    <button 
                    id="confirmAction" 
                    class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition"
                    >
                    Yes, Proceed
                    </button>
                    <button 
                    id="cancelAction" 
                    class="bg-gray-300 text-gray-700 py-2 px-4 rounded hover:bg-gray-400 transition"
                    >
                    Cancel
                    </button>
                </div>
                </div>
            </div>
        </body>


        
        <div></div>

        
        
    </div>
</x-app-layout>

<script>
    // Dropdown functionality
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu2 = document.getElementById('dropdownMenu2');
    const clockInButton = document.getElementById('clockIn');
    const clockOutButton = document.getElementById('clockOut');
    const confirmationModal = document.getElementById('confirmationModal');
    const confirmAction = document.getElementById('confirmAction');
    const cancelAction = document.getElementById('cancelAction');

    let selectedAction = '';

    // Toggle dropdown visibility
    dropdownButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });

    // Handle Clock In/Out Selection
    clockInButton.addEventListener('click', () => {
      selectedAction = 'Clock In';
      dropdownMenu.classList.add('hidden');
      confirmationModal.classList.remove('hidden');
    });

    clockOutButton.addEventListener('click', () => {
      selectedAction = 'Clock Out';
      dropdownMenu.classList.add('hidden');
      confirmationModal.classList.remove('hidden');
    });

    // Confirmation Modal Actions
    confirmAction.addEventListener('click', () => {
      alert(`You have successfully ${selectedAction}.`);
      confirmationModal.classList.add('hidden');
    });

    cancelAction.addEventListener('click', () => {
      confirmationModal.classList.add('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
      if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
      }
    });


    // Dropdown functionality for Apply button FOR LEAVE BTN
    const applyButton = document.getElementById('applyButton');
    const applyDropdown = document.getElementById('applyDropdown');

    applyButton.addEventListener('click', () => {
      applyDropdown.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
      if (!applyButton.contains(e.target) && !applyDropdown.contains(e.target)) {
        applyDropdown.classList.add('hidden');
      }
    });


    // Open the modal
  function openModal() {
    document.getElementById('modal').classList.remove('hidden');
  }

  // Close the modal
  function closeModal() {
    document.getElementById('modal').classList.add('hidden');
  }

  // Handle option click
  
  </script>


