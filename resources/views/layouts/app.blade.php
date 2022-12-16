<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="icon" href="{{ asset('storage/'.\App\Models\Websetting::first()->logo_url) }}">
    <title>{{ \App\Models\Websetting::first()->page_title .'|'. \App\Models\Websetting::first()->tag  }} 
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100" x-data="{open:false}">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <!--
 This example requires updating your template:

 ```
 <html class="h-full bg-gray-100">
 <body class="h-full">
 ```
-->
        <div>
            <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
            <div x-show="open" class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true">
                <!--
    Off-canvas menu overlay, show/hide based on off-canvas menu state.
   
    Entering: "transition-opacity ease-linear duration-300"
    From: "opacity-0"
    To: "opacity-100"
    Leaving: "transition-opacity ease-linear duration-300"
    From: "opacity-100"
    To: "opacity-0"
    -->
                <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

                <!--
    Off-canvas menu, show/hide based on off-canvas menu state.
   
    Entering: "transition ease-in-out duration-300 transform"
    From: "-translate-x-full"
    To: "translate-x-0"
    Leaving: "transition ease-in-out duration-300 transform"
    From: "translate-x-0"
    To: "-translate-x-full"
    -->
                <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800">
                    <!--
    Close button, show/hide based on off-canvas menu state.
   
    Entering: "ease-in-out duration-300"
    From: "opacity-0"
    To: "opacity-100"
    Leaving: "ease-in-out duration-300"
    From: "opacity-100"
    To: "opacity-0"
    -->
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button" @click="open = false"
                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex-shrink-0 flex items-center px-4">
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                                alt="Workflow">
                        </div>
                        <nav class="mt-5 px-2 space-y-1">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#"
                                class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!--
    Heroicon name: outline/home
   
    Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
    -->
                                <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Site Setting
                            </a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/users -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Page
                            </a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/folder -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                </svg>
                                Product
                            </a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <!-- Heroicon name: outline/calendar -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Menu
                            </a>

                        
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex bg-gray-700 p-4">
                        <a href="#" class="flex-shrink-0 group block">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-base font-medium text-white">Tom Cook</p>
                                    <p class="text-sm font-medium text-gray-400 group-hover:text-gray-300">View profile
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>

            <!-- Static sidebar for desktop -->
            <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex-1 flex flex-col min-h-0 bg-gray-800">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex items-center flex-shrink-0 px-4">
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg"
                                alt="Workflow">
                        </div>
                        <nav class="mt-5 flex-1 px-2 space-y-1">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#site"
                                class="bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!--
    Heroicon name: outline/home
   
    Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
    -->
                                <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Site Setting
                            </a>

                            <a href="#page"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!-- Heroicon name: outline/users -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Page
                            </a>

                            <a href="#product"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!-- Heroicon name: outline/folder -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                </svg>
                                Product
                            </a>

                            <a href="#menu"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <!-- Heroicon name: outline/calendar -->
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Menu
                            </a>

                          
                        </nav>
                    </div>
                    <div class="flex-shrink-0 flex bg-gray-700 p-4">
                        <a href="{{route('profile.show')}}" class="flex-shrink-0 w-full group block">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-9 w-9 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">{{Auth::user()->name}}</p>
                                    <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">View profile
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:pl-64 flex flex-col flex-1">
                <div class="sticky top-0 z-10 md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
                    <button type="button" @click="open = true"
                        class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open sidebar</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <main class="flex-1">
                    <div class="py-6">
                
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                            <!-- Replace with your content -->
                            <div class="py-4">
                                <main>
                                    {{ $slot }}
                                </main>
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </main>
            </div>
        </div>


    </div>

    @stack('modals')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>
