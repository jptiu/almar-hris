<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 bg-accent-100 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div>
        <a class="block" href="{{ route('dashboard') }}">
            <img class="h-auto" src="/images/almarlogo.png" alt="image description">
        </a>
    </div>
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-72 lg:sidebar-expanded:!w-72 2xl:!w-72 shrink-0 bg-primary-100 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">


        <!-- Sidebar header -->
        <!-- <div class="flex justify-between mb-10 pr-3 sm:px-2"> -->
        <!-- Close button -->
        <!-- <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button> -->
        <!-- Logo -->

        <!-- </div> -->

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <ul class="mt-3">
                    @can('hr_access')
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['hr'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('hr.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['hr'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#e8eaed">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                </div>
                            </a>
                        </li>

                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if (in_array(Request::segment(1), ['employee', 'employee-add', 'bm-probation', 'new-hire', 'resignation', 'schedule'])) {{ 'from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04]' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['employee', 'employee-add', 'bm-probation', 'new-hire', 'resignation']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (!in_array(Request::segment(1), ['employee', 'employee-add', 'bm-probation', 'new-hire', 'resignation', 'schedule'])) {{ 'hover:text-gray-900 dark:hover:text-white' }} @endif"
                                href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                            width="24px" fill="#e8eaed">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Employee</span>
                                    </div>
                                    <!-- Icon -->
                                    <div
                                        class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if (in_array(Request::segment(1), ['employee'])) {{ 'rotate-180' }} @endif"
                                            :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-10 mt-1 @if (!in_array(Request::segment(1), ['employee', 'employee-add', 'bm-probation', 'new-hire', 'resignation', 'schedule'])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('employee.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('employee.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                                Employee Lists</span>
                                        </a>
                                    </li>
                                    <!-- <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('employee.add')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('employee.add') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Add
                                                Employee</span>
                                        </a>
                                    </li> -->
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('bmprobation.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('bmprobation.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Probation</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('newhire.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('newhire.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">New
                                                Hire</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('resignation.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('resignation.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Resignations</span>
                                            <span
                                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-6 text-sm font-semibold text-red-700 bg-red-200 rounded-full">2</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('schedule.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('schedule.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Schedule</span>
                                        </a>
                                    </li>

                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('schedule.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('employeeDashboard.show') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('attendance.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['attendance'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z" />
                                                <polygon
                                                    points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93" />
                                                <polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9" />
                                            </g>
                                        </g>
                                    </svg>>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Attendance</span>
                                </div>
                            </a>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('emailrequest.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['emailrequest'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z" />
                                                <polygon
                                                    points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93" />
                                                <polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9" />
                                            </g>
                                        </g>
                                    </svg>>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Email Request</span>
                                </div>
                            </a>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('evaluations.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#e8eaed">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M21,8c-1.45,0-2.26,1.44-1.93,2.51l-3.55,3.56c-0.3-0.09-0.74-0.09-1.04,0l-2.55-2.55C12.27,10.45,11.46,9,10,9 c-1.45,0-2.27,1.44-1.93,2.52l-4.56,4.55C2.44,15.74,1,16.55,1,18c0,1.1,0.9,2,2,2c1.45,0,2.26-1.44,1.93-2.51l4.55-4.56 c0.3,0.09,0.74,0.09,1.04,0l2.55,2.55C12.73,16.55,13.54,18,15,18c1.45,0,2.27-1.44,1.93-2.52l3.56-3.55 C21.56,12.26,23,11.45,23,10C23,8.9,22.1,8,21,8z" />
                                                <polygon
                                                    points="15,9 15.94,6.93 18,6 15.94,5.07 15,3 14.08,5.07 12,6 14.08,6.93" />
                                                <polygon points="3.5,11 4,9 6,8.5 4,8 3.5,6 3,8 1,8.5 3,9" />
                                            </g>
                                        </g>
                                    </svg>>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Employee
                                        Evaluation</span>
                                </div>
                            </a>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['expenses'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('payroll.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['expenses'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#e8eaed">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19 14V6c0-1.1-.9-2-2-2H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zm-9-1c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm13-6v11c0 1.1-.9 2-2 2H4v-2h17V7h2z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Payroll</span>
                                    <span
                                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-6 text-sm font-semibold text-red-700 bg-red-200 rounded-full">23</span>
                                </div>
                            </a>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['expenses'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('announce.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['expenses'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960"
                                        width="26px" fill="#FFFFFF">
                                        <path
                                            d="M720-440v-80h160v80H720Zm48 280-128-96 48-64 128 96-48 64Zm-80-480-48-64 128-96 48 64-128 96ZM200-200v-160h-40q-33 0-56.5-23.5T80-440v-80q0-33 23.5-56.5T160-600h160l200-120v480L320-360h-40v160h-80Zm240-182v-196l-98 58H160v80h182l98 58Zm120 36v-268q27 24 43.5 58.5T620-480q0 41-16.5 75.5T560-346ZM300-480Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Announcement</span>
                                    <span
                                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-6 text-sm font-semibold text-red-700 bg-red-200 rounded-full">5</span>
                                </div>
                            </a>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), [''])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('hr.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['hr'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#F3F3F3">
                                        <path
                                            d="m612-550 141-142-28-28-113 113-57-57-28 29 85 85ZM120-160v-80h480v80H120Zm520-280q-83 0-141.5-58.5T440-640q0-83 58.5-141.5T640-840q83 0 141.5 58.5T840-640q0 83-58.5 141.5T640-440Zm-520-40v-80h252q7 22 16 42t22 38H120Zm0 160v-80h376q23 14 49 23.5t55 13.5v43H120Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Initial
                                        Employment Period</span>
                                </div>
                            </a>
                        </li>

                        <!-- Employee Records -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if (in_array(Request::segment(1), [
                                'leaveRequest',
                                'underRequest',
                                'idRequest',
                                'clearance',
                                'cashReqForm',
                                'cashBond',
                            ])) {{ 'from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04]' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['leaveRequest', 'underRequest', 'idRequest', 'clearance', 'cashReqForm', 'cashBond']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (
                                !in_array(Request::segment(1), [
                                    'leaveRequest',
                                    'underRequest',
                                    'idRequest',
                                    'clearance',
                                    'cashReqForm',
                                    'cashBond',
                                ])) {{ 'hover:text-gray-900 dark:hover:text-white' }} @endif"
                                href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                            width="24px" fill="#e8eaed">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39-2.57 0-4.66 1.97-4.66 4.39 0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94 1.7 0 3.08 1.32 3.08 2.94 0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Employee
                                            Records</span>
                                    </div>
                                    <!-- Icon -->
                                    <div
                                        class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if (in_array(Request::segment(1), ['employee'])) {{ 'rotate-180' }} @endif"
                                            :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-10 mt-1 @if (
                                    !in_array(Request::segment(1), [
                                        'leaveRequest',
                                        'underRequest',
                                        'idRequest',
                                        'clearance',
                                        'cashReqForm',
                                        'cashBond',
                                    ])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('leaveRequest.add')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('attendance.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Attendance
                                                Records</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('underRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Leave
                                                Records</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('idRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Disciplinary
                                                Records</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Employee Request Forms -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if (in_array(Request::segment(1), [
                                'leaveRequest',
                                'underRequest',
                                'idRequest',
                                'clearance',
                                'cashReqForm',
                                'cashBond',
                            ])) {{ 'from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04]' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['leaveRequest', 'underRequest', 'idRequest', 'clearance', 'cashReqForm', 'cashBond']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (
                                !in_array(Request::segment(1), [
                                    'leaveRequest',
                                    'underRequest',
                                    'idRequest',
                                    'clearance',
                                    'cashReqForm',
                                    'cashBond',
                                ])) {{ 'hover:text-gray-900 dark:hover:text-white' }} @endif"
                                href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed">
                                            <g>
                                                <path d="M0,0h24v24H0V0z" fill="none" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M15,3H5C3.9,3,3.01,3.9,3.01,5L3,19c0,1.1,0.89,2,1.99,2H19c1.1,0,2-0.9,2-2V9L15,3z M8,17c-0.55,0-1-0.45-1-1s0.45-1,1-1 s1,0.45,1,1S8.55,17,8,17z M8,13c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S8.55,13,8,13z M8,9C7.45,9,7,8.55,7,8s0.45-1,1-1 s1,0.45,1,1S8.55,9,8,9z M14,10V4.5l5.5,5.5H14z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Request
                                            Form</span>
                                    </div>
                                    <!-- Icon -->
                                    <div
                                        class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if (in_array(Request::segment(1), ['employee'])) {{ 'rotate-180' }} @endif"
                                            :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-10 mt-1 @if (
                                    !in_array(Request::segment(1), [
                                        'leaveRequest',
                                        'underRequest',
                                        'idRequest',
                                        'clearance',
                                        'cashReqForm',
                                        'cashBond',
                                    ])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('leaveRequest.add')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('leaveRequest.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Leave
                                                Request</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('undertimeRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('undertimeRequest.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Undertime
                                                Request</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('idRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('idRequest.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">ID
                                                Request</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('clearanceRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('clearanceRequest.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Clearance
                                                Request</span>
                                            <span
                                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-6 text-sm font-semibold text-red-700 bg-red-200 rounded-full">2</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('cashadvanceRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('cashadvanceRequest.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cash
                                                Advance</span>
                                            <span
                                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-6 text-sm font-semibold text-red-700 bg-red-200 rounded-full">2</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('cashBond.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('cashBond.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cash
                                                Bond Loan</span>
                                            <span
                                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-6 text-sm font-semibold text-red-700 bg-red-200 rounded-full">2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Documents -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if (in_array(Request::segment(1), [
                                'leaveRequest',
                                'underRequest',
                                'idRequest',
                                'clearance',
                                'cashReqForm',
                                'cashBond',
                            ])) {{ 'from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04]' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['leaveRequest', 'underRequest', 'idRequest', 'clearance', 'cashReqForm', 'cashBond']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (
                                !in_array(Request::segment(1), [
                                    'leaveRequest',
                                    'underRequest',
                                    'idRequest',
                                    'clearance',
                                    'cashReqForm',
                                    'cashBond',
                                ])) {{ 'hover:text-gray-900 dark:hover:text-white' }} @endif"
                                href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                            width="24px" fill="#e8eaed">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Documents</span>
                                    </div>
                                    <!-- Icon -->
                                    <div
                                        class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if (in_array(Request::segment(1), ['employee'])) {{ 'rotate-180' }} @endif"
                                            :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-10 mt-1 @if (
                                    !in_array(Request::segment(1), [
                                        'leaveRequest',
                                        'underRequest',
                                        'idRequest',
                                        'clearance',
                                        'cashReqForm',
                                        'cashBond',
                                    ])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('leaveRequest.add')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Resume
                                                Documents</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('underRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Application
                                                Documents</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('idRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Separation
                                                Pay Documents</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('idRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Resignation
                                                Documents</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('idRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">AFC
                                                Booklet</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Reports -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if (in_array(Request::segment(1), [
                                'leaveRequest',
                                'underRequest',
                                'idRequest',
                                'clearance',
                                'cashReqForm',
                                'cashBond',
                            ])) {{ 'from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04]' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['leaveRequest', 'underRequest', 'idRequest', 'clearance', 'cashReqForm', 'cashBond']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (
                                !in_array(Request::segment(1), [
                                    'leaveRequest',
                                    'underRequest',
                                    'idRequest',
                                    'clearance',
                                    'cashReqForm',
                                    'cashBond',
                                ])) {{ 'hover:text-gray-900 dark:hover:text-white' }} @endif"
                                href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed">
                                            <g>
                                                <path d="M0,0h24v24H0V0z" fill="none" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M15,3H5C3.9,3,3.01,3.9,3.01,5L3,19c0,1.1,0.89,2,1.99,2H19c1.1,0,2-0.9,2-2V9L15,3z M8,17c-0.55,0-1-0.45-1-1s0.45-1,1-1 s1,0.45,1,1S8.55,17,8,17z M8,13c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S8.55,13,8,13z M8,9C7.45,9,7,8.55,7,8s0.45-1,1-1 s1,0.45,1,1S8.55,9,8,9z M14,10V4.5l5.5,5.5H14z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Reports</span>
                                    </div>
                                    <!-- Icon -->
                                    <div
                                        class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if (in_array(Request::segment(1), ['employee'])) {{ 'rotate-180' }} @endif"
                                            :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-10 mt-1 @if (
                                    !in_array(Request::segment(1), [
                                        'leaveRequest',
                                        'underRequest',
                                        'idRequest',
                                        'clearance',
                                        'cashReqForm',
                                        'cashBond',
                                    ])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('leaveRequest.add')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('monthlyrep.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Monthly
                                                Report</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('underRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">SEC
                                                Annual Report</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('underRequest.index')) {{ '!text-violet-500' }} @endif"
                                            href="#">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Monthly
                                                Remittance</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Loan Status -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if (in_array(Request::segment(1), ['approvedLoan', 'pendingLoandApproval', 'rejectedLoan'])) {{ 'from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04]' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['approvedLoan', 'pendingLoandApproval', 'rejectedLoan']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (!in_array(Request::segment(1), ['approvedLoan', 'pendingLoandApproval', 'rejectedLoan'])) {{ 'hover:text-gray-900 dark:hover:text-white' }} @endif"
                                href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed">
                                            <g>
                                                <rect fill="none" height="24" width="24" />
                                                <path
                                                    d="M17,12c-2.76,0-5,2.24-5,5s2.24,5,5,5c2.76,0,5-2.24,5-5S19.76,12,17,12z M18.65,19.35l-2.15-2.15V14h1v2.79l1.85,1.85 L18.65,19.35z M18,3h-3.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3H6C4.9,3,4,3.9,4,5v15c0,1.1,0.9,2,2,2h6.11 c-0.59-0.57-1.07-1.25-1.42-2H6V5h2v3h8V5h2v5.08c0.71,0.1,1.38,0.31,2,0.6V5C20,3.9,19.1,3,18,3z M12,5c-0.55,0-1-0.45-1-1 c0-0.55,0.45-1,1-1c0.55,0,1,0.45,1,1C13,4.55,12.55,5,12,5z" />
                                            </g>
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Loan
                                            Status</span>
                                    </div>
                                    <!-- Icon -->
                                    <div
                                        class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if (in_array(Request::segment(1), ['employee'])) {{ 'rotate-180' }} @endif"
                                            :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-10 mt-1 @if (!in_array(Request::segment(1), ['approvedLoan', 'pendingLoandApproval', 'rejectedLoan'])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('approvedLoan.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('approved.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Approved
                                                Loans</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('pendingLoandApproval.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('pending.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pending
                                                Loans</span>
                                            <span
                                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-6 text-sm font-semibold text-red-700 bg-red-200 rounded-full">2</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('rejectedLoan.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('rejected.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Rejected
                                                Loans</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Miscellaneous -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 bg-[linear-gradient(135deg,var(--tw-gradient-stops))] @if (in_array(Request::segment(1), ['branchinfo'])) {{ 'from-violet-500/[0.12] dark:from-violet-500/[0.24] to-violet-500/[0.04]' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['branchinfo']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (!in_array(Request::segment(1), ['branchinfo'])) {{ 'hover:text-gray-900 dark:hover:text-white' }} @endif"
                                href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            height="24px" viewBox="0 0 24 24" width="24px" fill="#e8eaed">
                                            <g>
                                                <path d="M0,0h24v24H0V0z" fill="none" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M15,3H5C3.9,3,3.01,3.9,3.01,5L3,19c0,1.1,0.89,2,1.99,2H19c1.1,0,2-0.9,2-2V9L15,3z M8,17c-0.55,0-1-0.45-1-1s0.45-1,1-1 s1,0.45,1,1S8.55,17,8,17z M8,13c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S8.55,13,8,13z M8,9C7.45,9,7,8.55,7,8s0.45-1,1-1 s1,0.45,1,1S8.55,9,8,9z M14,10V4.5l5.5,5.5H14z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Miscellaneous</span>
                                    </div>
                                    <!-- Icon -->
                                    <div
                                        class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                        <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500 @if (in_array(Request::segment(1), ['employee'])) {{ 'rotate-180' }} @endif"
                                            :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-10 mt-1 @if (!in_array(Request::segment(1), ['branchinfo'])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('branchinfo')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('branchinfo.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Branch
                                                Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endcan
                    @can('loan_access')
                        <!-- Dashboard -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-accent-100' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                            width="24px" fill="#e8eaed">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Customer Profile -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['customer'])) {{ 'bg-accent-100' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['customer']) ? 1 : 0 }} }">
                            <a href="{{ route('customer.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['customer'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                            width="24px" fill="#e8eaed">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customer
                                            Profile</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </div>
            <!-- More group -->
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
            <div>
                <!-- <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">More</span>
                </h3> -->
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
                    <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['settings'])){{ 'bg-accent-100' }}@endif" x-data="{ open: {{ in_array(Request::segment(1), ['settings']) ? 1 : 0 }} }">
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
