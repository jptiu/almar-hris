<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        @if (session()->has('success'))
            <div class="alert alert-success">
                <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session()->get('success') }}</span>
                    </div>
                </div>
            </div>
        @endif
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12 lg:px-4">CSOR</h1>
        </div>

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8 ml-4">

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <form id="filterForm" method="GET" action="{{ route('csor.index') }}">
                    <div class="relative">
                        <input name="date_range" id="date_range"
                            class="datepicker form-input pl-9 dark:bg-slate-800 text-slate-500 hover:text-slate-600 dark:text-slate-300 dark:hover:text-slate-200 font-medium w-[15.5rem]"
                            placeholder="Select dates" data-class="flatpickr-right" />
                        <div class="absolute inset-0 right-auto flex items-center pointer-events-none">
                            <svg class="w-4 h-4 fill-current text-slate-500 dark:text-slate-400 ml-3"
                                viewBox="0 0 16 16">
                                <path
                                    d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z" />
                            </svg>
                        </div>
                        <button type="submit"
                            class="bg-primary-100 hover:bg-primary-200 text-white py-2 px-4 rounded">Filter</button>
                    </div>
                </form>
            </div>

        </div>

        <div></div>

        <section class="container px-4 mx-auto mt-8">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                                <div id="loading"
                                    class="hidden fixed inset-0 bg-gray-500 bg-opacity-90 flex items-center justify-center z-50">
                                    <div
                                        class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-32 w-32 mb-4">
                                    </div>
                                </div>
                                <div id="loading-message" class="hidden fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-90 z-50 text-white text-lg">
                                    Please wait a moment...
                                </div>
                                <div id="step1" class="">
                                    <div class="flex place-content-center justify-center items-center mb-16 mt-2">
                                        <ol class="space-y-4 sm:flex sm:space-x-6 sm:space-y-0 rtl:space-x-reverse">
                                            <li
                                                class="flex items-center text-blue-600 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-gray-400">
                                                    1
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Guest Lists</h3>
                                                </span>
                                            </li>
                                            <li
                                                class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                                    2
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Expenses</h3>
                                                </span>
                                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 12 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                                </svg>
                                            </li>
                                            <li
                                                class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                                    3
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Generate</h3>
                                                </span>
                                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 12 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                                </svg>
                                            </li>
                                        </ol>
                                    </div>

                                    <div class="grid grid-cols-1 gap-12">

                                    <div class="mb-1">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                <div class="lg:col-span-2">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div
                                                                class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                                                <div class="md:col-span-1">
                                                                    <label for="ref_no">Reference No.</label>
                                                                    <input type="text" name="ref_no"
                                                                        id="ref_no"
                                                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                        value="" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="...">
                                            <div class="mb-1">
                                                <div
                                                    class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Customer Name
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Room Type
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Room Name/No.
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Mode of Payment
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Total Amount
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Balance
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Remarks
                                                                </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody
                                                            class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                                                <tr>
                                                                    <td
                                                                        class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="step2" class="hidden">
                                    <div class="flex place-content-center justify-center items-center mb-16 mt-2">
                                        <ol class="space-y-4 sm:flex sm:space-x-6 sm:space-y-0 rtl:space-x-reverse">
                                            <li
                                                class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                                    1
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Guest Lists</h3>
                                                </span>
                                            </li>
                                            <li
                                                class="flex items-center text-blue-600 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-gray-400">
                                                    2
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Expenses</h3>
                                                </span>
                                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 12 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                                </svg>
                                            </li>
                                            <li
                                                class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                                    3
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Generate</h3>
                                                </span>
                                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 12 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                                </svg>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="grid grid-cols-1 gap-12">
                                        <div class="...">
                                            <div class="mb-8">
                                                <a id="show-modal" href="#"
                                                    class="btn bg-transparent hover:text-orange-800 text-slate-700 mb-6">
                                                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                                    </svg>
                                                    <span class="xs:block ml-2">Add Expense</span>
                                                </a>
                                                <div id="modal" class="relative z-50 hidden"
                                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                        aria-hidden="true"></div>

                                                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                                        <div
                                                            class="flex min-h-full items-end justify-center pt-4 text-center sm:items-center sm:p-0">
                                                            <div
                                                                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                                                <h1
                                                                    class="text-xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold py-4 lg:px-4">
                                                                    Add Expense</h1>
                                                                <div class="bg-white px-4 pb-4 sm:p-6 sm:pb-4">
                                                                    <div
                                                                        class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                                        <div class="lg:col-span-3">
                                                                            <div
                                                                                class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                                                                                <div class="md:col-span-2">
                                                                                    <label for="expense_name">Expense
                                                                                        Name</label>
                                                                                    <input type="text"
                                                                                        name="expense_name"
                                                                                        id="expense_name"
                                                                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                                        value=""
                                                                                        placeholder="" />
                                                                                </div>
                                                                                <div class="md:col-span-1">
                                                                                    <label
                                                                                        for="expense_qty">Quantity</label>
                                                                                    <input type="number"
                                                                                        name="expense_qty"
                                                                                        id="expense_qty"
                                                                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                                        value="1"
                                                                                        placeholder="" />
                                                                                </div>
                                                                                <div class="md:col-span-1">
                                                                                    <label
                                                                                        for="expense_price">Price</label>
                                                                                    <input type="text"
                                                                                        name="expense_price"
                                                                                        id="expense_price"
                                                                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                                        value=""
                                                                                        placeholder="" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-50 px-4 py-4 sm:flex sm:flex-row-reverse sm:px-6">
                                                                    <a href="#" id="expenseButton"
                                                                        class="inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 sm:ml-3 sm:w-auto" onclick="showLoadingMessage()">Submit</a>
                                                                    <button id="hide-modal" type="button"
                                                                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Expenses
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Quantity
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                                    Price
                                                                </th>

                                                                <th scope="col"
                                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">

                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody
                                                            class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                                                <tr>
                                                                    <td
                                                                        class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td
                                                                        class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                        test
                                                                    </td>
                                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                                        <div class="flex items-center gap-x-6">
                                                                            <form action="#" method="post">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="text-gray-500 mt-1 transition-colors duration-200 dark:hover:text-indigo-500 dark:text-gray-300 hover:text-indigo-500 focus:outline-none">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="16" height="16"
                                                                                        fill="currentColor"
                                                                                        class="bi bi-trash"
                                                                                        viewBox="0 0 16 16">
                                                                                        <path
                                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                                        <path
                                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                                    </svg>
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="step3" class="hidden">
                                    <div class="flex place-content-center justify-center items-center mb-16 mt-2">
                                        <ol class="space-y-4 sm:flex sm:space-x-6 sm:space-y-0 rtl:space-x-reverse">
                                            <li
                                                class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                                    1
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Guest Lists</h3>
                                                </span>
                                            </li>
                                            <li
                                                class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                                    2
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Expenses</h3>
                                                </span>
                                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 12 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                                </svg>
                                            </li>
                                            <li
                                                class="flex items-center text-blue-600 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                                                <span
                                                    class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-gray-400">
                                                    3
                                                </span>
                                                <span>
                                                    <h3 class="font-medium leading-tight">Generate</h3>
                                                </span>
                                                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 12 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                                </svg>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="grid grid-cols-1 gap-12">

                                        <div class="mb-1">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                <div class="lg:col-span-2">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div
                                                                class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                                                <div class="md:col-span-1">
                                                                    <label for="cash_on_hand">Cash on Hand</label>
                                                                    <input type="text" name="cash_on_hand"
                                                                        id="cash_on_hand"
                                                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                                        value="" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-6">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                                <div class="lg:col-span-2">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                                        <div class="lg:col-span-2">
                                                            <div
                                                                class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                                                <div class="md:col-span-1">
                                                                    <label for="description"
                                                                        class="text-lg font-medium py-2">Additional
                                                                        Notes</label>
                                                                    <textarea name="description" id="description" rows="4"
                                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                        placeholder="Type here..."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                        <div class="lg:col-span-2">
                                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">
                                                <div class="md:col-span-1">
                                                    <button type="button" id="prevBtn"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-2">
                                                        Previous
                                                    </button>
                                                    <div class="inline-flex" style="float:right;">
                                                        <button type="button" id="nextBtn"
                                                            class="bg-primary-100 hover:bg-primary-200 text-white font-bold py-2 px-4 rounded mx-2">
                                                            Confirm
                                                        </button>

                                                        <a href="#" id="submitBtn2"
                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                                                            Generate Monthly Report
                                                        </a>

                                                        <a href="#" id="submitBtn"
                                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mx-2">
                                                            Generate Daily Report
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function updateCSOR() {
        var urlParams = new URLSearchParams(window.location.search);
        var date_range = urlParams.get('date_range');
        $.ajax({
            url: '{{ route('csor.index') }}',
            type: 'GET',
            data: {
                _token: '{{ csrf_token() }}',
                date_range: date_range,
            },
            success: function(response) {
                // Handle the success response
                window.location.reload();
                console.log(response);
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
                // Handle the error response
            }
        });

    }
    $('#submitBtn').click(function(e) {
        e.preventDefault(); // Prevent the link from immediately navigating
        var urlParams = new URLSearchParams(window.location.search);
        var date_range = urlParams.get('date_range');

        // Get the value from the textarea (or any input field)
        var cash = $('#cash_on_hand').val();
        var desc = $('#description').val();

        // Dynamically update the link with query parameters
        var updatedUrl = '#' + '?cash=' + encodeURIComponent(cash) +
            '&description=' + encodeURIComponent(desc);

        // Navigate to the updated URL
        window.location.href = updatedUrl;
    });

    $('#submitBtn2').click(function(e) {
        e.preventDefault(); // Prevent the link from immediately navigating
        var urlParams = new URLSearchParams(window.location.search);
        var date_range = urlParams.get('date_range');

        // Get the value from the textarea (or any input field)
        var cash = $('#cash_on_hand').val();
        var desc = $('#description').val();

        // Dynamically update the link with query parameters
        var updatedUrl = '#' + '?cash=' + encodeURIComponent(cash) +
            '&description=' + encodeURIComponent(desc) + '&date=' + date_range;

        // Navigate to the updated URL
        window.location.href = updatedUrl;
    });
</script>

<script>
    let currentStep = 1;
    const totalSteps = 3;

    document.getElementById('nextBtn').addEventListener('click', () => {
        showLoading();
        setTimeout(() => {
            if (currentStep < totalSteps) {
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                currentStep++;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
            }
            hideLoading();
            updateButtons();
        }, 1300); // Simulate loading time
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        showLoading();
        setTimeout(() => {
            if (currentStep > 1) {
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                currentStep--;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
            }
            hideLoading();
            updateButtons();
        }, 1300); // Simulate loading time
    });

    function updateButtons() {
        document.getElementById('prevBtn').style.display = currentStep === 1 ? 'none' : 'inline-block';
        document.getElementById('nextBtn').style.display = currentStep === totalSteps ? 'none' : 'inline-block';
        document.getElementById('submitBtn').style.display = currentStep === totalSteps ? 'inline-block' : 'none';
        document.getElementById('submitBtn2').style.display = currentStep === totalSteps ? 'inline-block' : 'none';
    }

    function showLoading() {
        document.getElementById('loading').classList.remove('hidden');
    }

    function hideLoading() {
        document.getElementById('loading').classList.add('hidden');
    }

    // Initialize buttons on page load
    updateButtons();
</script>

<script>
    $('#expenseButton').on('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        var now = new Date();
        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var day = now.getDate();
        var month = monthNames[now.getMonth()];
        var year = now.getFullYear();
        var formattedDate = month + ' ' + day + ', ' + year;

        var expense_name = $('#expense_name').val();
        var expense_price = $('#expense_price').val();
        var expense_qty = $('#expense_qty').val();
        var urlParams = new URLSearchParams(window.location.search);
        var expense_date = urlParams.get('date_range') ?? formattedDate;

        $.ajax({
            url: '#',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                expense_name: expense_name,
                expense_price: expense_price,
                expense_qty: expense_qty,
                expense_date: expense_date,
            },
            success: function(response) {
                updateCSOR();
                setTimeout(function() {
                    document.getElementById('modal').classList.add('hidden'); // Hide the modal
                }, 30); // Adjust the timeout as needed
                showLoadingMessage();
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
                document.getElementById('loading-message').classList.add('hidden'); // Hide the loading message
                // Handle the error response
            }
        });
    });

    function showLoadingMessage() {
        document.getElementById('loading-message').classList.remove('hidden');
        document.getElementById('expenseButton').classList.add('pointer-events-none', 'opacity-50');
    }
</script>

<script>
    const showModalButton = document.getElementById('show-modal');
    const hideModalButton = document.getElementById('hide-modal');
    const modal = document.getElementById('modal');

    showModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    hideModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>
