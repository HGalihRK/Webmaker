<div class="flex mt-10 py-5 m-auto text-gray-800 text-sm flex-col items-center border-t ">
</div>
<div class="bg-white">
    <div class="max-w-screen-xl px-4 sm:px-6 text-gray-800 sm:flex justify-between mx-auto">
        <div class="p-5 sm:w-8/12">
            <h3 class="font-bold text-3xl text-black mb-4">Kirim Pesan</h3>
            <form method="POST" action="{{ route('sendEmail') }}">
                @csrf
                <div class=" grid-cols-2 gap-x-10 grid">
                    <div class=" col-span-1">
                        <x-label>Subjek</x-label>

                        <input name="subject"
                            class="border rounded w-full border-gray-300  px-4 py-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Pertanyaan seputar ....">
                    </div>
                    <div class=" col-span-1">

                        <x-label>Email</x-label>
                        <input name="email"
                            class="border w-full border-gray-300 rounded  px-4 py-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="email" placeholder="username@email.com">
                    </div>
                    <div class=" col-span-1">

                        <x-label>Nama Pengirim</x-label>
                        <input name="name"
                            class="border w-full border-gray-300 rounded  px-4 py-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Eko">
                    </div>
                    <div class=" col-span-2">

                        <x-label>Pesan</x-label>
                        <x-input-textarea name="message"></x-input-textarea>
                    </div>


                </div>
                <x-jet-button class="mt-4">Kirim</x-jet-button>

            </form>

        </div>
        <div class=" text-center sm:w-4/12">
            <h3 class="font-bold text-3xl text-black mb-4">Google Map</h3>
            <img class="inline-block max-w-xs"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Google_Maps_icon_%282015-2020%29.svg/1200px-Google_Maps_icon_%282015-2020%29.svg.png">

        </div>
    </div>

</div>
<div class="flex py-5 m-auto text-gray-800 text-sm flex-col items-center border-t ">
    <p>{{ App\Models\Websetting::first()->footer_text }}</p>
</div>