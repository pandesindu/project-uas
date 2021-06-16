<?php

namespace App\Http\Livewire\Type;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class TypeIndex extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search = '';

    public $statusUpdate=false;

    public $listeners = [
        'typeTerupdate','typeTersimpan'
    ];
    
    public function render()
    {
        return view('livewire.type.type-index',[
            'types'=>$this->search == null ?
            Type::latest()->paginate($this->paginate) : 
            Type::where('nama_type', 'like', '%'.$this->search.'%')->paginate($this->paginate)
            
        ])->layout('layouts.template');
    }

    public function getType($id){
        $this->statusUpdate=true;
        $type = Type::find($id);
        $this->emit('getType', $type);
    }

    public function typeTersimpan()
    { 
        session()->flash('message', 'data tersimpan!!!');
    }

    
    public function typeTerupdate()
    { 
        session()->flash('message', 'data tersimpan!!!');
    }

    public function destroy ($id){
        if($id){
            $data = Type::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus!!!');
        }
    }


}