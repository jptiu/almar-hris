<x-app-layout>

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form action="{{ route('withdrawalentry.storeWithdrawal') }}" method="POST">
                    @csrf
                    <div class="flex items-center text-gray-600 mb-12">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <a href="{{ route('savingscustomer.index') }}" class="text-base font-semibold">Back</a>
                    </div>
                    <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Savings
                        Withdrawal
                        Entry</h1>
                    <form action="{{ route('withdrawalentry.storeWithdrawal') }}" method="POST">
                        @csrf
                        <!-- Customer ID Section -->
                        <div class="mb-4 grid grid-cols-4 gap-4 flex items-end">
                            <div class="md:col-span-1">
                                <label for="customer" class="text-black font-medium">Select Customer</label>
                                <div class="relative">
                                    <input type="text" id="customerInput" placeholder="Type to search..."
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-2 p-2.5"
                                        oninput="filterCustomers()" />
                                    <ul id="customerDropdown"
                                        class="absolute bg-white border border-gray-300 rounded-lg w-full mt-1 hidden max-h-48 overflow-y-auto z-10">
                                        @foreach ($customers as $customer)
                                            <li class="px-4 py-2 cursor-pointer hover:bg-blue-500 hover:text-white"
                                                onclick="selectCustomer('{{ $customer->id }}', '{{ $customer->first_name }} {{ $customer->last_name }}')">
                                                {{ $customer->first_name . ' ' . $customer->last_name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <input type="hidden" name="customer" id="selectedCustomer">
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label for="customer_name" class="block text-sm font-medium text-gray-700">Customer
                                    Name</label>
                                <input type="text" name="customer_name" id="customer_name"
                                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm">
                            </div>
                            <div class="">
                                <a href="/savingscustomer/createWithdrawal"
                                    class="bg-red-500 text-white px-6 py-2 rounded-lg">Reset</a>
                            </div>
                        </div>

                        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

                        <!-- Transaction Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse border border-gray-300 mb-4 text-sm">
                                <thead>
                                    <tr class="bg-gray-50 dark:bg-gray-800 text-left">
                                        <th class="border border-gray-300 px-4 py-2">Tran ID</th>
                                        <th class="border border-gray-300 px-4 py-2">Tran Date</th>
                                        <th class="border border-gray-300 px-4 py-2">Amount</th>
                                        <th class="border border-gray-300 px-4 py-2">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="depRow">
                                    <!-- Example row (dynamic rows would be added here) -->
                                </tbody>
                            </table>
                        </div>



                        <!-- Action Buttons -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                            <a class="bg-blue-500 text-white text-center px-4 py-2 rounded-md hover:bg-blue-600">Show
                                Deposits</a>
                            <a id="inputInterestBtn"
                                class="bg-yellow-500 text-white text-center px-4 py-2 rounded-md hover:bg-yellow-600">Input
                                Interest</a>
                            <a class="bg-green-500 text-white text-center px-4 py-2 rounded-md hover:bg-green-600">Withdraw
                                Full</a>
                            <a class="bg-orange-100 hover:bg-orange-200 text-white text-center px-4 py-2 rounded-md">Withdraw
                                Partial</a>
                        </div>

                        <!-- Modal structure -->
                        <div id="interestModal"
                            class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
                            <div class="bg-white rounded-lg shadow-lg p-6 w-96">
                                <h2 class="text-xl font-semibold text-gray-800 mb-4">Input Interest</h2>
                                <!-- Interest Rate Input -->
                                <label for="interestRateInput"
                                    class="block text-sm font-medium text-gray-700 mb-2">Interest
                                    Rate
                                    (%)</label>
                                <input id="interestRateInput" type="number" step="0.01" min="0"
                                    class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
                                    placeholder="Enter interest rate">

                                <!-- Modal action buttons -->
                                <div class="flex justify-end space-x-4">
                                    <a id="closeModalBtn"
                                        class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Close</a>
                                    <a id="submitInterestBtn"
                                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</a>
                                </div>
                            </div>
                        </div>

                        <!-- Summary Section -->
                        <div class="mb-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <label for="totalDeposits" class="block text-sm font-medium mb-1">Total Deposits</label>
                                <input type="text" id="totalDeposits"
                                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none"
                                    value="0.00" readonly>
                            </div>
                            <div>
                                <label for="interestRate" class="block text-sm font-medium mb-1">Interest Rate</label>
                                <input type="text" id="interestRate"
                                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none"
                                    value="0.00" readonly>
                            </div>
                            <div>
                                <label for="interestAmount" class="block text-sm font-medium mb-1">Interest
                                    Amount</label>
                                <input type="text" id="interestAmount"
                                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none"
                                    value="0.00" readonly>
                            </div>
                            <div>
                                <label for="netAmount" class="block text-sm font-medium mb-1">Net Amount</label>
                                <input type="text" id="netAmount"
                                    class="w-full p-2 border border-gray-300 rounded-md focus:outline-none"
                                    value="0.00" readonly>
                            </div>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">

                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // Get modal elements
    const modal = document.getElementById('interestModal');
    const inputInterestBtn = document.getElementById('inputInterestBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const submitInterestBtn = document.getElementById('submitInterestBtn');

    // Open modal when "Input Interest" button is clicked
    inputInterestBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Close modal when "Close" button is clicked
    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Handle submit interest
    submitInterestBtn.addEventListener('click', () => {
        const interestRateInput = document.getElementById('interestRateInput').value;
        const interestRate = document.getElementById('interestRate');
        if (interestRateInput) {
            // You can add logic to process the interest rate here, like updating the account balance
            console.log('Interest rate submitted:', interestRateInput);
            interestRate.value = interestRateInput;
            computeAmounts();
            modal.classList.add('hidden'); // Close the modal after submission
        } else {
            alert('Please enter a valid interest rate.');
        }
    });

    function filterCustomers() {
        const input = document.getElementById('customerInput').value.toLowerCase();
        const dropdown = document.getElementById('customerDropdown');
        const items = dropdown.getElementsByTagName('li');

        dropdown.classList.remove('hidden'); // Show dropdown

        Array.from(items).forEach(item => {
            const name = item.textContent.toLowerCase();
            if (name.includes(input)) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    function getCustomer(id) {
        // const customerID = document.getElementById("customer").value;

        $.ajax({
            url: '{{ route('withdrawalentry.createWithdrawal') }}',
            type: 'GET',
            data: {
                _token: '{{ csrf_token() }}',
                customer: id,
            },
            success: function(response) {
                // Handle the special case for "name" input field
                const nameField = document.getElementById("customer_name");
                const totalDeposit = document.getElementById("totalDeposits");
                let bal = 0.00;
                // loans.innerHTML = '';
                if (response.customer) {
                    const customerData = response.customer;
                    const deposits = response.customer.deposits;
                    console.log(customerData);
                    if (nameField && customerData.first_name && customerData.last_name) {
                        nameField.value = `${customerData.first_name} ${customerData.last_name}`;
                    }
                    // Assuming loanData.details is an array
                    for (let i = 0; i < deposits.length; i++) {
                        const row =
                            `<tr>
                                <td class="border border-gray-300 px-4 py-2">${deposits[i].id}</td>
                                <td class="border border-gray-300 px-4 py-2">${deposits[i].tran_date}</td>
                                <td class="border border-gray-300 px-4 py-2">${new Intl.NumberFormat('en-US', {
                            minimumFractionDigits: 2,
                            maximumFractionDigits: 2
                        }).format(deposits[i].amount)}</td>
                                <td class="border border-gray-300 px-4 py-2">${deposits[i].status}</td>
                            </tr>`
                        depRow.innerHTML += row;
                        bal += parseFloat(deposits[i].amount);
                    }
                    totalDeposit.value = bal;
                } else {
                    alert('Customer Deposit not found.');
                }
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
                alert("Unable to retrieve customer information. Please try again.");
            }
        });
    }

    function selectCustomer(id, name) {
        document.getElementById('customerInput').value = name;
        document.getElementById('selectedCustomer').value = id;
        document.getElementById('customerDropdown').classList.add('hidden'); // Hide dropdown
        getCustomer(id);
    }
    // Hide dropdown when clicking outside
    document.addEventListener('click', (event) => {
        const dropdown = document.getElementById('customerDropdown');
        const input = document.getElementById('customerInput');
        if (!dropdown.contains(event.target) && !input.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });

    // Function to compute interest and net amounts
    function computeAmounts() {
        // Get the Total Deposits and Interest Rate input elements
        const totalDepositsElement = document.getElementById('totalDeposits');
        const interestRateElement = document.getElementById('interestRate');
        const interestAmountElement = document.getElementById('interestAmount');
        const netAmountElement = document.getElementById('netAmount');

        // Get their values as numbers
        const totalDeposits = parseFloat(totalDepositsElement.value) || 0;
        const interestRate = parseFloat(interestRateElement.value) || 0;

        // Calculate Interest Amount and Net Amount
        const interestAmount = totalDeposits * (interestRate / 100);
        const netAmount = totalDeposits + interestAmount;

        // Set the calculated values
        interestAmountElement.value = interestAmount.toFixed(2);
        netAmountElement.value = netAmount.toFixed(2);
    }

    // Example: Setting initial values for demonstration
    // document.addEventListener('DOMContentLoaded', () => {
    //     // Set some example values
    //     document.getElementById('totalDeposits').value = "1000.00";
    //     document.getElementById('interestRate').value = "5.00";

    //     // Compute amounts based on the example values
    //     computeAmounts();
    // });
</script>
