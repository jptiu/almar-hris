<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Collections Data Entry
            </h1>
        </div>

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div></div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Add view button -->
                <a href="{{ route('collection.create') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">New</span>
                </a>

            </div>

        </div>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
            <div class="flex items-center text-gray-600 mb-12">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            <a href="{{ route('customer.index') }}" class="text-base font-semibold">Back</a>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="...">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <label for="customer" class="text-black font-medium">Select Customer</label>
                                            <select onchange="getCustomer()" name="customer" id="customer"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                            <option value="">Select</option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}">
                                                    {{ $customer->first_name . ' ' . $customer->last_name }}</option>
                                            @endforeach
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
                                            <label for="id" class="text-black font-medium">ID</label>
                                            <input type="text" name="id" id="id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="name" class="text-black font-medium">Name</label>
                                            <input type="text" name="name" id="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
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
                                            <label for="type" class="text-black font-medium">Type</label>
                                            <select name="type" id="type"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5 />
                                                <option value="business
                                                loan">Personal</option>
                                                <option value="personal loan">Business</option>
                                            </select>
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="status" class="text-black font-medium">Status</label>
                                            <select name="status" id="status"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5 />
                                                <option value="business
                                                loan">Pendng</option>
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
                                            <label for="trans_no" class="text-black font-medium">Transaction No.</label>
                                            <input type="text" name="trans_no" id="trans_no"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="collector" class="text-black font-medium">Collector</label>
                                            <select name="collector" id="collector"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                            @foreach ($collectors as $collector)
                                                <option value="{{ $collector->id }}">{{ $collector->name }}</option>
                                            @endforeach
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
                                            <label for="date_of_loan" class="text-black font-medium">Date</label>
                                            <input type="date" name="date_of_loan" id="date_of_loan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
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
                                            <label for="house" class="text-black font-medium">Select which unpaid
                                                Loan to pay</label>
                                            <select name="type" id="type"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                            <option
                                                value="business
                                                loan">
                                                Loan 1</option>
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
                                            <label for="house" class="text-black font-medium">LTD Row #</label>
                                            <input type="text" name="house" id="house"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Due Date</label>
                                            <input type="date" name="house" id="house"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
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
                                            <label for="house" class="text-black font-medium">Amount Due</label>
                                            <input type="number" name="house" id="house"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
                                        </div>

                                        <div class="md:col-span-1">
                                            <label for="house" class="text-black font-medium">Date Paid</label>
                                            <input type="date" name="house" id="house"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                                value="" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <div class="mb-8">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="flex justify-between grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

                                        <div class="md:col-span-1">
                                            <input type="checkbox" name="house" id="house"
                                                class="border px-2 py-2 bg-gray-50" value="" placeholder="" />
                                            <label for="house" class="mt-2 ml-1">Allow Grace period</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8 flex flex-row-reverse">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="flex justify-between grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">

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
                        </div>

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
                                                            <input type="number" name="house" id="house"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                value="" placeholder="" />
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
                                                            <h1 class="text-lg mt-2 font-medium">Amount Withdrawn from
                                                                ATM</h1>
                                                        </div>

                                                        <div class="md:col-span-1">
                                                            <input type="number" name="house" id="house"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                value="" placeholder="" />
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
                                                            <input type="number" name="house" id="house"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                value="" placeholder="" />
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
                                                            <h1 class="text-lg mt-2 font-medium">Actual Amount Paid
                                                            </h1>
                                                        </div>

                                                        <div class="md:col-span-1">
                                                            <input type="number" name="house" id="house"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                value="" placeholder="" />
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
                                                            <input type="number" name="house" id="house"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                value="" placeholder="" />
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
                                                            <input type="number" name="house" id="house"
                                                                class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                value="" placeholder="" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function getCustomer() {
        const customerID = document.getElementById("customer").value;

        $.ajax({
            url: '{{ route('collection.index') }}',
            type: 'GET',
            data: {
                _token: '{{ csrf_token() }}',
                customer_id: customerID,
            },
            success: function(response) {
                if (response.customer) {
                    const customerData = response.customer;
                    const loanData = response.customer.loan;

                    // Handle the special case for "name" input field
                    const nameField = document.getElementById("name");
                    const transactionField = document.getElementById("trans_no");

                    if (nameField && customerData.first_name && customerData.last_name &&
                        transactionField && loanData.id) {
                        nameField.value = `${customerData.first_name} ${customerData.last_name}`;
                        transactionField.value = loanData.id; // No need for template literal here unless formatting is required
                    }


                    // Handle the special case for "trans_no" input field
                    // if (transactionField && loanData.id) {
                    //     // console.log(loanData.id);
                    //     transactionField.value = loanData.id;
                    // }

                    // Loop through each key in customerData to update respective fields
                    Object.keys(customerData).forEach(key => {
                        if (key !== "first_name" && key !==
                            "last_name") { // Skip first and last name as we already handled it
                            const element = document.getElementById(key);
                            if (element) {
                                if (element.tagName === "SELECT") {
                                    element.value = customerData[key];
                                    element.dispatchEvent(new Event('change'));
                                } else {
                                    element.value = customerData[key];
                                }
                            }
                        }
                    });

                    // Loop through each key in loanData to update respective fields
                    Object.keys(loanData).forEach(key => {
                        if (key !== "id") {
                            const element = document.getElementById(key);
                            if (element) {
                                if (element.tagName === "SELECT") {
                                    element.value = loanData[key];
                                    element.dispatchEvent(new Event('change'));
                                } else {
                                    element.value = loanData[key];
                                }
                            }
                        }
                    });
                } else {
                    console.log('Collection not found.');
                    alert('Collection not found.');
                }
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
                alert("Unable to retrieve customer information. Please try again.");
            }
        });
    }
</script>
