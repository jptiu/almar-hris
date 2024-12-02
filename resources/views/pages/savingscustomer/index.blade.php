<x-app-layout>
    
<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <div >
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Savings Withdrawal Entry</h1>
        
        <!-- Customer ID Section -->
        <div class="mb-4 grid grid-cols-4 gap-4 flex items-end">
            <div class="md:col-span-1">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Customer ID</label>
                <input type="text" name="first_name" id="first_name" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <div class="md:col-span-2">
                <label for="first_name" class="block text-sm font-medium text-gray-700">Customer Name</label>
                <input type="text" name="first_name" id="first_name" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm">
            </div>
            <div class="">
                
                <!-- <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Select Customer</button> -->
                <button class="bg-red-500 text-white px-6 py-2 rounded-lg">Reset</button>
                <!-- <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Exit</button> -->
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
            <tbody>
                <!-- Example row (dynamic rows would be added here) -->
                <tr>
                <td class="border border-gray-300 px-4 py-2">--</td>
                <td class="border border-gray-300 px-4 py-2">--</td>
                <td class="border border-gray-300 px-4 py-2">--</td>
                <td class="border border-gray-300 px-4 py-2">--</td>
                </tr>
            </tbody>
            </table>
        </div>

        

        <!-- Action Buttons -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Show Deposits</button>
            <button id="inputInterestBtn" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600">Input Interest</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Withdraw Full</button>
            <button class="bg-orange-100 hover:bg-orange-200 text-white px-4 py-2 rounded-md">Withdraw Partial</button>
        </div>

        <!-- Modal structure -->
        <div id="interestModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Input Interest</h2>
            <!-- Interest Rate Input -->
            <label for="interestRate" class="block text-sm font-medium text-gray-700 mb-2">Interest Rate (%)</label>
            <input id="interestRate" type="number" step="0.01" min="0" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4" placeholder="Enter interest rate">

            <!-- Modal action buttons -->
            <div class="flex justify-end space-x-4">
            <button id="closeModalBtn" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Close</button>
            <button id="submitInterestBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit</button>
            </div>
        </div>
        </div>

        <!-- Summary Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
            <label for="totalDeposits" class="block text-sm font-medium mb-1">Total Deposits</label>
            <input type="text" id="totalDeposits" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none" value="0.00" readonly>
            </div>
            <div>
            <label for="interestRate" class="block text-sm font-medium mb-1">Interest Rate</label>
            <input type="text" id="interestRate" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none" value="0.00" readonly>
            </div>
            <div>
            <label for="interestAmount" class="block text-sm font-medium mb-1">Interest Amount</label>
            <input type="text" id="interestAmount" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none" value="0.00" readonly>
            </div>
            <div>
            <label for="netAmount" class="block text-sm font-medium mb-1">Net Amount</label>
            <input type="text" id="netAmount" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none" value="0.00" readonly>
            </div>
        </div>
        </div>
    </div>
</div>
</x-app-layout>
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
        const interestRate = document.getElementById('interestRate').value;
        if (interestRate) {
        // You can add logic to process the interest rate here, like updating the account balance
        console.log('Interest rate submitted:', interestRate);
        modal.classList.add('hidden'); // Close the modal after submission
        } else {
        alert('Please enter a valid interest rate.');
        }
    });
</script>
