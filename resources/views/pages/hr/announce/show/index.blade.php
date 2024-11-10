<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />  
        
        <div class="w-full max-w-lg p-6 bg-white shadow-md rounded-lg relative">
            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-slate-800">Edit Announcement</h2>
            </div>

            <!-- Form -->
            <form action="{{ route('announce.update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

                <!-- Title -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Title of Announcement" value="{{$announcement->title}}">
                </div>

                <div class="mb-4"> 
                    <label class="block text-sm font-medium text-gray-700">Subject</label> 
                    <input type="text" name="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$announcement->subject}}"> 
                </div>

                <!-- Message Area -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="content" id="editor" rows="10" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none">{{$announcement->content}}</textarea>
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none">
                        <option value="0" {{$announcement->status == '0' ? 'selected' : ''}}>Inactive</option>
                        <option value="1" {{$announcement->status == '1' ? 'selected' : ''}}>Active</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="m-4">
                    <button type="submit" class="w-full max-w-lg p-6 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a1 1 0 001.22 0L21 8M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H5a2 2 0 00-2 2v5a2 2 0 002 2z" />
                        </svg>
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    CKEDITOR.replace('editor');
</script>
