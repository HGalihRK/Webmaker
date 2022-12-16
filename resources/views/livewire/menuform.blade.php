<div>
    <x-heading id="menu" :s=1 :e=0>Menu</x-heading>

    <x-collapseable>
        @foreach ($menus->where('parent_menu_id', null) as $menu)
        <x-collapseable-item :c="$menu->children->count()" :id="$menu->id">{{ $menu->title }}
            <x-slot name="action">
                @if(!$loop->first)
                wire:click="delete({{ $menu->id }})"
                @else
                class="text-white"
                @endif
            </x-slot>
            <x-slot name="children">
                @foreach ($menu->children as $child)
                    <li>{{$child->title}}</li>
                
                @endforeach
            </x-slot>
        </x-collapsable-item>
        @endforeach
    </x-collapseable>



    @if ($modal)
        <x-modal class=" " title="Add Menu">
            <x-label>Menu Title</x-label>
            <x-input-text wire:model="title"></x-input-text>
            <x-label>Menu Parent</x-label>
            <x-input-select wire:model="parent_menu_id">
                <option>No Parent</option>
                @foreach ($menus->where('parent_menu_id', null) as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                @endforeach
            </x-input-select>
            <x-label>Page URL</x-label>

            <x-input-select wire:model="page_url">
                @foreach ($pages as $page)
                    <option value="{{ route('page.show', $page->id) }}">{{ $page->title }}</option>
                @endforeach
                <option value="{{ $custom }}">Custom URL</option>
            </x-input-select>

            @php
                $url = explode('/', route('page.show', 1));
                array_pop($url);
                $real = implode('/', $url);
            @endphp
            @if (strpos($page_url, $real) === false)
                <div class="mt-2"></div>
                <x-input-text placeholder="Input custom url..." wire:model="custom" />
            @endif
            <x-label>Order Number</x-label>

            <x-input-text wire:model="order_no" />
        </x-modal>
    @endif
</div>
