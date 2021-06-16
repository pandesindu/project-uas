<div>

    <div>
        @if(session()->has('message'))
        <div class="alert-banner w-full fixed top-0">
            <input type="checkbox" class="hidden" id="banneralert">
            <label
                class="close cursor-pointer flex items-center justify-between w-full p-2 bg-green-500 shadow text-white"
                title="close" for="banneralert">
                {{session('message')}}

            </label>
        </div>
        @endif
    </div>


    @if($statusAdd)
    <livewire:pembelian.pembelian-create></livewire:pembelian.pembelian-create>
    @elseIf($statusEdit)
    <livewire:pembelian.pembelian-update></livewire:pembelian.pembelian-update>
    @else
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <div class="mx-auto py-2 sm:px-6 lg:px-8">
                                <div class="grid grid-cols-1 lg:grid-cols-4">
                                    <div class="col-span-2">
                                        <button wire:click="addPembelian"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                            Tambah Data

                                        </button>
                                    </div>
                                    <div>
                                        <div class="float-right mx-1 ">
                                            <select wire:model="paginate" class="form-control rounded"
                                                aria-label=".form-select-sm example">
                                                <option selected>none</option>
                                                <option value="2">2</option>
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-group rounded">
                                            <input wire:model="search" type="search" class="form-control rounded"
                                                placeholder="Search" aria-label="Search"
                                                aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            NIK
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nama Penjual
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Jenis Kelamin
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Alamat
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Telepon
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Plat Nomor
                                        </th>

                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($pembelian as $data)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$data->nik_penjual}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$data->nama_penjual}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$data->jk_penjual}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$data->alamat_penjual}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$data->no_penjual}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$data->motor_id}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                            <!-- <button wire:click="detailMotor({{$data->id}})"
                                                class="h-8 px-4 m-1 text-sm text-black-100 transition-colors duration-150 bg-gray-100 rounded-lg focus:shadow-outline hover:bg-gray-200">Detail</button> -->
                                            <button wire:click="editPembelian({{$data->id}})"
                                                class="h-8 px-4 m-1 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">Edit</button>

                                            <button wire:click="destroy({{$data->id}})"
                                                class="h-8 px-4 m-1 text-sm text-indigo-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            {{ $pembelian->links() }}
                        </div>
                        @endif
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>