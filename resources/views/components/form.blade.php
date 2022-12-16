<form class="space-y-8 divide-y bg-white p-10 rounded-lg mt-10 mb-10 divide-gray-200">
    <div class="space-y-8 divide-y divide-gray-200">
        <div>
            @if($title!=0)
            <div class="mb-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">{{$title}}</h3>
                <p class="mt-1 text-sm text-gray-500">{{$subtitle}}</p>
            </div>
            @endif

            <div class=" grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                {{ $slot }}

            </div>
         {{$submit}}
        </div>
    </div>
</form>
