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
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Grant Loan Entry</h1>
        </div>

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div></div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Add view button -->
                <a href="{{ route('loan.index') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">New</span>
                </a>

            </div>

        </div>

        <form action="{{ route('loan.store') }}" method="POST">
            @csrf
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                                <div class="md:col-span-1">
                                    <label for="transaction" class="text-black font-medium">Transaction No.</label>
                                    <input onchange="getTransactionNo()" type="number" name="transaction" id="transaction"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="Search" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="date_of_loan" class="text-black font-medium">Date of Loan</label>
                                    <input type="date" name="date_of_loan" id="date_of_loan"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="" placeholder="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                <div class="md:col-span-1">
                                    <label for="loan_type" class="text-black font-medium">Loan Type</label>
                                    <select name="loan_type" id="loan_type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="semi-monthly">Semi-Monthly</option>
                                    <option value="monthly">Monthly</option>
                                    </select>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="transaction_type" class="text-black font-medium">Transaction Type</label>
                                    <select name="transaction_type" id="transaction_type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    <option value="renew">Renew</option>
                                    <option value="recons">Recons</option>
                                    <option value="w-collat">With Collat</option>
                                    <option value="c/a">C/A</option>
                                    <option value="with-cert">With Cert</option>
                                    <option value="c/a-becomes-b/a">C/A Becomes B.A.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                <div class="md:col-span-1">
                                    <label for="customer_id" class="text-black font-medium">Customer ID</label>
                                    <input onchange="getCustomerID()" type="text" name="customer_id" id="customer_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="name" class="text-black font-medium">Customer Name</label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="{{ $customer->first_name ?? '' }}" placeholder="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="customer_type" class="text-black font-medium">Customer Type</label>
                                    <select name="customer_type" id="customer_type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    @foreach ($types as $type)
                                        <option value="{{ $type->description }}">{{ $type->description }}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="status" class="text-black font-medium">Status</label>
                                    <select name="status" id="status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3 mb-12">
                        <div>
                            <h1 class="text-xl md:text-xl text-slate-600 dark:text-slate-100 font-bold mb-2">Terms of
                                Payment</h1>
                        </div>

                        <div class="lg:col-span-2">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                <div class="md:col-span-1">
                                    <label for="principal_amount" class="text-black font-medium">Principal Amount</label>
                                    <input type="text" name="principal_amount" id="principal_amount"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="₱" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="days_to_pay" class="text-black font-medium">Days to pay</label>
                                    <select name="days_to_pay" id="days_to_pay"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    <option value="business loan">15</option>
                                    <option value="personal loan">30</option>
                                    </select>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="months_to_pay" class="text-black font-medium">Months to pay</label>
                                    <select name="months_to_pay" id="months_to_pay"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    <option value="business loan">3 months</option>
                                    <option value="personal loan">6 months</option>
                                    </select>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="interest" class="text-black font-medium">Interest %</label>
                                    <select name="interest" id="interest"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    <option value="business loan">5</option>
                                    <option value="personal loan">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">

                                <div class="md:col-span-1">
                                    <label for="interest_amount" class="text-black font-medium">Interest Amount</label>
                                    <input type="text" name="interest_amount" id="interest_amount"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="₱" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="svc_charge" class="text-black font-medium">Service Charge</label>
                                    <select name="svc_charge" id="svc_charge"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5" />
                                    <option value="business loan">15</option>
                                    <option value="personal loan">30</option>
                                    </select>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="actual_record" class="text-black font-medium">Actual Record</label>
                                    <input type="text" name="actual_record" id="actual_record"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="" />
                                </div>

                                <div class="md:col-span-1">
                                    <label for="payable_amount" class="text-black font-medium">Payable Amount</label>
                                    <input type="text" name="payable_amount" id="payable_amount"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        value="" placeholder="₱" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-section-border />

                <!-- Cards -->
                <section class="container mx-auto mb-12">
                    <div class="flex flex-col">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-blue-700 dark:bg-gray-800">
                                            <tr>
                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Day No
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Due Date
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Due Amt
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Date Paid
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Run Bal
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Bank
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Check No.
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white dark:text-white">
                                                    Remarks
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                            {{-- @foreach ($lists as $list)
                                                <tr>
                                                    <td
                                                        class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                        {{ $list->id }}
                                                    </td>
                                                    <td
                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        {{ $list->first_name }} {{ $list->last_name }}
                                                    </td>
                                                    <td
                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                        <div class="flex items-center gap-x-2">
                                                            <div>
                                                                <h2
                                                                    class="text-sm font-medium text-gray-500 dark:text-white ">
                                                                    {{ $list->house }} {{ $list->street }}
                                                                    {{ $list->barangay }} {{ $list->city }}</h2>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div>
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg"></p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Input
                                            Check Number</button>
                                            <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 ml-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // Transaction ID Search
    function getTransactionNo() {
    const transaction = document.getElementById("transaction").value;

    $.ajax({
        url: '{{ route('loan.index') }}',
        type: 'GET',
        data: {
            _token: '{{ csrf_token() }}',
            transaction_no: transaction,
        },
        success: function(response) {
            if (response.loan) {
                const customerData = response.customer;

                // Loop through each key in customerData to update the respective field
                Object.keys(customerData).forEach(key => {
                    const element = document.getElementById(key);

                    if (element) {
                        if (element.tagName === "SELECT") {
                            // If the element is a <select>, set its value to match an option
                            element.value = customerData[key];
                            element.dispatchEvent(new Event('change')); // Trigger change event if necessary
                        } else {
                            // For input fields, directly set the value
                            element.value = customerData[key];
                        }
                    }
                });
            } else {
                console.log('Transaction not found.');
                alert('Transaction not found.');
            }
        },
        error: function(xhr) {
            console.log('Error:', xhr.responseText);
            alert("Unable to retrieve customer information. Please try again.");
        }
    });
}

    // Customer ID Search
    function getCustomerID() {
        const customerID = document.getElementById("customer_id").value;

        $.ajax({
            url: '{{ route('loan.index') }}',
            type: 'GET',
            data: {
                _token: '{{ csrf_token() }}',
                id: customerID,
            },
            success: function(response) {
                // Assume 'response' contains the customer data. 
                // Update the relevant HTML elements with the new data.

                // Example of handling the response:
                if (response.customer) {
                    // Display customer data (e.g., name, address) in specific elements
                    document.getElementById("name").value = response.customer.first_name;
                    document.getElementById("customer_type").value = response.customer.type;
                    // Add more fields as needed
                } else {
                    console.log('Customer not found.');
                }
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
                // Handle the error (e.g., show an error message to the user)
                alert("Unable to retrieve customer information. Please try again.");
            }
        });
    }
</script>
