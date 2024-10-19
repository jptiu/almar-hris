<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="relative">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold mb-12">Breakdown of Cash Bills</h1>
        </div>

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div></div>

            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Add view button -->
                <a href="{{ route('customer.add') }}" class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">New</span>
                </a>

            </div>

        </div>

            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid grid-cols-4 gap-8">
                    <div class="...">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                        <div class="md:col-span-1">
                                            <label for="house">Ref No.</label>
                                            <input type="text" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                        <div class="md:col-span-1">
                                            <label for="house">Date</label>
                                            <input type="date" name="house" id="house" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-1">
                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-1">

                                        <div class="md:col-span-1">
                                            <label for="house">Cashier</label>
                                            <select name="type" id="type" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
                                                <option value="business loan">Cashier 1</option>
                                                <option value="personal loan">Cashier 2</option>
                                            </select>
                                        </div>

                                    </div>  
                                </div>
                            </div>
                        </div>

                    </form>
                    </div>

                    <div class="col-span-3">
                        <section class="container mx-auto">
                            <div class="flex flex-col">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-blue-800 dark:bg-gray-800">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Row No.
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Denomination
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Type
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Qty
                                                        </th>

                                                        <th scope="col"
                                                            class="px-4 py-3.5 text-sm font-normal text-center rtl:text-right text-white dark:text-white">
                                                            Amount
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                                    @foreach ($lists as $list)
                                                        <tr>
                                                            <td
                                                                class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200 whitespace-nowrap">
                                                                {{ $list->id }}
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                {{ $list->first_name }} {{ $list->last_name }}
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                {{ $list->first_name }} {{ $list->last_name }}
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                {{ $list->first_name }} {{ $list->last_name }}
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                {{ $list->first_name }} {{ $list->last_name }}
                                                            </td>
                                                            <td
                                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                                {{ $list->first_name }} {{ $list->last_name }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="text-end mt-12">
                            <div>
                                <h1 class="text-sm font-medium">Total Amount</h1>
                                <span class="text-2xl font-bold text-red-600">10.00</span>
                            </div>
                                <a id="show-modal" href="#" class="mt-4 btn bg-indigo-500 hover:bg-indigo-600 text-white">
                                <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path
                                        d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                                <span class="hidden xs:block ml-2">Add Denomination</span>
                                </a>
                            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                
                <div id="modal" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                            <div
                                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                <form action="{{ route('city.importcsv') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <section class="container mx-auto">
                                        <div class="flex flex-col">
                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                            <thead class="bg-primary-100">
                                                                <tr>
                                                                    <th scope="col"
                                                                    id="modal-title"
                                                                        class="px-4 py-3.5 text-base text-center rtl:text-right text-white dark:text-white">
                                                                        Input Denomination
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                        
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                        <div class="">
                                            <div class="mt-3 text-center sm:mt-0 sm:text-left">
                                                <div class="mt-2">
                                                    <div class="fields grid grid-cols-2 gap-4">
                                                    <form class="space-y-4" action="#">
                                                    <div>
                                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Denomination</label>
                                                        <select id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option selected>Select Denomination</option>
                                                            <option value="US">0.1</option>
                                                            <option value="CA">0.005</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                                                        <select id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            <option selected>Select Type</option>
                                                            <option value="US">Coin</option>
                                                            <option value="CA">...</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty</label>
                                                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" required />
                                                    </div>
                                                    <div>
                                                        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                                                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0.00" required />
                                                    </div>  
                                                    </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                        <button type="submit"
                                            class="inline-flex w-full justify-center rounded-md bg-accent-100 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-accent-200 sm:ml-3 sm:w-auto">Upload</button>
                                        <button id="hide-modal" type="button"
                                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                    </div>
                                </form>
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
</x-app-layout>
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

<div class="col-span-3">
                        