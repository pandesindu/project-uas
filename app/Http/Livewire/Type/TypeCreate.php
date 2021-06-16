<?php

namespace App\Http\Livewire\Type;

use App\Models\Merk;
use App\Models\Type;
use Livewire\Component;

class TypeCreate extends Component
{
    public $nama_type, $merk_id;

    public function render()
    {
        return view('livewire.type.type-create', [
            'merks'=>Merk::all()
        ]);
    }

    public function store()
    {
        $this->validate([
            'nama_type' => 'required',
            'merk_id' => 'required',
        ]);

        $data = Type::create([
            'nama_type' => $this->nama_type,
            'merk_id' => $this->merk_id,
        ]);
        $this->resetInput();
        $this->emit('typeTersimpan', $data);
    }

    public function resetInput()
    {
        $this->nama_type = null;
        $this->merk_id = null;
    }
}