<?php

namespace App\Http\Livewire\Merk;

use App\Models\Merk;
use Livewire\Component;

class MerkUpdate extends Component
{

    public $nama_merk, $MerkID;
    
    protected $listeners = [
        'getMerk' 
    ];
    public function render()
    {
        return view('livewire.merk.merk-update');
    }

    public function getMerk($merk)
    {
        $this->nama_merk = $merk['nama_merk'];
        $this->MerkID = $merk['id'];
    }

    public function update()
    {
        $this->validate([
            'nama_merk' => 'required',
        ]);
        if($this->MerkID){ 
            $merk= Merk::find($this->MerkID);

            $merk-> update([
                'nama_merk' => $this->nama_merk
            ]);
        }
        $this->resetInput();
        $this->emit('merkTerupdate', $merk);
    }

    public function resetInput()
    {
        $this->nama_merk = null;
    }
}