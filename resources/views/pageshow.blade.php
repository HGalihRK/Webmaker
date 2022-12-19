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
                            <img src="{{ asset('storage/' . $image->url) }}" alt="" class="">

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

            <div id="content" className="unreset" class="mt-3 unreset bg-white ">
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

        /**
* End Vanilla CSS
*/
    </style>
</x-guest-layout>
