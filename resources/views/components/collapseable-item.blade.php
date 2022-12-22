<h2 class="accordion-header mb-0" id="headingOne">
    <div class="flex justify-center items-center">
        <a {{ $deleteaction }}>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 hover:text-red-700 cursor-pointer"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <a {{ $editaction }}>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6  p-1 ml-3 hover:opacity-100 opacity-50 text-red-500 w-6" viewBox="0 0 24 24">
                <path
                    d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z" />
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
