<div>
    <x-heading id="page" :s=1 :e=0>Pages</x-heading>
    <x-list-stacked>
        @forelse ($pages as $page)
            <x-list-stacked-item title="{{ $page->title }}"
                subtitle="{{ $page->is_hidden == 0 ? 'Not Hidden' : 'Hidden' }}"
                description="Created {{ $page->created_at }}" link="{{route('pageEditor',$page->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 011 1v1H3V5zm12 2v9a2 2 0 01-2 2H7a2 2 0 01-2-2V7h10zm-4 0H7v9h2V7zm4 0h-2v9h2V7z"
                        clip-rule="evenodd" />
                </svg>
            </x-list-stacked-item>
        @empty
            <h2 class="m-2">You have not added any page yet</h2>
        @endforelse
    </x-list-stacked>
    @if ($modal)
        <x-modal title='Add Page'>
            <div class="flex gap-10">
                <x-label>Page Title</x-label>
                <x-input-text wire:model="title" label="Title" placeholder="Title" />
            </div>
        </x-modal>
    @endif
</div>
