<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />  
        
        <div class="flex w-full p-6 bg-white shadow-md rounded-lg relative gap-8">
            <!-- Buttons Column -->
            <div class="w-1/4 flex flex-col space-y-2 mr-4">
                <button type="button" onclick="insertTemplate('Tardiness')" class="bg-green-500 text-white px-3 py-2 rounded-md">Tardiness</button>
                <button type="button" onclick="insertTemplate('Absent')" class="bg-red-500 text-white px-3 py-2 rounded-md">Absent</button>
                <button type="button" onclick="insertTemplate('Work Interruptions')" class="bg-orange-500 text-white px-3 py-2 rounded-md">Work Interruptions</button>
                <button type="button" onclick="insertTemplate('AWOL')" class="bg-yellow-500 text-white px-3 py-2 rounded-md">AWOL</button>
                <button type="button" onclick="insertTemplate('Insubordination')" class="bg-gray-500 text-white px-3 py-2 rounded-md">Insubordination</button>
            </div>

            <!-- Form Column -->
            <div class="w-3/4">
                <!-- Header -->
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold text-slate-800">Create Action Form</h2>
                </div>

                <!-- Form -->
                <form action="{{ route('action-forms.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Employee Email</label>
                        <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="" required>
                    </div>

                    <div class="mb-4"> 
                        <label class="block text-sm font-medium text-gray-700">Subject</label> 
                        <input type="text" name="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required> 
                    </div>

                    <!-- Message Area -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea name="content" id="editor" rows="10" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="file" class="block text-sm font-medium text-gray-700">Attach File</label>
                        <input type="file" name="file" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-1/4 p-6 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none flex items-center justify-center" style="float:right">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a1 1 0 001.22 0L21 8M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H5a2 2 0 00-2 2v5a2 2 0 002 2z" />
                            </svg>
                            Send Email
                        </button>
                    </div>
                </form>
            </div>
</div>

    </div>
</x-app-layout>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    CKEDITOR.replace('editor');

    function insertTemplate(type) {
        let template = '';
        switch(type) {
            case 'Tardiness':
                template = 
                    'I hope this email finds you well. I am writing to discuss a matter that requires your immediate attention. We have noticed a recurring issue with your arrival times, specifically instances of tardiness on [list dates or occasions, if necessary].';
                break;
            case 'Absent':
                template = 'This is a sample message template on Absent';
                break;
            case 'Work Interruptions':
                template = 'This is a sample message template on Work Interruptions';
                break;
            case 'AWOL':
                template = 'This is a sample message template on AWOL';
                break;
            case 'Insubordination':
                template = 'This is a sample message template on Insubordination';
                break;
            default:
                template = '';
        }
        CKEDITOR.instances.editor.setData(template);
    }
</script>
