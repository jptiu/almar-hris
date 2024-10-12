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
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12 lg:px-4">Personal Details
            </h1>
        </div>

        <div></div>

        <!-- Dashboard actions -->

        <!-- Cards -->

        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-3 gap-12">
                    <div class="...">

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="md:col-span-2">
                                    <label for="first_name">First Name</label>
                                    <div>
                                        <input name="first_name" id="first_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                            <div class="md:col-span-2">
                                    <label for="first_name">Mobile Number</label>
                                    <div>
                                        <input name="mobile_number" id="mobile_number" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                            <div class="md:col-span-2">
                                    <label for="first_name">Address</label>
                                    <div>
                                        <input name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mb-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                        <div class="lg:col-span-2">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                                <div class="md:col-span-1">
                                                    <label for="book_id">Customer</label>
                                                    <select name="book_id" id="book_id" class="h-10 border border-gray-300 mt-1 rounded-lg px-4 w-full bg-gray-50 placeholder-gray-500 text-base focus:ring-primary-100 focus:border-primary-100" />
                                                        
                                                        <option value=""></option>
                                                    
                                                    </select>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div> --}}
                    </div>

                    <div class="...">
                    <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                            <div class="md:col-span-2">
                                    <label for="first_name">Loan Ammount</label>
                                    <div>
                                        <input name="loan-ammount" id="loan-ammount" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                        <div class="md:col-span-1">
                                            <label for="date">Date</label>
                                            <input type="date" name="date" id="date"
                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                placeholder="" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="mb-8">
                        <h4 class="py-2 font-medium text-lg">Add Image</h4>
                        <div class="flex items-center justify-center w-full">
                            <label for="image"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 hover:bg-gray-100 dark:hover:border-gray-500">
                                <div id="imagePlaceholder"
                                    class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span>Drag & Drop Images
                                            Here</span> or</p>
                                    <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">Select</p>
                                </div>
                                <img id="imagePreview" class="hidden w-full h-full object-cover rounded-lg" />
                                <input id="image" name="image" type="file" accept="image/*" class="hidden"
                                    onchange="previewImage(event)" />
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                <div class="md:col-span-1">
                                    <div class="inline-flex items-start">
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
        
            


    </div>
</x-app-layout>
<script>
    const showModalButton = document.getElementById('show-modal');
    const hideModalButton = document.getElementById('hide-modal');
    const modal = document.getElementById('modal');

    showModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    hideModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>
