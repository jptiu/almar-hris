<html lang="en">

<head>
    <title>Print Loan</title>
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

        <table class="w-full text-center mb-4 mt-8 border">
            <thead class="border-b-2 border-gray-200 pb-4 bg-slate-200 text-black">
                <tr>
                    <th class="font-semibold p-2">Line</th>
                    <th class="font-semibold p-2">Date</th>
                    <th class="font-semibold p-2">Debit</th>
                    <th class="font-semibold p-2">Credit</th>
                    <th class="font-semibold p-2">Balance</th>
                    <th class="font-semibold p-2">Particular</th>
                </tr>
            </thead>
                <tr class="border-b-2 border-gray-200">
                    <td class="text-black p-2 border">1</td>
                    <td class="text-black p-2 border">4/11/24</td>
                    <td class="text-black p-2 border">55,000.00</td>
                    <td class="text-black p-2 border"></td>
                    <td class="text-black p-2 border">LND</td>
                    <td class="text-black p-2 border">13544 NEW</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
