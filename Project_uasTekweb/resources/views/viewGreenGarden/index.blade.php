<x-garden-layouts>

    <section class="pb-2 pt-10">
        <div class=" ">
            <div class="bg-white pt-16 pb-9 px-40">
                <img src="{{ asset('assets/img/img7.png') }}" alt="">
            </div>
        </div>
    </section>
    <div class="w-9/12 mx-auto bg-white mb-2 mt-3 py-2 border-b-4 border-green-700">
        <h1 class="text-green-700 text-center text-lg font-medium">Rekomendasi Tanaman Hias</h1>
    </div>
    <div class="flex w-9/12 mx-auto flex-wrap">
        <div class="grid grid-cols-5 gap-2">
            @for ($i = 0; $i < 10; $i++)
            <div class="flex flex-row ">
                <div class="hover:border-green-600 w-46 bg-white border border-gray-200 shadow">
                    <a href="#">
                        <img src="{{ asset('assets/img/img6.jpg') }}" alt="" />
                        <div class="p-2">
                            <h5 class="mb-2 text-md font-medium tracking-tight text-gray-900">Anggrek Melayu - Malaysia</h5>
                            <p class="mb-2 font-medium text-md text-green-600">Rp60.000</p>
                        </div>
                    </a>
                </div>
            </div>
            @endfor
        </div>
    </div>

</x-garden-layouts>
