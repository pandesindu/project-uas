<?php

namespace App\Http\Livewire\Merk;

use App\Models\Merk;
use Livewire\Component;

class MerkCreate extends Component
{
    public $nama_merk;

    public function render()
    {
        return view('livewire.merk.merk-create');
    }

    public function store()
    {
        $this->validate([
            'nama_merk' => 'required',
        ]);

        $data = Merk::create([
            'nama_merk' => $this->nama_merk,
        ]);
        $this->resetInput();
        $this->emit('merkTersimpan', $data);
    }

    public function resetInput()
    {
        $this->nama_merk = null;

    }
}