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

                        <!-- <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                        </a> -->

                    </div>
                </div>
            </nav>



            @foreach($motors as $motor)

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
                    class="h-8 px-4 m-1 text-sm text-black-100 transition-colors duration-150 bg-gray-100 rounded-lg focus:shadow-outline hover:bg-gray-200">Detail</button>

            </div>
            @endforeach

        </div>
        {{$motors->links()}}
        @endif

    </section>
</div>