@props([
    'align' => 'right'
])

<div class="relative inline-flex" x-data="{ open: false }">
    <button
        class="w-8 h-8 flex items-center justify-center bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600/80 rounded-full"
        :class="{ 'bg-slate-200': open }"
        aria-haspopup="true"
        @click.prevent="open = !open"
        :aria-expanded="open"                        
    >
        <span class="sr-only">Notifications</span>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5B6871"><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/></svg>
        <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-rose-500 border-2 border-white dark:border-[#182235] rounded-full"></div>
    </button>
    <div
        class="origin-top-right z-10 absolute top-full -mr-48 sm:mr-0 min-w-80 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1 {{$align === 'right' ? 'right-0' : 'left-0'}}"                
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        x-show="open"
        x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak                    
    >
        <div class="text-xs font-semibold text-slate-400 dark:text-slate-500 uppercase pt-1.5 pb-2 px-4">Notifications</div>
        <ul>
            <li class="border-b border-slate-200 dark:border-slate-700 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50 dark:hover:bg-slate-700/20" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">📣 <span class="font-medium text-slate-800 dark:text-slate-100">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400 dark:text-slate-500">Feb 12, 2021</span>
                </a>
            </li>
            <li class="border-b border-slate-200 dark:border-slate-700 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50 dark:hover:bg-slate-700/20" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">📣 <span class="font-medium text-slate-800 dark:text-slate-100">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400 dark:text-slate-500">Feb 9, 2021</span>
                </a>
            </li>
            <li class="border-b border-slate-200 dark:border-slate-700 last:border-0">
                <a class="block py-2 px-4 hover:bg-slate-50 dark:hover:bg-slate-700/20" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">🚀<span class="font-medium text-slate-800 dark:text-slate-100">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-slate-400 dark:text-slate-500">Jan 24, 2020</span>
                </a>
            </li>
        </ul>                
    </div>
</div>