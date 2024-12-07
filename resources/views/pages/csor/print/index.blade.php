<html lang="en">

<head>
    <title>Print Statement</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="px-2 py-1 max-w-5xl mx-auto">
        <div class="text-center mb-4 mt-4">
            <div class="text-gray-600">
                <div class="text-xl font-bold border-b-2 border-gray-300 pb-2">Cashier's Shortage / Overage Report</div>
            </div>
        </div>

        <div class="flex justify-between items-center mb-12">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <img class="h-auto" src="/images/almarlogo.png" alt="almar suites">
                    <div class="text-md font-semibold">Almar Freemile Financing Corporation,</div>
                    <div class="text-md font-semibold">Therese Joy's Arcade, Pusok</div>
                    <div class="text-md font-semibold">Lapu-Lapu City, Cebu, 6015</div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-lg font-bold">October 22, 2024</div>
                </div>
            </div>
        </div>
        
        <div class="flex gap-8">
            <div class="w-1/2 overflow-hidden">
                <div class="text-center text-2xl font-medium p-4 border">Expenses</div>
                <table class="w-full text-center border">
                <thead class="bg-slate-200 text-black">
                    <tr>
                        <th class="p-4">Account Title</th>
                        <th class="p-4">Justification</th>
                        <th class="p-4">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="p-4">Miscellaneous</td>
                        <td class="p-4">Notary-1</td>
                        <td class="p-4">150.00</td>
                    </tr>
                    <tr class="">
                        <td class="p-4">Miscellaneous</td>
                        <td class="p-4">Notary-1</td>
                        <td class="p-4">150.00</td>
                    </tr>
                    <tr class="">
                        <td class="p-4">Miscellaneous</td>
                        <td class="p-4">Notary-1</td>
                        <td class="p-4">150.00</td>
                    </tr>
                </tbody>
                </table>
                <div class="text-right border bg-gray-100 p-2 text-md">Total: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-lg">Grand Total Expenses: <strong>150,000.00</strong></div>
            </div>

            <div class="w-1/2 overflow-hidden">
                <div class="text-center text-2xl font-medium p-4 border">Breakdown of Cash Bills</div>
                <table class="w-full text-center border">
                <thead class="bg-slate-200 text-black">
                    <tr>
                        <th class="p-4">Denomination</th>
                        <th class="p-4">Type</th>
                        <th class="p-4">Qty</th>
                        <th class="p-4">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="p-4">500.00</td>
                        <td class="p-4">pbill</td>
                        <td class="p-4">33</td>
                        <td class="p-4">3,000.00</td>
                    </tr>
                    <tr class="">
                        <td class="p-4">500.00</td>
                        <td class="p-4">pbill</td>
                        <td class="p-4">33</td>
                        <td class="p-4">3,000.00</td>
                    </tr>
                    <tr class="">
                        <td class="p-4">500.00</td>
                        <td class="p-4">pbill</td>
                        <td class="p-4">33</td>
                        <td class="p-4">3,000.00</td>
                    </tr>
                </tbody>
                </table>
                <div class="text-right border bg-gray-100 p-2 text-lg">Grand Total Cash: <strong>150,000.00</strong></div>
            </div>
        </div>

        <div class="flex gap-8 mt-12">
            <div class="w-1/2 overflow-hidden">
                <div class="text-center text-2xl font-medium p-4 border">For Savings Customers</div>
                <table class="w-full text-center border">
                <thead class="bg-slate-200 text-black">
                    <tr>
                        <th class="p-2">Charge Swipe</th>
                        <th class="p-2">Savings</th>
                        <th class="p-2">Death Aid</th>
                        <th class="p-2">Photocopy</th>
                        <th class="p-2">Withdraw</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="p-4">0.00</td>
                        <td class="p-4">0.00</td>
                        <td class="p-4">0.00</td>
                        <td class="p-4">0.00</td>
                        <td class="p-4">0.00</td>
                    </tr>
                </tbody>
                </table>
            </div>

            <div class="w-1/2 overflow-hidden">
                <div class="text-center text-2xl font-medium p-4 border">Compute Cash on Hand</div>
                <table class="w-full text-center border">
                <thead class="bg-slate-200 text-black">
                    <tr>
                        <th class="p-2">Ref No.</th>
                        <th class="p-2">Cash Beginning</th>
                        <th class="p-2">Collections</th>
                        <th class="p-2">Add Cash</th>
                        <th class="p-2">Add Cash (2nd)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class="p-4">32131</td>
                        <td class="p-4">314,000.00</td>
                        <td class="p-4">300,000.00</td>
                        <td class="p-4">0.00</td>
                        <td class="p-4">0.00</td>
                    </tr>
                </tbody>
                </table>
                <div class="text-right border bg-gray-100 p-2 text-md">Total: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-lg">
                    Releases: 500,00.00
                </div>
                <div class="text-right border bg-gray-100 p-2 text-lg">
                    Expenses: 20,00.00
                </div>
                <div class="text-right border bg-gray-100 p-2 text-lg">Grand Total Cash: <strong>150,000.00</strong></div>
            </div>
        </div>

        <div class="text-left text-2xl font-semibold py-2 uppercase mt-12">Regular Accounts</div>
        <div class="flex">
            <div class="w-1/2 overflow-hidden">
                <table class="w-full text-center border">
                    <thead class="border-b-2 border-gray-200 pb-4 bg-slate-200 text-black">
                        <tr>
                            <th class="font-semibold p-2 text-lg uppercase" colspan="4">Regular Loan</th>
                        </tr>
                        <tr>
                            <th class="font-semibold p-2"></th>
                            <th class="font-semibold p-2">No. of Cust</th>
                            <th class="font-semibold p-2">Receivable Amt</th>
                            <th class="font-semibold p-2">Actual Collections</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-2 border-gray-200">
                            <td class="text-black p-2 border">Joyce</td>
                            <td class="text-black p-2 border">323,424.00</td>
                            <td class="text-black p-2 border">3,722.00</td>
                            <td class="text-black p-2 border">63,324.00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right border bg-gray-100 p-2 text-md">Total No. of Customers: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Total Receivable Amt: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Actual Collections: 150,000.00</div>
            </div>

            <div class="w-1/2 overflow-hidden">
                <table class="w-full text-center border">
                    <thead class="border-b-2 border-gray-200 pb-4 bg-slate-200 text-black">
                        <tr>
                            <th class="font-semibold p-2 text-lg uppercase" colspan="3">C/A Monthly</th>
                        </tr>
                        <tr>
                            <th class="font-semibold p-2">No. of Cust</th>
                            <th class="font-semibold p-2">Receivable Amt</th>
                            <th class="font-semibold p-2">Actual Collections</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-2 border-gray-200">
                            <td class="text-black p-2 border">323,424.00</td>
                            <td class="text-black p-2 border">3,722.00</td>
                            <td class="text-black p-2 border">63,324.00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right border bg-gray-100 p-2 text-md">Total No. of Customers: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Total Receivable Amt: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Actual Collections: 150,000.00</div>
            </div>
        </div>

        <div class="text-left text-2xl font-semibold py-2 uppercase mt-12">Bad Accounts</div>
        <div class="flex">
            <div class="w-1/2 overflow-hidden">
                <table class="w-full text-center border">
                    <thead class="border-b-2 border-gray-200 pb-4 bg-slate-200 text-black">
                        <tr>
                            <th class="font-semibold p-2 text-lg uppercase" colspan="4">Active</th>
                        </tr>
                        <tr>
                            <th class="font-semibold p-2"></th>
                            <th class="font-semibold p-2">No. of Cust</th>
                            <th class="font-semibold p-2">Receivable Amt</th>
                            <th class="font-semibold p-2">Actual Collections</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-2 border-gray-200">
                            <td class="text-black p-2 border">Joyce</td>
                            <td class="text-black p-2 border">323,424.00</td>
                            <td class="text-black p-2 border">3,722.00</td>
                            <td class="text-black p-2 border">63,324.00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right border bg-gray-100 p-2 text-md">Total No. of Customers: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Total Receivable Amt: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Actual Collections: 150,000.00</div>
            </div>

            <div class="w-1/2 overflow-hidden">
                <table class="w-full text-center border">
                    <thead class="border-b-2 border-gray-200 pb-4 bg-slate-200 text-black">
                        <tr>
                            <th class="font-semibold p-2 text-lg uppercase" colspan="3">C/A Becomes BA</th>
                        </tr>
                        <tr>
                            <th class="font-semibold p-2">No. of Cust</th>
                            <th class="font-semibold p-2">Receivable Amt</th>
                            <th class="font-semibold p-2">Actual Collections</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-2 border-gray-200">
                            <td class="text-black p-2 border">323,424.00</td>
                            <td class="text-black p-2 border">3,722.00</td>
                            <td class="text-black p-2 border">63,324.00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right border bg-gray-100 p-2 text-md">Total No. of Customers: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Total Receivable Amt: 1500,00.00</div>
                <div class="text-right border bg-gray-100 p-2 text-md">Actual Collections: 150,000.00</div>
            </div>
        </div>

        <div class="py-8">
            <div class="text-gray-600 text-lg font-semibold uppercase">Additional Notes:</div>
            <p>
                Test Note
            </p>
        </div>

    </div>

</body>

</html>
