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

        <div class="flex items-center justify-between mb-2 mt-8 border-b-2 border-gray-300 pb-2">
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

        <div class="flex justify-between items-center mt-2 mb-8">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-normal py-4">Position: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Type of Loan: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Amount Release: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Interest Rate: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Penalty Rate: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Interest Amount: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Total Payable Amount: <span class="text-md font-semibold">test</span></div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-normal uppercase">Date Release: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Due Date: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Terms: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">Mode of Payment: <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal py-4">Starting Payments: <span class="text-md font-semibold">test</span></div>
                </div>
            </div>
        </div>

        <table class="w-full text-center mb-4 mt-4 border">
            <div class="text-md font-semibold uppercase">Computation</div>
            <div class="text-center text-lg font-semibold">Outstanding accounts</div>
            <thead class="border-b-2 border-gray-200 pb-4 bg-slate-200 text-black">
                <tr>
                    <th class="font-semibold p-2">Regular Balance</th>
                    <th class="font-semibold p-2">Cash Advance</th>
                </tr>
            </thead>
                <tr class="border-b-2 border-gray-200">
                    <td class="text-black p-2 border">
                        Interest 6% <span class="font-semibold">per month (13 mos. Past Due)</span><br>
                        Total Interest Over Due: <span class="font-semibold"></span>
                    </td>
                    <td class="text-black p-2 border">
                        Interest 5%: <span class="font-semibold">1 mo. Only</span><br>
                        Total Interest Over Due: <span class="font-semibold">17mos</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="text-right">
            OVERALL TOTAL BALANCE: <strong>1500,00.00</strong>
        </div>

        <div class="mb-2">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-semibold uppercase py-4">Co-maker:</div>
                    <div class="text-md font-normal uppercase">1. <span class="text-md font-semibold">test</span></div>
                    <div class="text-md font-normal uppercase">2. <span class="text-md font-semibold">test</span></div>
                </div>
            </div>
        </div>

        <div class="py-8">
            <div class="text-gray-600 text-md font-semibold uppercase">Note:</div>
            <p>
                w/ Print  Out Support
            </p>
        </div>

        <div class="flex items-center justify-center">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-semibold">Prepared by:</div>
                    <img class="h-auto w-1/2" src="/images/sample signature.png" alt="almar suites">
                    <div class="text-lg font-bold">James Simene</div>
                    <div class="text-md font-normal">Clerk</div>
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
