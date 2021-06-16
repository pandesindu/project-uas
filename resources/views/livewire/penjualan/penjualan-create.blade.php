<div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="store" method="">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-3 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">NIK Pembeli
                            </label>
                            <input wire:model="nik_pembeli" type="number" name="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nik_pembeli') is-invalid  @enderror">
                            @error('nik_pembeli')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Nama Pembeli
                            </label>
                            <input wire:model="nama_pembeli" type="text" name="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nama_pembeli') is-invalid  @enderror">
                            @error('nama_pembeli')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select wire:model="jk_pembeli" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('jk_pembeli') is-invalid  @enderror">
                                <option>jenis Kelamin</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                                <option></option>
                            </select>
                            @error('jk_pembeli')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Alamat Pembeli
                            </label>
                            <input wire:model="alamat_pembeli" type="text" name="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('alamat_pembeli') is-invalid  @enderror">
                            @error('alamat_pembeli')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Telepon Pembeli
                            </label>
                            <input wire:model="no_pembeli" type="number" name="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('no_pembeli') is-invalid  @enderror">
                            @error('no_pembeli')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Plat Nomor</label>
                            <select wire:model="motor_id" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('motor_id') is-invalid  @enderror">
                                <option value="null">--pilih motor--</option>
                                @foreach($dataMotor as $data)
                                <option value="{{$data->plat_nomor}}">{{$data->plat_nomor}}</option>
                                @endforeach
                            </select>
                            @error('motor_id')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Transaksi </label>
                            <select wire:model="transaksi" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('transaksi') is-invalid  @enderror">
                                <option value="null">--pilih transaksi--</option>
                                <option value="cash">cash</option>
                                <option value="kredit">kredit</option>
                            </select>
                            @error('transaksi')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        @if($transaksi =='cash')

                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">pembayaran
                            </label>
                            <input wire:model="pembayaran" type="number" name="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('pembayaran') is-invalid  @enderror">
                            @error('pembayaran')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>

                        @elseif($transaksi == 'kredit')
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">uang muka
                            </label>
                            <input wire:model="uang_muka" type="number" name="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('uang_muka') is-invalid  @enderror">
                            @error('uang_muka')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">Bank </label>
                            <select wire:model="bank" id="country" name="country" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('bank') is-invalid  @enderror">
                                <option value="null">--pilih transaksi--</option>
                                @foreach ($banks as $data)
                                <option value="{{$data->nama_bank}}">{{$data->nama_bank}}</option>
                                @endforeach
                            </select>
                            @error('bank')
                            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                        @endif

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