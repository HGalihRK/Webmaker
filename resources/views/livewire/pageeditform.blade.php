<div>
    <x-form :title=0>
        <x-label>Title</x-label>
        <x-input-text wire:model=title></x-input-text>
        <x-label>Subtitle</x-label>
        <x-input-text wire:model=subtitle></x-input-text>
        <x-label>Order Number</x-label>
        <x-input-text wire:model=order_number></x-input-text>
        <div class="flex gap-10 col-span-3">
            <x-label>Shown in home page</x-label>
            <x-input-checkbox wire:model=is_hidden />

        </div>
        <div class="container col-span-6">
            <x-label>Content</x-label>

            <div class="row">
                <div class="col-md-7 offset-3 mt-4">
                    <div class="card-body" wire:ignore>
                        <div wire:ignore class="form-group row">
                            <x-label class="col-md-3 col-form-label" for="message" :value="__('Compose message')" />
                            <div class="col-md-9">
                                <textarea wire:model="content" class="form-control required" name="message" id="message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-slot name="submit">
            <x-divider />
            <div class="">
                <div class="flex justify-end items-center">
                    <div wire:click="deletePage({{$page->id}})"
                    class=" cursor-pointer ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Delete</div>

                    <div  class="text-green-500 h-full flex items-center justify-center">
                        @if (session()->has('message'))
                            {{ session('message') }}
                        @endif
                    </div>


                    <div wire:click="savePage"
                        class=" cursor-pointer ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save</div>
                </div>
            </div>
        </x-slot>
    </x-form>
    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>

    <script>
            const editor = CKEDITOR.replace('message');
            editor.on('change', function(event){
                @this.set('content', event.editor.getData());
            })
    </script>
</div>
