<div>
    <x-heading id="menu" :s=1 :e=0>Menu</x-heading>

    <x-collapseable>
        @foreach ($menus->where('parent_menu_id', null) as $menu)
            <x-collapseable-item :c="$menu->children->count()" :id="$menu->id">{{ $menu->title }}
                <x-slot name="deleteaction">
                    @if (!$loop->first)
                        wire:click="delete({{ $menu->id }})"
                    @endif
                </x-slot>
                <x-slot name="editaction">
                    wire:click="edit({{ $menu->id }})"

                </x-slot>
                <x-slot name="children">
                    @foreach ($menu->children as $child)
                        <li>
                            <x-collapseable-item :c="$child->children->count()" :id="$child->id">{{ $child->title }}
                                <x-slot name="deleteaction">
                                        wire:click="delete({{ $child->id }})"
                                </x-slot>
                                <x-slot name="editaction">
                                    wire:click="edit({{ $child->id }})"

                                </x-slot>
                                <x-slot name="children">
                                    
                </x-slot>
                </x-collapsable-item>
                </li>
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
                <option value="{{ $custom }}">Custom URL</option>
                @foreach ($pages as $page)
                    @if ($page_url == route('page.show', $page->id))
                        <option selected value="{{ route('page.show', $page->id) }}">{{ $page->title }}</option>
                    @else
                        <option value="{{ route('page.show', $page->id) }}">{{ $page->title }}</option>
                    @endif
                @endforeach
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
