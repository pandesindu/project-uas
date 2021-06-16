<div>

    <main>
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


        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <div>
                                @if($statusUpdate)
                                <livewire:bank.bank-update></livewire:bank.bank-update>
                                @else
                                <livewire:bank.bank-create></livewire:bank.bank-create>
                                @endif
                            </div>

                            <div class="mx-auto py-2 sm:px-6 lg:px-8">
                                <div class="grid grid-cols-1 lg:grid-cols-4">
                                    <div class="col-span-2">

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
                                            NO
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nama Bank
                                        </th>

                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php $no= 0; ?>
                                    @foreach ($banks as $data)
                                    <?php $no++; ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$no}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{$data->nama_bank}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">

                                            <button wire:click="getBank({{$data->id}})" class=" h-8 px-4 m-1 text-sm text-indigo-100 transition-colors
                                                duration-150 bg-indigo-700 rounded-lg focus:shadow-outline
                                                hover:bg-indigo-800">Edit</button>

                                            <button wire:click="destroy({{$data->id}})"
                                                class="h-8 px-4 m-1 text-sm text-indigo-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{$banks->links()}}
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>