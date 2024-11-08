<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Management UI</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <a href="#" class="text-sm text-gray-500 mb-4 inline-block">← Back</a>
        
        <!-- User Info -->
        <div class="flex items-center mb-6">
            <div class="bg-blue-500 text-white rounded-full h-12 w-12 flex items-center justify-center font-bold text-lg">JS</div>
            <div class="ml-4">
                <h2 class="text-xl font-semibold">James Simene</h2>
            </div>
        </div>
        
        <!-- Borrower Information -->
        <div class="mb-6">
            <h3 class="font-semibold mb-4">Borrower Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="text-sm text-gray-500">Full name</label>
                    <input type="text" value="James Simene" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="text-sm text-gray-500">Contact details</label>
                    <input type="text" value="+63-2-8123-4567" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="text-sm text-gray-500">Assigned Officer</label>
                    <input type="text" value="Tiu" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
            </div>
        </div>

        <!-- Account Summary -->
        <div class="mb-6">
            <h3 class="font-semibold mb-4">Account Summary</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="text-sm text-gray-500">Current Balance</label>
                    <input type="text" value="₱5,000" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="text-sm text-gray-500">Total Due</label>
                    <input type="text" value="₱15,000" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="text-sm text-gray-500">Days Overdue</label>
                    <input type="text" value="11/5/2024" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>
            </div>
        </div>

        <!-- Status Dropdown -->
        <div class="mb-6">
            <label class="text-sm text-gray-500">Status</label>
            <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-pink-600">
                <option class="text-pink-600">Early Stage</option>
                <option class="text-yellow-600">Moderate Stage</option>
                <option class="text-red-600">Severe Stage</option>
                <option class="text-gray-600">High-Risk</option>
            </select>
        </div>

        <!-- Payment History Table -->
        <div>
            <h3 class="font-semibold mb-4">Payment History</h3>
            <table class="w-full border rounded-md shadow-sm">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="py-2 px-4 text-left">Date</th>
                        <th class="py-2 px-4 text-left">Amount Paid</th>
                        <th class="py-2 px-4 text-left">Remaining Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4">11/5/2024</td>
                        <td class="py-2 px-4">₱1,000</td>
                        <td class="py-2 px-4">₱14,000</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4">11/30/2024</td>
                        <td class="py-2 px-4">₱1,000</td>
                        <td class="py-2 px-4">₱13,000</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">12/15/2024</td>
                        <td class="py-2 px-4">₱1,000</td>
                        <td class="py-2 px-4">₱12,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

    
</x-app-layout>
