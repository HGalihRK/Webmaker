<x-app-layout>
    <x-heading :s=0 :e=0>Site Setting</x-heading>
    <livewire:websettingform />
    <livewire:pageform/>
    <div class="mt-10"></div>
    <x-heading :s=0 :e=0>Product</x-heading>
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">
            <h2 class="m-2">You have not added any product yet</h2>
        </ul>
    </div>
    <div class="mt-10"></div>

    <livewire:menuform/>


</x-app-layout>

