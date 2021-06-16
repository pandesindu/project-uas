<div class="container">

    <!-- <form wire:submit.prevent="store" class="space-y-4 text-gray-700">
        @csrf
        <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
            <div class="w-full px-2 md:w-1/2">
                <label class="block mb-1" for="formGridCode_name">Plat Nomor</label>
                <input wire:model="plat_nomor"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('plat_nomor') is-invalid  @enderror"
                    type="text" id="formGridCode_name" />
                @error('plat_nomor')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </div>

            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                <div class="w-full px-2 md:w-1/3">
                    <label class="block mb-1" for="formGridCode_month">Merk</label>
                    <div class="relative inline-block w-full text-gray-700">
                        <select wire:model="merk"
                            class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline @error('merk') is-invalid  @enderror"
                            placeholder="Regular input">
                            <option class="selected"> ---pilih salah satu merk---</option>
                            <option>Honda</option>
                            <option>Yamaha</option>
                            <option>Suzuki</option>
                            <option>Kawasaki</option>

                        </select>
                    </div>
                    @error('merk')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror
                </div>

                <div class="w-full px-2 md:w-1/2">
                    <label class="block mb-1" for="formGridCode_last">Nama Motor</label>
                    <input wire:model="nama_motor"
                        class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('nama_motor') is-invalid  @enderror"
                        type="text" id="formGridCode_last" />
                    @error('nama_motor')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror
                </div>

            </div>

            <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_year">Tahun Kendaraan</label>
                <input wire:model="tahun_kendaraan"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('tahun_kendaraan') is-invalid  @enderror"
                    type="number" id="formGridCode_year" />
                @error('tahun_kendaraan')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </div>


            <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_cvc">Warna</label>
                <input wire:model="warna"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('warna') is-invalid  @enderror"
                    type="text" id="formGridCode_cvc" />
                @error('warna')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </div>
        </div>

        <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
            <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_year">Nomor Rangka</label>
                <input wire:model="no_rangka"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('no_rangka') is-invalid  @enderror"
                    type="text" id="formGridCode_year" />
                @error('no_rangka')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </div>

            <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_cvc">Nomor Mesin</label>
                <input wire:model="no_mesin"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('no_rangka') is-invalid  @enderror"
                    type="text" id="formGridCode_cvc" />
                @error('no_mesin')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </div>

            <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_month">Status</label>
                <div class="relative inline-block w-full text-gray-700">
                    <select wire:model="status"
                        class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline @error('status') is-invalid  @enderror"
                        placeholder="Regular input">
                        <option selected> ---pilih status---</option>
                        <option>Ready</option>
                        <option>Terjual</option>
                    </select>
                    @error('status')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
            <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_year">Modal</label>
                <input wire:model="modal"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('status') is-invalid  @enderror"
                    type="number" id="formGridCode_year" />
                @error('modal')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </div>


            <div class="w-full px-2 md:w-1/3">
                <label class="block mb-1" for="formGridCode_cvc">Gambar</label>
                <input wire:model="cover"
                    class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline @error('cover') is-invalid  @enderror"
                    type="file" id="formGridCode_cvc" />
                @error('cover')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </div>
        </div>


        <div class="flex flex-wrap">
            <div class="w-full">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <button
                            class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Tambah</button>
                    </div>
                </div>
            </div>
        </div>

    </form> -->



    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="store" method="">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-3 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Plat Nomor
                            </label>
                            <input wire:model="plat_nomor" type="text" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('plat_nomor') is-invalid  @enderror">
                            @error('plat_nomor')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Merk</label>
                            <select wire:model="merk" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('merk') is-invalid  @enderror">
                                <option value="null">--pilih merk--</option>
                                @foreach($cariMerk as $data)
                                <option value="{{$data->nama_merk}}">{{$data->nama_merk}}</option>
                                @endforeach
                            </select>


                            @error('merk')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>



                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Type / Nama
                                Motor</label>

                            <select wire:model="nama_motor" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('nama_motor') is-invalid  @enderror">
                                <option>---pilih type---</option>
                                @foreach($cariType as $data)
                                <option value="{{$data->nama_type}}">{{$data->nama_type}}</option>
                                @endforeach
                            </select>

                            @error('nama_motor')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>



                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Tahun Kendaraan
                            </label>
                            <input wire:model="tahun_kendaraan" type="number" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('tahun_kendaraan') is-invalid  @enderror">
                            @error('tahun_kendaraan')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">No Rangka
                            </label>
                            <input wire:model="no_rangka" type="text" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('no_rangka') is-invalid  @enderror">
                            @error('no_rangka')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">No Mesin
                            </label>
                            <input wire:model="no_mesin" type="text" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('no_mesin') is-invalid  @enderror">
                            @error('no_mesin')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Warna
                            </label>
                            <input wire:model="warna" type="text" name="first_name" id="first_name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('warna') is-invalid  @enderror">
                            @error('no_mesin')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <label for="country" class="block text-sm font-medium text-gray-700">Status
                                Kendaraan</label>
                            <select wire:model="status" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('status') is-invalid  @enderror">
                                <option>--pilih status--</option>
                                <option>ready</option>
                                <option>terjual</option>
                                <option></option>
                            </select>
                            @error('status')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <label for="first_name" class="block text-sm font-medium text-gray-700"> Harga Jual
                            </label>
                            <input wire:model="modal" type="text" name="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('modal') is-invalid  @enderror">
                            @error('modal')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Cover photo
                                </label>
                                <div
                                    class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md ">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload"
                                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input wire:model="cover" id="file-upload" name="file-upload"
                                                    type="file" class="sr-only @error('modal') is-invalid  @enderror">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @error('cover')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>


                    </div>


                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
        </form>
    </div>



</div>