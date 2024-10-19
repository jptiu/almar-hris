<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Compute Cash on Hand</h1>
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
                <div class="grid grid-cols-1 gap-8">
                    <div class="...">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Ref No.</label>
                                            <input type="text" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Prev Transaction</label>
                                            <input type="date" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Cash Beginning</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>


                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Today's Transaction Date</label>
                                            <input type="date" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Collection</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Add Cash</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
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
                                            <label for="house" class="text-black font-medium">Financial Figures</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Total</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <x-section-border />

                        <div>
                            <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-4">Other Financial Figures</h1>
                        </div>

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Penalty</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Passbook</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Withdraw</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Xerox</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <x-section-border />

                        <div>
                            <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-4">Details of Add Cash from Savings Customers</h1>
                        </div>

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Charge Swipe</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Savings</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Death Aid</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Photocopy</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Withdraw</label>
                                            <input type="number" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <x-section-border />

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Today's Loan Release</label>
                                            <input type="date" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Today's Expenses</label>
                                            <input type="date" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <x-section-border />

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">New Cash On Hand</label>
                                            <input type="date" name="house" id="house" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" value="" placeholder="" />
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Cashier</label>
                                            <select name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                                <option value="business loan">Cashier 1</option>
                                                <option value="personal loan">Cashier 2</option>
                                            </select>
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>

                    </form>
                    </div>

                    <!-- <div class="col-span-3">
                        <section class="container mx-auto">
                            <div class="flex flex-col">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                            <div class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white bg-blue-700 dark:bg-gray-800">
                                                <h1 class="text-lg font-normal">Details of Add Cash from Savings Customers</h1>
                                            </div>
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-blue-800 dark:bg-gray-800">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Charge Swipe
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Savings
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Death Aid
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Photocopy
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Withdraw
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                                        <tr>
                                                            <td
                                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div> -->

                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
            <section class="container mx-auto">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <div class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white bg-blue-700 dark:bg-gray-800">
                                <h1 class="text-lg font-normal">Other Financial Figures</h1>
                            </div>
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-blue-800 dark:bg-gray-800">
                                    <tr>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                            Penalty
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                            Passbook
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                            Withdraw
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                            Xerox
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                    <tr>
                                        <td
                                            class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                
                                        </td>
                                        <td
                                             class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                        </td>
                                        <td
                                            class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                        </td>
                                        <td
                                            class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                        </td>
                                     </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mx-auto">
                            <div class="flex flex-col">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                            <div class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white bg-blue-700 dark:bg-gray-800">
                                                <h1 class="text-lg font-normal">Details of Add Cash from Savings Customers</h1>
                                            </div>
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-blue-800 dark:bg-gray-800">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Charge Swipe
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Savings
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Death Aid
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Photocopy
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Withdraw
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                                        <tr>
                                                            <td
                                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                
                                                            </td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

        
        
</div>

        

    </div>
</x-app-layout>
