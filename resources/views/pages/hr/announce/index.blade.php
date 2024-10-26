<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        
        
        
            <div class="w-full max-w-lg p-6 bg-white shadow-md rounded-lg relative">
            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-slate-800">New Message</h2>
                <button class="text-gray-500 hover:text-gray-800 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </button>
            </div>

            <!-- To & CC/BCC Toggle -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">To</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Joan Bates" />
                <div class="flex items-center mt-2">
                <span class="text-sm text-gray-600">Show CC & BCC</span>
                <input type="checkbox" class="ml-2 rounded-full form-checkbox h-5 w-5 text-blue-600" />
                </div>
            </div>

            <!-- Subject -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Review" />
            </div>

            <!-- Message Area -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <div class="border border-gray-300 rounded-md">
                <div class="flex items-center p-2 bg-gray-100">
                    <!-- Toolbar Icons (bold, italic, etc.) -->
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><b>A</b></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><b>B</b></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><b>I</b></button>
                    <button class="text-gray-500 hover:text-gray-700 mx-1"><b>U</b></button>
                    <!-- Alignment icons -->
                    <button class="text-gray-500 hover:text-gray-700 mx-1">Align</button>
                </div>
                <textarea class="w-full px-3 py-2 border-t border-gray-300 rounded-md focus:outline-none resize-none" rows="4" placeholder="Write a text"></textarea>
                </div>
            </div>

            <!-- Attachments -->
            <div class="flex items-center gap-4 mb-4">
                <!-- Attached file -->
                <div class="flex items-center border border-gray-300 rounded-md p-2">
                <span class="text-red-500 font-semibold mr-2">PDF</span>
                <span>Resume.pdf</span>
                <span class="text-gray-500 text-sm ml-2">(570 KB)</span>
                <button class="ml-auto text-gray-500 hover:text-gray-700">
                    &times;
                </button>
                </div>

                <!-- Upload progress -->
                <div class="flex-1 flex items-center gap-2 border border-gray-300 rounded-md p-2">
                <div class="text-gray-500">Uploading File... 40%</div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 40%"></div>
                </div>
                </div>
            </div>

            <!-- Send Button -->
            <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a1 1 0 001.22 0L21 8M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H5a2 2 0 00-2 2v5a2 2 0 002 2z" />
                </svg>
                Send
            </button>
            </div>
        
    </div>
</x-app-layout>
