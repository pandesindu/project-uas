<?php

namespace App\Http\Livewire\Type;

use App\Models\Merk;
use App\Models\Type;
use Livewire\Component;

class TypeUpdate extends Component
{
    public $nama_type, $merk_id, $TypeID;

    protected $listeners = [
        'getType' 
    ];
    public function render()
    {
        return view('livewire.type.type-update', [
            'merks'=>Merk::all()
        ]);
    }

    public function getType($type)
    {
        $this->nama_type = $type['nama_type'];
        $this->merk_id = $type['merk_id'];
        $this->TypeID = $type['id'];
    }

    
    public function update()
    {
        $this->validate([
            'nama_type' => 'required',
            'merk_id'=> 'required',
        ]);
        if($this->TypeID){ 
            $type= Type::find($this->TypeID);

            $type-> update([
                'nama_type' => $this->nama_type,
                'merk_id'=>$this->merk_id
            ]);
        }
        $this->resetInput();
        $this->emit('typeTerupdate', $type);
    }

    public function resetInput()
    {
        $this->nama_type = null;
        $this->merk_id = null;
    }


}