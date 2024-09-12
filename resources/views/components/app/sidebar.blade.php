<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="block" href="{{ route('dashboard') }}">
                <img class="h-auto" src="/images/Almar-logo-samp.png" alt="image description">
            </a>
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <ul class="mt-3">
                    @can('hr_access')
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['hr'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('hr.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['hr'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['hr'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['hr'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['hr'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['employee'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('employee.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['employee'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="h-6 w-6 text-red-400" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path class="fill-current @if (in_array(Request::segment(1), ['employee'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif" d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path class="fill-current @if (in_array(Request::segment(1), ['employee'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif" d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path class="fill-current @if (in_array(Request::segment(1), ['employee'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif" d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Employee</span>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['employee'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-gray-500/90 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if(Route::is('employee.add')){{ '!text-violet-500' }}@endif" href="{{ route('employee.add') }}">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Add Employee</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-gray-500/90 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate ">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">BM Probation</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-gray-500/90 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">New Hire</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-gray-500/90 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Resignation</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['renewals'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('renewals.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['renewals'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['renewals'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['renewals'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Loan
                                        Renewals</span>
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['audit'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('audit.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['audit'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['audit'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['audit'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Audit
                                        Scheduling</span>
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['loan-approvals'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('loan-approvals.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['loan-approvals'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['loan-approvals'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['loan-approvals'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pending
                                        Loan Approvals</span>
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('evaluations.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['evaluations'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['evaluations'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Employee
                                        Evaluation</span>
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['expenses'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('expenses.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['expenses'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Monthly
                                        Report</span>
                                </div>
                            </a>
                        </li>
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['expenses'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('expenses.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['expenses'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Payroll</span>
                                </div>
                            </a>
                        </li>
                    @endcan
                    @can('loan_access')
                        <!-- Dashboard -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Customer Profile -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer']) ? 1 : 0 }} }">
                            <a href="{{ route('customer.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['customer'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer
                                            Profile</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Grant Loan Entry -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['loan'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['loan']) ? 1 : 0 }} }">
                            <a href="{{ route('loan.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['loan'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['loan'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['loan'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-700' }} @endif"
                                                d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['loan'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Grant
                                            Loan Entry</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Collection Data Entry -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['collection'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['collection']) ? 1 : 0 }} }">
                            <a href="{{ route('collection.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['collection'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['collection'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-700' }} @endif"
                                                d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['collection'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['collection'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Collection
                                            Data Entry</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Breakdown of Cash Bills -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['breakdown'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['breakdown']) ? 1 : 0 }} }">
                            <a href="{{ route('breakdown.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['breakdown'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['breakdown'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['breakdown'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M1 1h22v23H1z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['breakdown'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Breakdown
                                            of Cash Bills</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Expenses Data Entry -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['expenses'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('expenses.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['expenses'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Expenses
                                        Data Entry</span>
                                </div>
                            </a>
                        </li>
                        <!-- Compute Cash On Hand -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['calendar'])) {{ 'bg-slate-900' }} @endif">
                            <a 
                            href="{{ route('compute.index') }}"
                            class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['calendar'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['calendar'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M1 3h22v20H1z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['calendar'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Compute
                                        Cash On Hand</span>
                                </div>
                            </a>
                        </li>
                        <!-- Customer Ledger - Daily -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('daily.index') }}" class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'hover:text-slate-200' }} @endif"
                                href="#0">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer
                                        Ledger - Daily</span>
                                </div>
                            </a>
                        </li>
                        <!-- Customer Ledger - ATM -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('monthly.index') }}" class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'hover:text-slate-200' }} @endif"
                                href="#0">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer
                                        Ledger - ATM</span>
                                </div>
                            </a>
                        </li>
                        <!-- Setup Cities/Towns -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['city'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['city']) ? 1 : 0 }} }">
                            <a href="{{ route('city.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                cx="18.5" cy="5.5" r="4.5" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                cx="5.5" cy="5.5" r="4.5" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                cx="18.5" cy="18.5" r="4.5" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                cx="5.5" cy="18.5" r="4.5" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Setup
                                            Cities/Towns</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Setup Barangays -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['barangay'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['barangay']) ? 1 : 0 }} }">
                            <a href="{{ route('barangay.index') }}" class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['barangay'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                cx="16" cy="8" r="8" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['barangay'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                cx="8" cy="16" r="8" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Setup
                                            Barangays</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Setup Customer Type -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('customerType.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Setup
                                            Customer Type</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Bad Accounts -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('badAccount.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Bad Accounts</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <!-- Payroll -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('empPayroll.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Payroll</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endcan
                    @can('auditor_access')
                        <!-- Dashboard -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endcan

                    @can('collector_access')
                        <!-- Dashboard -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                         <!-- My Profile -->
                         <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer']) ? 1 : 0 }} }">
                            <a href="{{ route('customer.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['customer'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Profile</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endcan

                    @can('admin_access')
                        <!-- Dashboard -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                         <!-- Monthly Report -->
                         <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer']) ? 1 : 0 }} }">
                            <a href="{{ route('monthlyReport.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['customer'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Monthly Report</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endcan

                    @can('branch_access')
                    <!-- Dashboard -->
                      <!-- Dashboard -->
                      <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['dashboard'])) {{ 'text-indigo-200' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Customer Profile -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer']) ? 1 : 0 }} }">
                            <a href="{{ route('customer.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['customer'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer
                                            Profile</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Grant Loan Entry -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['loan'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['loan']) ? 1 : 0 }} }">
                            <a href="{{ route('loan.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['loan'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['loan'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['loan'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-700' }} @endif"
                                                d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['loan'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Grant
                                            Loan Entry</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Collection Data Entry -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['collection'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['collection']) ? 1 : 0 }} }">
                            <a href="{{ route('collection.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['collection'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['collection'])) {{ 'text-indigo-600' }}@else{{ 'text-slate-700' }} @endif"
                                                d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['collection'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['collection'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Collection
                                            Data Entry</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Breakdown of Cash Bills -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['breakdown'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['breakdown']) ? 1 : 0 }} }">
                            <a href="{{ route('breakdown.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['breakdown'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['breakdown'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['breakdown'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M1 1h22v23H1z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['breakdown'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Breakdown
                                            of Cash Bills</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Expenses Data Entry -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['expenses'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('expenses.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['expenses'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['expenses'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Expenses
                                        Data Entry</span>
                                </div>
                            </a>
                        </li>
                        <!-- Compute Cash On Hand -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['calendar'])) {{ 'bg-slate-900' }} @endif">
                            <a 
                            href="{{ route('compute.index') }}"
                            class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['calendar'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['calendar'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M1 3h22v20H1z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['calendar'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Compute
                                        Cash On Hand</span>
                                </div>
                            </a>
                        </li>
                        <!-- Customer Ledger - Daily -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('daily.index') }}" class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'hover:text-slate-200' }} @endif"
                                href="#0">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer
                                        Ledger - Daily</span>
                                </div>
                            </a>
                        </li>
                        <!-- Customer Ledger - ATM -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'bg-slate-900' }} @endif">
                            <a href="{{ route('monthly.index') }}" class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['campaigns'])) {{ 'hover:text-slate-200' }} @endif"
                                href="#0">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                            d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z" />
                                        <path
                                            class="fill-current @if (in_array(Request::segment(1), ['campaigns'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                            d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer
                                        Ledger - ATM</span>
                                </div>
                            </a>
                        </li>
                        <!-- Setup Cities/Towns -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['city'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['city']) ? 1 : 0 }} }">
                            <a href="{{ route('city.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                cx="18.5" cy="5.5" r="4.5" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                cx="5.5" cy="5.5" r="4.5" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                cx="18.5" cy="18.5" r="4.5" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['city'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                cx="5.5" cy="18.5" r="4.5" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Setup
                                            Cities/Towns</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Setup Barangays -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['barangay'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['barangay']) ? 1 : 0 }} }">
                            <a href="{{ route('barangay.index') }}" class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['barangay'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                cx="16" cy="8" r="8" />
                                            <circle
                                                class="fill-current @if (in_array(Request::segment(1), ['barangay'])) {{ 'text-indigo-300' }}@else{{ 'text-slate-400' }} @endif"
                                                cx="8" cy="16" r="8" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Setup
                                            Barangays</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Setup Customer Type -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('customerType.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Setup
                                            Customer Type</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                         <!-- Employee Evaluation -->
                         <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('employeeEvaluation.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Employee Evaluation</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <!-- Cash Advance Request Form -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('cashReqForm.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cash Advance Request Form</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                         <!-- Cash Bond -->
                         <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('cashBond.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cash Bond</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                         <!-- Bad Account -->
                         <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('badAccount.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Bad Account</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                         <!-- Customer Payments -->
                         <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('badAccount.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer Payments</span>
                                    </div>
                                </div>
                            </a>
                            <div class="">
                                <ul class="pl-9 mt-1 "
                                    :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-neutral-50 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate \"
                                            href="{{ route('todaysPayer.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Todays Payer</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-gray-500/90 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate"
                                            href="{{ route('latePayer.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Late Payer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Pending Loan Approvals -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('pendingLoandApproval.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pending Loan Approvals</span>
                                    </div>
                                </div>
                            </a>
                            <div class="">
                                <ul class="pl-9 mt-1 "
                                    :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-neutral-50 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate \"
                                            href="{{ route('approvedLoan.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Approved Loans</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-gray-500/90 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate"
                                            href="{{ route('rejectedLoan.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Rejected Loans</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Loan Renewal -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer-type'])) {{ 'bg-slate-900' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer-type']) ? 1 : 0 }} }">
                            <a href="{{ route('loanRenewal.index') }}"
                                class="block text-slate-200 transition duration-150"
                                :class="open ? 'hover:text-slate-200' : 'hover:text-white'">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z" />
                                            <path
                                                class="fill-current @if (in_array(Request::segment(1), ['customer-type'])) {{ 'text-indigo-500' }}@else{{ 'text-slate-600' }} @endif"
                                                d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Loan Renewal</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    
                    @endcan
                </ul>
            </div>
            <!-- More group -->
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">More</span>
                </h3>
                {{-- <ul class="mt-3">
                    <!-- Authentication -->
                    <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                        <a class="block text-slate-200 transition duration-150" :class="open ? 'hover:text-slate-200' : 'hover:text-white'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-600" d="M8.07 16H10V8H8.07a8 8 0 110 8z" />
                                        <path class="fill-current text-slate-400" d="M15 12L8 6v5H0v2h8v5z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Authentication</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1" :class="{ 'hidden': !open }" x-cloak>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign In</span>
                                        </a>
                                    </form>                                     
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign Up</span>
                                        </a>
                                    </form>                                      
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Reset Password</span>
                                        </a>
                                    </form>                                      
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Settings -->
                    <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['settings'])){{ 'bg-slate-900' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['settings']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['settings'])){{ 'hover:text-slate-200' }}@endif" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current @if (in_array(Request::segment(1), ['settings'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z" />
                                        <path class="fill-current @if (in_array(Request::segment(1), ['settings'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z" />
                                        <path class="fill-current @if (in_array(Request::segment(1), ['settings'])){{ 'text-indigo-500' }}@else{{ 'text-slate-600' }}@endif" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z" />
                                        <path class="fill-current @if (in_array(Request::segment(1), ['settings'])){{ 'text-indigo-300' }}@else{{ 'text-slate-400' }}@endif" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Settings</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if (in_array(Request::segment(1), ['settings'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['settings'])){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('account')){{ '!text-indigo-500' }}@endif" href="#0">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Account</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('notifications')){{ '!text-indigo-500' }}@endif" href="#0">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Notifications</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('apps')){{ '!text-indigo-500' }}@endif" href="#0">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Connected Apps</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('plans')){{ '!text-indigo-500' }}@endif" href="#0">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Plans</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('billing')){{ '!text-indigo-500' }}@endif" href="#0">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Billing & Invoices</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if (Route::is('feedback')){{ '!text-indigo-500' }}@endif" href="#0">
                                        <span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Give Feedback</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul> --}}
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-3">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400"
                            d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
