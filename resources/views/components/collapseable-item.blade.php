<h2 class="accordion-header mb-0" id="headingOne">
    <div class="flex justify-center items-center">
        <a {{$action}}>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 hover:text-red-700 cursor-pointer"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <button
            class="
      accordion-button
      relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      border-0
      rounded-none
      transition
      focus:outline-none
    "
            type="button" data-bs-toggle="collapse" data-bs-target="#a{{ $id }}" aria-expanded="false"
            aria-controls="a{{ $id }}">
            {{ $slot }}
            @if ($c == 0)
                <div class=" bg-white z-10 w-20 absolute right-0 text-white">a</div>
            @endif
        </button>

    </div>
</h2>
@if ($c != 0)
    <div id="a{{ $id }}" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body py-4 pl-16 px-5">
            {{ $children }}
        </div>
    </div>
@endif
