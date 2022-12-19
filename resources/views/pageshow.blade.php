<x-guest-layout>
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">

        <div class="mt-5 mb-5 max-w-7xl mx-auto">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">
                {{ $page->title }}</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-blacksm:text-xl">
                {{ $page->subtitle }}</p>
            <h1 href="#" class="text-gray-900 text-center font-bold text-3xl mb-2"></h1>

            <ul role="list"
                class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-2 xl:gap-x-8">
                @foreach ($page->images as $image)
                
                    <li class="relative">
                        <div
                            class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                            <img src="{{ asset('storage/' . $image->url) }}" alt=""
                                class="">

                        </div>
                        <p
                            class="mt-2 block text-md font-medium text-gray-500 text-center truncate pointer-events-none">
                            {{ $image->caption }}</p>
                    </li>
                @endforeach

                <!-- More files... -->
            </ul>
        </div>

        <div class="max-w-7xl mt-10 mx-auto">

            <div id="content"
                class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                {!! $page->content !!}

            </div>
        </div>
    </div>

    </div>

    <!-- Credit: Componentity.com -->


    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">

            <p class="mt-8 text-center text-base text-gray-400">{{ $websetting->footer_text }}</p>
        </div>
    </footer>
    <style>
        #content li {
            list-style: bullet;
            margin-left: 40px;
        }
    </style>
</x-guest-layout>
