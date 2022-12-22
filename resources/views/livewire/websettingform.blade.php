<div>
    <x-form :title=0>
        <x-label>Site title</x-label>
        <x-input-text wire:model="page_title" value="{{ $page_title }}"></x-input-text>
        <x-label>Tagline</x-label>
        <x-input-text  wire:model="tag" name="tag" value="{{ $tag }}"></x-input-text>
        <x-label>Email</x-label>
        <x-input-text  wire:model="email" name="email" value="{{ $email }}"></x-input-text>
        <x-label>Logo Image</x-label>
        @if($logo)
        <x-input-circular-image   wire:model="logo" name="logo">{{$logo->temporaryUrl()}} </x-input-circular-image>
        @else
        <x-input-circular-image   wire:model="logo" name="logo">{{asset('storage/'.$logo_url)}} </x-input-circular-image>
        @endif
        <x-label>Google Map URL</x-label>
        <x-input-text wire:model="google_map_url" value="{{ $google_map_url }}"></x-input-text>
        <x-label>Navigation Color</x-label>
        <x-input-text wire:model="nav_color" value="{{ $nav_color }}"></x-input-text>
        <x-label>Text Color</x-label>
        <x-input-text wire:model="text_color" value="{{ $text_color }}"></x-input-text>
        <x-label>Text Secondary Color</x-label>
        <x-input-text wire:model="text_secondary_color" value="{{ $text_secondary_color }}"></x-input-text>
        <x-label>Link Color</x-label>

        <x-input-text wire:model="link_color" value="{{ $link_color }}"></x-input-text>



        <div class="col-span-6">
            <x-label>Footer Text</x-label>
            <x-input-textarea wire:model="footer_text">{{ $footer_text }}</x-input-textarea>
            <x-label>Home Content</x-label>
            <div wire:ignore>
            <x-input-textarea id="home_content" wire:model="home_content">{{$home_content}}</x-input-textarea>
            </div>
            <x-label>Banner Image</x-label>
            @if($banner)
            <x-input-cover-image wire:model="banner">{{$banner->temporaryUrl()}}</x-input-cover-image>
            @else
            <x-input-cover-image wire:model="banner">{{asset('storage/'.$banner_img_url)}}</x-input-cover-image>
            @endif
        </div>
        <x-slot name="submit">
            <x-divider/>
            <div class="">
                <div class="flex justify-end items-center">
                    

                    <div id="message" class="text-green-500 h-full flex items-center justify-center">
                        @if (session()->has('message'))
                        {{ session('message') }}
                        @endif
                    </div>

                
                    <button wire:click="save" type="button"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
            </div>
        </x-slot>
    </x-form>
</div>
<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

<script>
    const editor = CKEDITOR.replace('home_content');
    editor.on('change', function(event){
        @this.set('home_content', event.editor.getData());
    })
</script>