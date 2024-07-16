<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Collections Data Entry</h1>
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
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">Select Customer</label>
                                            <select name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                <option value="business loan">Customer 1</option>
                                                <option value="personal loan">Customer 2</option>
                                            </select>
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>


                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">ID</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="house">Name</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">Type</label>
                                            <select name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                <option value="business loan">Personal</option>
                                                <option value="personal loan">Business</option>
                                            </select>
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="house">Status</label>
                                            <select name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                <option value="business loan">Pendng</option>
                                                <option value="personal loan">Approve</option>
                                            </select>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">Transaction No.</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="house">Collector</label>
                                            <select name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                <option value="business loan">Collector 1</option>
                                                <option value="personal loan">Collector 2</option>
                                            </select>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-24">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">Date</label>
                                            <input type="date" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">Select which unpaid Loan to pay</label>
                                            <select name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                <option value="business loan">Loan 1</option>
                                                <option value="personal loan">Loan 2</option>
                                            </select>
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">LTD Row #</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="house">Due Date</label>
                                            <input type="date" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="house">Amount Due</label>
                                            <input type="number" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="house">Date Paid</label>
                                            <input type="date" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <input type="checkbox" name="house" id="house" class="border px-2 py-2 bg-gray-50" value="" placeholder="" /> <label for="house" class="mt-2 ml-1">Allow Grace period</label>
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>

                    <div class="...">
                        <section class="p-8">
                            <div>
                                <div class="border-2">
                                    <div class="text-center bg-blue-800 text-white py-3">
                                        <h1 class="text-lg font-bold">Payment Details</h1>
                                    </div>
                                        <form>
                                            <div class="p-4">
                                                <div class="mb-4">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                                                <div class="md:col-span-1">
                                                                    <h1 class="text-lg mt-2 font-medium">Previous Balance</h1>
                                                                </div>

                                                                <div class="md:col-span-1">
                                                                    <input type="number" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                                                <div class="md:col-span-1">
                                                                    <h1 class="text-lg mt-2 font-medium">Amount Withdrawn from ATM</h1>
                                                                </div>

                                                                <div class="md:col-span-1">
                                                                    <input type="number" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                                                <div class="md:col-span-1">
                                                                    <h1 class="text-lg mt-2 font-medium">Total Amount Due</h1>
                                                                </div>

                                                                <div class="md:col-span-1">
                                                                    <input type="number" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                                                <div class="md:col-span-1">
                                                                    <h1 class="text-lg mt-2 font-medium">Actual Amount Paid</h1>
                                                                </div>

                                                                <div class="md:col-span-1">
                                                                    <input type="number" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                                                <div class="md:col-span-1">
                                                                    <h1 class="text-lg mt-2 font-medium">Change</h1>
                                                                </div>

                                                                <div class="md:col-span-1">
                                                                    <input type="number" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                                                <div class="md:col-span-1">
                                                                    <h1 class="text-lg mt-2 font-medium">Current Balance</h1>
                                                                </div>

                                                                <div class="md:col-span-1">
                                                                    <input type="number" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>

    </div>
</x-app-layout>
