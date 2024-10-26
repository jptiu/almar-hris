<html lang="en">

<head>
    <title>Inventory</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="px-2 py-1 max-w-5xl mx-auto">
        <div class="text-center mb-4 mt-4">
            <div class="text-gray-600">
                <div class="text-xl font-bold uppercase border-b-2 border-gray-300 pb-2">Payslip for the month of October 2024</div>
            </div>
        </div>

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
                    <div class="text-md font-bold">Invoice #00000</div>
                    <div class="text-sm font-normal">Salary Month: October, 2024</div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mb-6 mt-8 border-b-2 border-gray-300 pb-2">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-xl font-bold">John Doe</div>
                    <div class="text-md font-semibold">Collector</div>
                    <div class="text-md font-semibold">Employee ID: 000001</div>
                </div>
            </div>
            <div class="flex items-center">
            </div>
        </div>

        <table class="w-full text-left mb-4 mt-4">
            <thead class="border-b-2 border-gray-200 pb-4 bg-slate-200 text-black">
                <tr>
                    <th class="font-semibold p-2">Start Date of Work</th>
                    <th class="font-semibold p-2">End Date of Work</th>
                    <th class="font-semibold p-2">Days of Work</th>
                    <th class="font-semibold p-2">Regular Rate</th>
                </tr>
            </thead>
                <tr class="border-b-2 border-gray-200">
                    <td class="text-black p-2">10/01/2024</td>
                    <td class="text-black p-2">10/15/2024</td>
                    <td class="text-black p-2">13</td>
                    <td class="text-black p-2">700</td>
                </tr>
            </tbody>
        </table>

        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="flex justify-start mb-2 mt-4">
                        <div class="text-lg font-bold text-gray-700 mr-2">Deduction:</div>
                    </div>
                    <div class="text-md font-normal">W/ Holding Tax: <span class="text-md font-bold"></span></div>
                    <div class="text-md font-normal">Petty Cash: <span class="text-md font-bold"></span></div>
                    <div class="text-md font-normal">Pag-ibig Cont: <span class="text-md font-bold"></span></div>
                    <div class="text-md font-normal">Pag-ibig Loan: <span class="text-md font-bold"></span></div>
                    <div class="text-md font-normal">PhilHealth: <span class="text-md font-bold"></span></div>
                    <div class="text-md font-normal">Undertime hrs rendered: <span class="text-md font-bold"></span></div>
                    <div class="text-md font-normal">Late: <span class="text-md font-bold">2</span></div>
                    <div class="text-md font-normal">SSS Cont.: <span class="text-md font-bold">250.00</span></div>
                    <div class="text-md font-normal">SSS Loan: <span class="text-md font-bold">225.00</span></div>
                    <div class="text-md font-normal">Net Pay: <span class="text-md font-bold">4,661.00</span></div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="flex justify-start mb-2 mt-4">
                        <div class="text-lg font-bold text-gray-700 mr-2">Total Pay:</div>
                    </div>
                    <div class="text-md font-normal">Php <span class="text-md font-bold">9800.00</span></div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
