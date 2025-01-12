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
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />



        <!-- Cards -->
        <div class="flex justify-between relative items-center mb-4">
            <h1 class="text-2xl md:text-2xl text-slate-800 dark:text-slate-100 font-bold lg:px-4">Approved Loans</h1>
            <!-- Dashboard actions -->
            <div class="sm:flex sm:justify-between sm:items-center">
                <div></div>

                <!-- Right: Actions -->
                <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

                    <!-- Filter button -->
                    <x-dropdown-filter align="right" />

                    <!-- Datepicker built with flatpickr -->
                    <x-datepicker />

                    <!-- Add view button -->
                    <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                        <span class="hidden xs:block ml-2">Add View</span>
                    </button>

                </div>

            </div>
        </div>
        <section class="container px-4 mx-auto">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th class="px-4 py-3.5 text-sm font-medium text-left text-black">ID</th>
                                        <th class="px-4 py-3.5 text-sm font-medium text-left text-black">Name</th>
                                        <th class="px-4 py-3.5 text-sm font-medium text-left text-black">Address</th>
                                        <th class="px-4 py-3.5 text-sm font-medium text-left text-black">Loan Amount</th>
                                        <th class="px-4 py-3.5 text-sm font-medium text-left text-black">Approved Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-500 dark:bg-gray-900">
                                    @foreach ($loans['data'] as $loan)
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ $loan['id'] }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ $loan['customer']['first_name'] ?? 'N/A' }} {{ $loan['customer']['last_name'] ?? 'N/A' }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ $loan['customer']['house'] ?? '' }} {{ $loan['customer']['street'] ?? '' }}
                                                {{ $loan['customer']['barangay_name'] ?? '' }} {{ $loan['customer']['city_town'] ?? 'N/A' }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ number_format($loan['principal_amount'], 2) }}
                                            </td>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-500 dark:text-gray-200">
                                                {{ \Carbon\Carbon::parse($loan['updated_at'])->format('M d, Y h:i A') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Pagination Section -->
            <div class="flex justify-between items-center mt-6">
                <nav>
                    <div class="pagination flex items-center gap-2">
                        @foreach ($loans['links'] as $link)
                            @if ($link['url'])
                                <a href="{{ route('approved.index') }}?{{ Arr::get(parse_url($link['url']), 'query', '') }}" 
                                   class="px-3 py-2 border rounded-md text-gray-600 {{ $link['active'] ? 'bg-indigo-500 text-white' : 'hover:bg-gray-200' }}">
                                    {!! $link['label'] !!}
                                </a>
                            @else
                                <span class="px-3 py-2 border rounded-md text-gray-400 cursor-not-allowed">{!! $link['label'] !!}</span>
                            @endif
                        @endforeach
                    </div>
                </nav>
            </div>
            
        </section>
        

    </div>
</x-app-layout>
