<div>
    <section class="bg-white py-8">


        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            @if($statusDetail)
            <livewire:depan.detail-produk>
            </livewire:depan.detail-produk>
            @else

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                        href="#">
                        Produk kami
                    </a>

                    <div class="flex items-center" id="store-nav-content">
                        <div class="inline-block relative w-64">
                            <select wire:model="search"
                                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="null">Cari Berdasarkan Merk</option>
                                @foreach($merks as $value)
                                <option value="{{$value->nama_merk}}">{{$value->nama_merk}}</option>
                                @endforeach

                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>


                    </div>
                </div>
            </nav>



            @foreach($motors as $motor)
            @if($motor->status == 'ready')

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">

                <img class="hover:grow hover:shadow-lg" src="{{asset ('storage/'.$motor->cover)}}">
                <div class="pt-3 flex items-center justify-between">

                    <ul class="mx-2">
                        <p class="uppercase text-green-400 text-center ">{{$motor->status}} </p>
                        <li class="font-sans  uppercase text-sm ">
                            Nama Motor : {{$motor->nama_motor}}
                        </li>
                        <li class="font-sans  uppercase text-sm ">Plat Nomor : {{$motor->plat_nomor}}</li>
                        <li class=" font-sans uppercase text-sm ">Tahun : {{$motor->tahun_kendaraan}}</li>
                        <li class="font-sans  uppercase text-sm "> Harga :
                            {{number_format($motor->modal, 0, ',','.')}}</li>
                    </ul>

                </div>
                <button wire:click="detailProduk({{$motor->id}})"
                    class="h-8 px-4 m-1 text-sm text-black-100 transition-colors duration-150 bg-gray-200 rounded-lg focus:shadow-outline hover:bg-gray-400">Detail</button>

                <a href="https://api.whatsapp.com/send?phone=6283114975105"> <button
                        class="h-8 px-4 m-1 text-sm text-black-100 transition-colors duration-150 bg-blue-400 rounded-lg focus:shadow-outline hover:bg-blue-600 w-full">Hubungi
                        Penjual</button>
                </a>
            </div>
            @endif
            @endforeach

        </div>
        {{$motors->links()}}
        @endif

    </section>
</div>