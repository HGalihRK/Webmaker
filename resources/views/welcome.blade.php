<x-guest-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
       

        <main>
            <div class="bg-white pb-20">
                <!-- Hero card -->
                <div class="relative">
                    <div class="absolute inset-x-0 top-0 h-full bg-white"></div>
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                            <div class=" inset-0">
                                <img class="h-full w-full object-cover"
                                    src="{{ asset('storage/' . $websetting->banner_img_url) }}"
                                    alt="People working on laptops">
                                <div class="absolute inset-0 mix-blend-multiply"></div>
                            </div>

                        </div>
 

                    </div>
                </div>
                <div class="bg-white">
                    <p class="text-3xl font-semibold text-center mt-12 text-gray-900">{{ $websetting->tag }}</p>
                    <p class=" mb-20 text-base text-center mt-12 text-black">{{ $websetting->home_content }}</p>    
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="relative bg-white  ">
                       
                            <div class="relative max-w-7xl mx-auto">
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div class="relative  pb-20 px-4 sm:px-6  lg:pb-28 lg:px-8">
                                 
                                    <div class="relative max-w-7xl mx-auto">
                                       
                                        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                                     @foreach ($pages as $page)
                                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                            <div class="flex-shrink-0">
                                               <a href="{{route('page.show',$page->id)}}"> <img class="h-48 w-full object-cover"
                                                @if($page->images->first())    
                                                src="{{asset('storage/'.$page->images->first()->url)}}"
                                                @else
                                                src="{{asset('storage/'.$websetting->banner_img_url)}}"
                                                @endif
                                                    alt=""></a>
                                            </div>
                                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                                <div class="flex-1">
                                               
                                                    <a href="{{route('page.show',$page->id)}}" class="block mt-2">
                                                        <p class="text-xl font-semibold text-gray-900">{{$page->title}}</p>
                                                        <p class="mt-3 text-base text-gray-500">{{$page->subtitle}} </p>
                                                    </a>
                                                </div>
                                    
                                            </div>
                                        </div>
                                     @endforeach

                                           
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                        <!-- Logo cloud -->

                    </div>
                    <section class="bg-white mt-20">
                        <div class="container px-6  max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
                                Gallery
                            </h2>
                            <ul role="list"
                                class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                                @foreach ($images as $image)
                                    <li class="relative">
                                        <a href="{{route('page.show',$image->page->id)}}">
                                        <div
                                            class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="{{ asset('storage/' . $image->url) }}" alt=""
                                                class="object-cover pointer-events-none group-hover:opacity-75">

                                        </div>
                                        </a>
                                        <a href="{{route('page.show',$image->page->id)}}">

                                        <p
                                            class="mt-2 block text-lg font-medium text-black text-center truncate pointer-events-none">
                                            {{ $image->caption }}</p></a>
                                    </li>
                                @endforeach

                                <!-- More files... -->
                            </ul>
                        </div>
                    </section>
                    <div>
                        <section class="bg-white mt-20 dark:bg-gray-900 sm:py-20">
                            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md bg-white rounded-lg ">
                                <h2
                                    class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                                    Contact Us</h2>
                                <p
                                    class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
                                    Hubungi kami untuk informasi lebih lanjut.</p>
                                <form action="#" class="space-y-8">
                                    <div>
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                            email</label>
                                        <input type="email" id="email"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                            placeholder="name@flowbite.com" required>
                                    </div>
                                    <div>
                                        <label for="subject"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                        <input type="text" id="subject"
                                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                            placeholder="Let us know how we can help you" required>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                                            message</label>
                                        <textarea id="message" rows="6"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Leave a comment..."></textarea>
                                    </div>
                                    <button type="submit"
                                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                                        message</button>
                                </form>
                            </div>
                        </section>
                    </div>
                    <footer class="bg-white">
                        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                    
                           
                            <p class="mt-8 text-center text-base text-gray-400">{{ $websetting->footer_text }}</p>
                        </div>
                    </footer>
        </main>
    </div>

</x-guest-layout>
