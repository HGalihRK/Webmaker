<x-guest-layout>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">


        <main>
            <div class="bg-white">
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
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <p class="text-3xl font-semibold text-center mt-12 text-gray-900">{{ $websetting->tag }}</p>
                        <p class="unreset mb-20 text-base text-center mt-12 text-black">{!! $websetting->home_content !!}</p>

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
                                                        <a href="{{ route('page.show', $page->id) }}"> <img
                                                                class="h-48 w-full object-cover"
                                                                @if ($page->images->first()) src="{{ asset('storage/' . $page->images->first()->url) }}"
                                                @else
                                                src="{{ asset('storage/' . $websetting->banner_img_url) }}" @endif
                                                                alt=""></a>
                                                    </div>
                                                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                                        <div class="flex-1">

                                                            <a href="{{ route('page.show', $page->id) }}"
                                                                class="block mt-2">
                                                                <p class="text-xl font-semibold text-gray-900">
                                                                    {{ $page->title }}</p>
                                                                <p class="mt-3 text-base text-gray-500">
                                                                    {{ $page->subtitle }} </p>
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
                                        <a href="{{ route('page.show', $image->page->id) }}">
                                            <div
                                                class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                                <img src="{{ asset('storage/' . $image->url) }}" alt=""
                                                    class="object-cover pointer-events-none group-hover:opacity-75">

                                            </div>
                                        </a>
                                        <a href="{{ route('page.show', $image->page->id) }}">

                                            <p
                                                class="mt-2 block text-lg font-medium text-black text-center truncate pointer-events-none">
                                                {{ $image->caption }}</p>
                                        </a>
                                    </li>
                                @endforeach

                                <!-- More files... -->
                            </ul>


                        </div>
                      
                    </section>





        </main>
   
    </div>

</x-guest-layout>
<style>
    /**
* Start Vanilla CSS 1.0.2
*/
    .unreset body {
        font: 9pt/1.5em sans-serif;
    }

    .unreset pre,
    code,
    tt {
        font: 1em/1.5em 'Andale Mono', 'Lucida Console', monospace;
    }

    .unreset h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    b,
    strong {
        font-weight: bold;
    }

    .unreset em,
    i,
    dfn {
        font-style: italic;
    }

    .unreset dfn {
        font-weight: bold;
    }

    .unreset p,
    code,
    pre,
    kbd {
        margin: 0 0 1.5em 0;
    }

    .unreset blockquote {
        margin: 0 1.5em 1.5em 1.5em;
    }

    .unreset cite {
        font-style: italic;
    }

    .unreset li ul,
    li ol {
        margin: 0 1.5em;
    }

    .unreset ul,
    ol {
        margin: 0 1.5em 1.5em 1.5em;
    }

    .unreset ul {
        list-style-type: disc;
    }

    .unreset ol {
        list-style-type: decimal;
    }

    .unreset ol ol {
        list-style: upper-alpha;
    }

    .unreset img {
        display: inline-block;
    }

    .unreset ol ol ol {
        list-style: lower-roman;
    }

    .unreset ol ol ol ol {
        list-style: lower-alpha;
    }

    .unreset dl {
        margin: 0 0 1.5em 0;
    }

    .unreset dl dt {
        font-weight: bold;
    }

    .unreset dd {
        margin-left: 1.5em;
    }

    .unreset table {
        margin-bottom: 1.4em;
        width: 100%;
    }

    .unreset th {
        font-weight: bold;
    }

    .unreset th,
    td,
    caption {
        padding: 4px 10px 4px 5px;
    }

    .unreset tfoot {
        font-style: italic;
    }

    .unreset sup,
    sub {
        line-height: 0;
    }

    .unreset abbr,
    acronym {
        border-bottom: 1px dotted;
    }

    .unreset address {
        margin: 0 0 1.5em;
        font-style: italic;
    }

    .unreset del {
        text-decoration: line-through;
    }

    .unreset pre {
        margin: 1.5em 0;
        white-space: pre;
    }

    .unreset img.centered,
    .aligncenter,
    div.aligncenter {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .unreset img.alignright {
        display: inline;
    }

    .unreset img.alignleft {
        display: inline;
    }

    .unreset .alignright {
        float: right;
        margin-left: 10px;
    }

    .unreset .alignleft {
        float: left;
        margin-right: 10px;
    }

    .unreset img {
        max-width: 100%;
    }

    .unreset * html .clearfix {
        height: 1%;
    }

    .unreset *+html .clearfix {
        display: inline-block;
    }

    .unreset .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }

    .unreset * html .group {
        height: 1%;
    }

    .unreset *+html .group {
        display: inline-block;
    }

    .unreset .group:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
</style>
