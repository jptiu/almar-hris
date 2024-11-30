<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Compute Cash on Hand</h1>
        </div>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            <div class="flex items-center text-gray-600 mb-12">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <a href="{{ route('compute.index') }}" class="text-base font-semibold">Back</a>
            </div>

            <form action="{{ route('expenses.store') }}" method="POST">
                @csrf

                <!-- Section 1 -->
                <div class="mb-4">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="grid gap-4 text-sm grid-cols-1 md:grid-cols-3">
                            <div>
                                <label for="ref_no" class="text-black font-medium">Ref. No.</label>
                                <input type="text" name="ref_no" id="ref_no"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Enter Ref. No." />
                            </div>
                            <div>
                                <label for="prev_transaction" class="text-black font-medium">Prev Tran Date</label>
                                <input type="date" name="prev_transaction" id="prev_transaction"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="cash_beginning" class="text-black font-medium">Cash Beginning</label>
                                <input type="number" name="cash_beginning" id="cash_beginning"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="mb-4">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="grid gap-4 text-sm grid-cols-1 md:grid-cols-4">
                            <div>
                                <label for="transaction_date" class="text-black font-medium">Today's Tran Date</label>
                                <input type="date" name="transaction_date" id="transaction_date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                            </div>
                            <div>
                                <label for="collection" class="text-black font-medium">Collection</label>
                                <input type="number" name="collection" id="collection"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="0.00" />
                            </div>
                            <div>
                                <label for="add_cash" class="text-black font-medium">Add Cash</label>
                                <input type="number" name="add_cash" id="add_cash"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="0.00" />
                            </div>
                            <div>
                                <label for="add_cash_2" class="text-black font-medium">Add Cash (2nd)</label>
                                <input type="number" name="add_cash_2" id="add_cash_2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="mb-4">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="grid gap-4 text-sm grid-cols-1 md:grid-cols-3">
                            <div>
                                <label for="loan_releases" class="text-black font-medium">Today's Loan Releases</label>
                                <input type="number" name="loan_releases" id="loan_releases"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="0.00" />
                            </div>
                            <div>
                                <label for="expenses" class="text-black font-medium">Today's Expenses</label>
                                <input type="number" name="expenses" id="expenses"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="0.00" />
                            </div>
                            <div>
                                <label for="cash_on_hand" class="text-black font-medium">New Cash on Hand</label>
                                <input type="number" name="cash_on_hand" id="cash_on_hand"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="0.00" />
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <!-- Section 4 -->
                <h1 class="text-xl text-slate-600 font-bold mb-4">Other Financial Figures</h1>
                <div class="mb-4">
                    <div class="grid gap-4 text-sm grid-cols-1 md:grid-cols-6">
                        <div>
                            <label for="charge_swipe" class="text-black font-medium">Charge Swipe</label>
                            <input type="number" name="charge_swipe" id="charge_swipe"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0.00" />
                        </div>
                        <div>
                            <label for="savings" class="text-black font-medium">Savings</label>
                            <input type="number" name="savings" id="savings"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0.00" />
                        </div>
                        <div>
                            <label for="death_aid" class="text-black font-medium">Death Aid</label>
                            <input type="number" name="death_aid" id="death_aid"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0.00" />
                        </div>
                        <div>
                            <label for="photocopy" class="text-black font-medium">Photocopy</label>
                            <input type="number" name="photocopy" id="photocopy"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0.00" />
                        </div>
                        <div>
                            <label for="withdraw" class="text-black font-medium">Withdraw</label>
                            <input type="number" name="withdraw" id="withdraw"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0.00" />
                        </div>
                        <div>
                            <label for="xerox" class="text-black font-medium">Xerox</label>
                            <input type="number" name="xerox" id="xerox"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="0.00" />
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-4">Details of Add
                        Cash from Savings Customers</h1>
                </div>

                <div class="mb-4">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-1">
                                    <label for="house" class="text-black font-medium">Charge Swipe</label>
                                    <input type="number" name="house" id="house"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="house" class="text-black font-medium">Savings</label>
                                    <input type="number" name="house" id="house"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="house" class="text-black font-medium">Death Aid</label>
                                    <input type="number" name="house" id="house"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="house" class="text-black font-medium">Photocopy</label>
                                    <input type="number" name="house" id="house"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="house" class="text-black font-medium">Withdraw</label>
                                    <input type="number" name="house" id="house"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-8 mt-8 flex flex-row-reverse">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="md:col-span-1">
                                {{-- <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Input
                                    Check Number</button> --}}
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
