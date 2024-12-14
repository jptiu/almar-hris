<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Withdrawal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
        }

        /* Page Layout for Print */
        @media print {
            @page {
                size: 8.5in 5.5in;
                margin: 0;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
            }
            .print-container {
                width: 8.5in;
                height: 5.5in;
                padding: 0.4in;
                box-sizing: border-box;
                overflow: hidden;
            }
        }

        /* Desktop Styling (Preview) */
        .print-container {
            max-width: 8.5in;
            height: 5.5in;
            padding: 0.5in;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0.5em;
        }

        th, td {
            padding: 0.4em;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
        }

        .footer {
            text-align: center;
            margin-top: auto;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="print-container">
    <div>

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
                    <div class="text-md font-bold">Ref. No: 4242</div>
                </div>
            </div>
        </div>

        <div class="text-center text-lg font-bold uppercase mb-2 mt-6">
            Withdrawal Slip
        </div>
        <div class="mb-4">
            <div><strong>Account Holder Name:</strong> Jhon Doe</div>
        </div>
        <table>
            <thead>
            <tr>
                <th>Account Number</th>
                <th>Amount Withdrawn</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>3242</td>
                <td>10,000</td>
                <td>October 22, 2024</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="flex justify-between items-center">
            <div class="items-center">
                <hr class="w-full mt-2" />
                <div class="text-center mt-2">Account Holders's Signature</div>
            </div>
            <div class="items-center">
                <hr class="w-full mt-2" />
                <div class="text-center mt-2">Withdrawal Processed By:</div>
            </div>
        </div>
</div>

</body>
</html>