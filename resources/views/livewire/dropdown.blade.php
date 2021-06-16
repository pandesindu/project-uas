<div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h3>ini header</h3>
                    </div>

                    <form action="">
                        <div class="card-body">
                            <div class="form-grup">
                                <div class="col-sm-10"></div>
                                <select wire:model="selectedMerk" name="" id="" class="form-control">
                                    <option value="">pilih merk</option>
                                    @foreach($merk as $item)
                                    <option value="{{$item->id}}">{{$item->nama_merk}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if(!is_null($type))
                            <div class="form-grup">
                                <div class="col-sm-10"></div>
                                <select wire:model="$selectedType" name="" id="" class="form-control">
                                    <option value="">pilih merk</option>
                                    @foreach($type as $item)
                                    <option value="{{$item->id}}">{{$item->nama_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>