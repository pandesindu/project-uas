<?php

namespace App\Http\Livewire\Depan;

use App\Models\Merk;
use App\Models\motor;
use Livewire\Component;
use Livewire\WithPagination;

class Beranda extends Component
{
    use WithPagination;
    public $paginate = 20;
    
    public $search = '';
    
    public $statusDetail = false;

    public $listeners = [
        'produk'
    ];
    public function render()
    {
        return view('livewire.depan.beranda', [
            'merks' => Merk::all(),

            'motors' => $this->search == null ?
            motor::latest()->paginate($this->paginate) :
            motor::where('merk', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])->layout('layouts.HomeTemplate');
    }

    public function detailProduk($id)
    {
        $this->statusDetail = true;
        $motor = motor::find($id);
        $this->emit('detail', $motor);
    }

    public function produk()
    {
        $this->statusDetail = false;
    }

}