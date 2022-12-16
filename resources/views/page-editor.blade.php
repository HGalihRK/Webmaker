<x-app-layout>
    <x-heading :e=0 :s=0>Editing {{$page->title}}</x-heading>
    <livewire:pageeditform id="{{$page->id}}"/>
</x-app-layout>