<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Cash Advance Request Form</h1>
        </div>

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div></div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Add view button -->
                <a href="{{ route('customer.add') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">New</span>
                </a>

            </div>

        </div>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="...">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">

                                        <div class="md:col-span-1">
                                            <label class="text-black font-medium" for="house">Name</label>
                                            <input type="text" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label class="text-black font-medium" for="house">Posistion</label>
                                            <input type="text" name="posistion" id="posistion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label class="text-black font-medium" for="house">Date Filled</label>
                                            <input type="date" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">

                                        <div class="md:col-span-1">
                                            <label class="text-black font-medium" for="house">Date Filled</label>
                                            <input type="date" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label class="text-black font-medium" for="house">Amount</label>
                                            <input type="number" name="amount" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label class="text-black font-medium" for="house">Reason for cash advance</label>
                                            <input type="text" name="reason" id="reason" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>

                                      
                                    </div>  
                                </div>
                            </div>
                        </div>

                       
                    </form>
                    </div>
                </div>
            </div>

    </div>
</x-app-layout>
