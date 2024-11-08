<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        
        
        
            <div class="w-full max-w-lg p-6 bg-white shadow-md rounded-lg relative">
            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-slate-800">Create Post</h2>
            </div>

            <!-- To & CC/BCC Toggle -->
            <div class="mb-4 grid grid-cols-4 gap-4">
                <div class="col-span-3">
                <input  type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Announcement Title" />
                </div>
            </div>

            <!-- Message Area -->
            <div class="mb-4">
                </div>
                <textarea class="w-full px-3 py-2 border-t border-gray-300 mb-4 rounded-md focus:outline-none resize-none" rows="4" placeholder="Write announcement"></textarea>
                <a href="/" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="xs:block ml-2">Post</span>
                </a>
            </div>
            </div>    
            </div>
            
        </div>
        
    </div>
</x-app-layout>
<!-- Send Button -->
        