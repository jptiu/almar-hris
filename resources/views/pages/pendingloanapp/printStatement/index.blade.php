<html lang="en">

<head>
    <title>Print Statement</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="px-2 py-1 max-w-5xl mx-auto">

        <div class="flex justify-between items-center">
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
                    <div class="text-md font-bold">October 22, 2024</div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mb-2 mt-8 border-b-2 border-gray-300 pb-2 mb-8">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-normal uppercase">Customer ID: <span class="text-md font-semibold">21312</span></div>
                    <div class="text-md font-normal uppercase">Customer Name: <span class="text-md font-semibold">Jhon Doe</span></div>
                    <div class="text-md font-normal uppercase">Customer Address: <span class="text-md font-semibold">Cagayan de Oro City</span></div>
                </div>
            </div>
            <div class="flex items-center">
            </div>
        </div>

        <table class="w-full text-left mb-4 mt-4 border">
            <tbody>
                <tr>
                    <td class="border px-4 py-2 bg-gray-100">Amount</td>
                    <td class="border px-4 py-2">₱ 15,000.00</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2 bg-gray-100">Percentage</td>
                    <td class="border px-4 py-2">4%</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2 bg-gray-100">Terms</td>
                    <td class="border px-4 py-2">4 mos. 18 aints</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2 bg-gray-100">Interest</td>
                    <td class="border px-4 py-2">₱ 2,400.00</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2 bg-gray-100">TOTAL</td>
                    <td class="border px-4 py-2">₱ 17,400.00</td>
                </tr>
            </tbody>
        </table>

        <div class="text-2xl font-bold py-4 uppercase">Deductions:</div>
        <div class="flex justify-items-start items-center mt-2 mb-4 gap-12">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-lg font-medium py-1">Loan Balance:</div>
                    <div class="text-lg font-medium py-1">Cash Advance:</div>
                    <div class="text-lg font-medium py-1">Req. Hold:</div>
                    <div class="text-lg font-medium py-1">Pro. Fee:</div>
                    <div class="text-lg font-medium py-1">Not. Fee:</div>
                    <div class="text-lg font-medium py-1">Savings:</div>
                    <div class="text-lg font-medium py-1">Death Aid:</div>
                    <div class="text-lg font-medium py-1">Photocopy:</div>
                    <div class="text-lg font-medium py-1 uppercase">TOTAL DEDUCTIONS:</div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                    <div class="text-lg font-semibold py-1">₱ 12,720.00</div>
                </div>
            </div>
        </div>

        <div class="text-gray-600 text-xl font-medium text-left py-1 uppercase">
            Net Released: <strong>₱ 11,500,000.00</strong>
        </div>

        <div class="text-gray-600 text-xl font-medium text-left py-1 uppercase">
            Payment Deductions: <strong>₱ 11,500,000.00</strong>
        </div>

        <div class="flex items-center justify-center mt-12">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-semibold">Approved by:</div>
                    <img class="h-auto w-1/2" src="/images/sample signature.png" alt="almar suites">
                    <div class="text-lg font-bold">James Simene</div>
                    <div class="text-md font-normal">Manager</div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-semibold">Approved by:</div>
                    <img class="h-auto w-1/2" src="/images/sample signature.png" alt="almar suites">
                    <div class="text-lg font-bold">JP Tiu</div>
                    <div class="text-md font-normal">Manager</div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
