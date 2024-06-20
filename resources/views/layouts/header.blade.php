<header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
    <div class="flex items-center">
        <!-- <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </button> -->

        <div class="flex-none w-56 flex flex-row items-center">
            <img src="assets/images/Almar-logo-samp.png" class="w-48 flex-none">
            <!-- <strong class="capitalize ml-1 flex-1">cleopatra</strong> -->

            <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
                <i class="fad fa-list-ul"></i>
            </button>
        </div>
    </div>

    <div class="flex items-center">
        <x-dropdown>
            <x-slot name="trigger">
                <button @click="dropdownOpen = ! dropdownOpen" class="relative block overflow-hidden">
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="assets/images/sample_img.jpeg" >
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('My profile') }}
                </x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
        <x-dropdown>
            <x-slot name="trigger">
                <button @click="dropdownOpen = ! dropdownOpen" class="relative block overflow-hidden">
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="assets/images/sample_img.jpeg" >
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('My profile') }}
                </x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</header>
