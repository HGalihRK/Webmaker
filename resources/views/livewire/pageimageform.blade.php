<div>
    <x-heading :e=0 :s=1>{{ $page->title }}'s images</x-heading>

    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($images as $image)
        <li class="relative">
            <div
                class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                <img src="{{asset('storage/'.$image->url)}}"
                    alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">View details for IMG_4985.HEIC</span>
                </button>
            </div>
            <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{$image->caption}} {{$image->is_landing_page == 0 ? '':'(Shown In Main Page)'}}</p>
           <a wire:click="deleteImage({{$image->id}})"> <p class="block text-sm font-medium text-red-500 cursor-pointer">Delete</p></a>
        </li>
        @endforeach
    
            <!-- More files... -->
        </ul>
    @if($modal)
    <x-modal title="Add Image">
        <x-label>Caption</x-label>
        <x-input-text wire:model="caption"/>
        <div class="flex gap-5 items-center"><x-label>Show in main page?</x-label>
            <x-input-checkbox wire:model="mainpage"></x-input-checkbox></div>
        <input class="mt-5" type="file" wire:model="image" name="image" id="image" />
    </x-modal>
    @endif
</div>
