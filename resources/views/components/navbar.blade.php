<style>
    #navbar{
        background-color: {{ \App\Models\Websetting::first()->nav_color }};
        box-shadow: 0 2px 4px 0 rgba(0,0,0,.05);
    }
</style>
<header>
    <div id="navbar" x-data={open:false} class="relative ">
        <div
            class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
            <div class="flex justify-start gap-5 items-center lg:w-0 lg:flex-1">
                <a href="#">
                    <img class="h-8 w-auto sm:h-10"
                        src="{{ asset('storage/' . \App\Models\Websetting::first()->logo_url) }}" alt="">

                </a>
                <span class="text-xl font-bold  uppercase">{{ \App\Models\Websetting::first()->page_title }}</span>

            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button" @click="open = !open"
                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <nav class="hidden md:flex space-x-10">
                <div class="relative">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                    @foreach (\App\Models\Menu::all() as $menu)
                        @if ($menu->children->count() != 0)
                            <div class="inline-block" x-data={open:false}>
                                <a href="{{ $menu->page_url }}" @mouseleave="open = false" @mouseover="open = true">
                                    <button type="button"
                                        class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        aria-expanded="false">
                                        <span>{{ $menu->title }}</span>

                                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                </a>
                                <div id="dropdownNavbar" x-show="open"
                                    class="z-10  font-normal bg-white divide-y divide-gray-100 absolute rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul @mouseleave="open = false" @mouseover="open = true"
                                        class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        @foreach ($menu->children as $child)
                                            <li>
                                                <a href="{{ $child->page_url }}"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">{{ $child->title }}</a>
                                            </li>
                                        @endforeach



                                    </ul>

                                </div>
                            </div>
                        @else
                            @if ($menu->parent_menu_id == null)
                                <a href="{{ $menu->page_url }}"
                                    class="text-base font-medium text-gray-500 hover:text-gray-900 mr-3">
                                    {{ $menu->title }}
                                </a>
                            @endif
                        @endif
                    @endforeach



            </nav>

        </div>
        <div x-show="open" class="md:hidden block w-full  pb-3 mb-5 bg-gray-100 " id="menu">
            <ul
                class="
                pt-4
                text-base text-gray-700
                md:flex
                md:justify-between 
                md:pt-0">
                @foreach (\App\Models\Menu::all()->where('parent_menu_id', null) as $menu)
                    @if ($menu->children->count() != 0)
                        <div x-data={submenu:false}>
                            <li class="flex gap-5">
                                <span @click="submenu = !submenu"
                                    class="md:p-4 pl-5 pr-5 py-2 flex w-full justify-between items-center hover:bg-gray-500 text-black">

                                    <a href="{{ $menu->page_url }}">{{ $menu->title }}</a>


                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>


                            </li>
                            <div x-show="submenu">
                                @foreach ($menu->children as $child)
                                    <li class="bg-white">
                                        <a class="md:p-4 pl-5 py-2 block  hover:bg-gray-500 text-black"
                                            href="{{ $child->page_url }}">{{ $child->title }}</a>
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <li>
                            <a class="md:p-4 pl-5 py-2 block hover:bg-gray-500 text-black"
                                href="{{ $menu->page_url }}">{{ $menu->title }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">


            </div>
        </div>
    </div>
</header>
