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
                    <div class="text-md font-semibold">{{ $branchAddress->location }}</div>
                    <div class="text-md font-semibold">Lapu-Lapu City, Cebu, 6015</div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-bold">{{ now()->format('F j, Y') }}</div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mb-2 mt-8 border-b-2 border-gray-300 pb-2">
            <div class="flex items-center">
                <div class="text-gray-600">
                    <div class="text-md font-normal uppercase">Customer ID: <span
                            class="text-md font-semibold">{{ $customer->id }}</span></div>
                    <div class="text-md font-normal uppercase">Customer Name: <span
                            class="text-md font-semibold">{{ $customer->first_name }} {{ $customer->last_name }}</span>
                    </div>
                    <div class="text-md font-normal uppercase">Customer Address: <span
                            class="text-md font-semibold">{{ $customer->street }} {{ $customer->bry->barangay_name }}
                            {{ $customer->cty->city_town }}</span></div>
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
            @foreach ($customer->loan->details as $detail)
                <tr class="border-b-2 border-gray-200">
                    <td class="text-black p-2 border">{{$detail->id}}</td>
                    <td class="text-black p-2 border">{{$detail->loan_due_date}}</td>
                    <td class="text-black p-2 border">{{number_format($detail->loan_due_amount, 2)}}</td>
                    <td class="text-black p-2 border"></td>
                    <td class="text-black p-2 border">{{$detail->loan_running_balance}}</td>
                    <td class="text-black p-2 border">{{$detail->id}} {{$customer->loan->transaction_type}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
