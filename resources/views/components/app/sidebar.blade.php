<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 bg-accent-100 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div>
        <a class="block flex justify-center bg-onyx-100 px-12 pt-8"  href="{{ route('dashboard') }}">
            <img class="h-20" src="/images/hris logo 3.svg" alt="image description">
        </a>
    </div>
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-72 lg:sidebar-expanded:!w-72 2xl:!w-72 shrink-0 bg-onyx-100 p-4 transition-all duration-200 ease-in-out"
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
                    @can('super_access')
                        <!-- Dashboard -->
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'bg-accent-100' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['dashboard']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['dashboard'])) {{ 'hover:text-slate-200' }} @endif"
                                href="{{ route('superadmin.index') }}">
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
                        <!-- User Accounts -->
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['employee'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('useracc.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['employee'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#FFFFFF">
                                        <path
                                            d="M400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-8 18-13.5 37.5T404-360h-4q-71 0-127.5 18T180-306q-9 5-14.5 14t-5.5 20v32h252q6 21 16 41.5t22 38.5H80Zm560 40-12-60q-12-5-22.5-10.5T584-204l-58 18-40-68 46-40q-2-14-2-26t2-26l-46-40 40-68 58 18q11-8 21.5-13.5T628-460l12-60h80l12 60q12 5 22.5 11t21.5 15l58-20 40 70-46 40q2 12 2 25t-2 25l46 40-40 68-58-18q-11 8-21.5 13.5T732-180l-12 60h-80Zm40-120q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-560q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">User
                                        Accounts</span>
                                </div>
                            </a>
                            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                                <ul class="pl-9 mt-1 @if (!in_array(Request::segment(1), ['employee'])) {{ 'hidden' }} @endif"
                                    :class="open ? '!block' : 'hidden'">
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('create.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('create.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Create
                                                User</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('deleted.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('deleted.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Deleted
                                                Account</span>
                                        </a>
                                    </li>
                                    <li class="mb-1 last:mb-0">
                                        <a class="block text-white dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('update.index')) {{ '!text-violet-500' }} @endif"
                                            href="{{ route('update.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Update
                                                Account</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['chats'])) {{ 'bg-accent-100' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['chats']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['chats'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/chats">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M280-240q-17 0-28.5-11.5T240-280v-80h520v-360h80q17 0 28.5 11.5T880-680v600L720-240H280ZM80-280v-560q0-17 11.5-28.5T120-880h520q17 0 28.5 11.5T680-840v360q0 17-11.5 28.5T640-440H240L80-280Z"/></svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Chats</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endcan
                    @can('admin_access')
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
                        {{-- Branch --}}
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['branches'])) {{ 'bg-accent-100' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['branches']) ? 1 : 0 }} }">
                            <a href="{{ route('branches.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['branches'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                            width="24px" fill="#e8eaed">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z" />
                                        </svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Branches</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['chats'])) {{ 'bg-accent-100' }} @endif"
                            x-data="{ open: {{ in_array(Request::segment(1), ['chats']) ? 1 : 0 }} }">
                            <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['chats'])) {{ 'hover:text-slate-200' }} @endif"
                                href="/chats">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M280-240q-17 0-28.5-11.5T240-280v-80h520v-360h80q17 0 28.5 11.5T880-680v600L720-240H280ZM80-280v-560q0-17 11.5-28.5T120-880h520q17 0 28.5 11.5T680-840v360q0 17-11.5 28.5T640-440H240L80-280Z"/></svg>
                                        <span
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Chats</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endcan
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

                                   
                                </ul>
                            </div>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('attendance.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['attendance'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm80-80h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm200-190q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/></svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M120-80q-33 0-56.5-23.5T40-160v-520h80v520h600v80H120Zm440-334L280-578v258h560v-258L560-414ZM280-240q-33 0-56.5-23.5T200-320v-340q0-21 9.5-40t28.5-30l322-190 80 47-352 207 272 160 270-160q15-9 30.5-8.5T890-666q14 8 22 21.5t8 30.5v294q0 33-23.5 56.5T840-240H280Zm280-320L448-672l56-56 56 56 142-142 56 56-198 198Zm0 240h280-560 280Z"/></svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Action Form</span>
                                </div>
                            </a>
                        </li>

                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('evaluations.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['evaluations'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q14-36 44-58t68-22q38 0 68 22t44 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm280-670q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-246q54-53 125.5-83.5T480-360q83 0 154.5 30.5T760-246v-514H200v514Zm280-194q58 0 99-41t41-99q0-58-41-99t-99-41q-58 0-99 41t-41 99q0 58 41 99t99 41ZM280-200h400v-10q-42-35-93-52.5T480-280q-56 0-107 17.5T280-210v10Zm200-320q-25 0-42.5-17.5T420-580q0-25 17.5-42.5T480-640q25 0 42.5 17.5T540-580q0 25-17.5 42.5T480-520Zm0 17Z"/></svg>
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
                                            class="text-sm font-medium ml-4 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Employee Request</span>
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
                                            href="{{ route('employeeRequest.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Leave Requests</span>
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
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">COE</span>
                                        </a>
                                    </li>
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
                        <li
                            class="px-3 py-3 rounded-sm mb-0.5 last:mb-0 @if (in_array(Request::segment(1), ['performance-record'])) {{ 'bg-accent-100' }} @endif">
                            <a href="{{ route('performance.index') }}"
                                class="block text-slate-200 hover:text-white truncate transition duration-150 @if (in_array(Request::segment(1), ['performance-record'])) {{ 'hover:text-slate-200' }} @endif">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#FFFFFF">
                                        <path
                                            d="M480-80q-155 0-269-103T82-440h81q15 121 105.5 200.5T480-160q134 0 227-93t93-227q0-134-93-227t-227-93q-86 0-159.5 42.5T204-640h116v80H88q29-140 139-230t253-90q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm112-232L440-464v-216h80v184l128 128-56 56Z" />
                                    </svg>
                                    <span
                                        class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Performance Record</span>
                                </div>
                            </a>
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
                                            href="{{ route('coe.index') }}">
                                            <span
                                                class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">COE</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
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
                            </div> -->
                        </li>
                    @endcan
                    @can('user_access')
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
                                            class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My
                                            Profile</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="mb-1 last:mb-0">
                            <a class="block text-white hover:text-gray-700 dark:hover:text-gray-200 transition truncate @if (Route::is('employeeDashboard.index')) {{ '!text-violet-500' }} @endif"
                                href="{{ route('employeeDashboard.show') }}">
                                <span
                                    class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                            </a>
                        </li> -->
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
