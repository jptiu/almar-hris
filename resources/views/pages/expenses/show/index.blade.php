<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Expense Data Entry</h1>
        </div>

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div></div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <!-- <x-dropdown-filter align="right" /> -->

                <!-- Add view button -->
                <!-- <a href="{{ route('customer.add') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">New</span>
                </a> -->

            </div>

        </div>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="flex items-center text-gray-600 mb-12">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <a href="{{ route('expenses.index') }}" class="text-base font-semibold">Back</a>
        </div>
        
            <div class="grid grid-cols-1 gap-4">
                <div class="...">
                    <form action="{{ route('customer.store') }}" method="POST">
                        

                        <!-- Transaction Reference Summary -->
                        <div class="relative">
                            <h2 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-2">Transaction Reference Summary</h2>
                            <hr class="h-px my-4 mb-4 bg-gray-200 border-0 dark:bg-gray-700">
                        </div>
                        <div class="mb-6">
                            <div class="grid grid-cols-3 gap-8 mt-4 mb-12 text-sm text-gray-500">
                                <div>
                                    <p class="text-gray-900 text-sm">Exp Ref No.</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">Acct No.</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">Acct Class</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">Acct Type</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">Acct Title</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">Amount</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">Expiry Date</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">O.R No.</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                                <div>
                                    <p class="text-gray-900 text-sm">Justification</p>
                                    <p class="font-bold text-gray-900 text-base">Business</p>
                                </div>
                            </div>
                        </div>
                        <!-- Cards -->
                        <div class="relative">
                            <h2 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-6">Payment Details</h2>
                        </div>
                        <section class="container mx-auto mb-12">
                            <div class="flex flex-col">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-gray-50 dark:bg-gray-800">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-black font-medium">
                                                            Charge To
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
                                                                <div class="flex items-center gap-x-2">
                                                                    <div>
                                                                        <h2 class="text-sm font-medium text-gray-500 dark:text-white ">
                                                                            </h2>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                                
                                                            </td>
                                                        </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-8 mt-8">
                            <div>
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                    <div class="text-gray-600">
                                        <p class="font-medium text-lg"></p>
                                    </div>

                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">                    
                                            <div class="md:col-span-5 text-right">
                                                <div class="inline-flex items-end">
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Detail</button>
                                                </div>
                                                <div class="inline-flex items-end">
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
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
