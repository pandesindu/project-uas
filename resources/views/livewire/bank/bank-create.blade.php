<div class="my-2">
    <form wire:submit.prevent="store" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <input wire:model="nama_bank" type="text"
                class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nama_bank') is-invalid  @enderror"
                id="inputPassword2" placeholder="masukan nama bank">
            @error('nama_bank')
            <span class="invalid-feedback"><strong>{{$message}}</strong></span>
            @enderror
        </div>
        <button type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
    </form>
</div>