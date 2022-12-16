<div class="mt-1 sm:mt-0 sm:col-span-2">
<div class="mt-1 flex items-center">
    <img src="{{$slot}}" class="w-16 h-16">
    <label type="button"
        class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Upload
    <input {{$attributes}} type="file" class="hidden">
    </label>
</div>
</div>
