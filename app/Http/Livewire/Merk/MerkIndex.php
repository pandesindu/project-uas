<?php

namespace App\Http\Livewire\Merk;

use App\Models\Merk;
use Livewire\Component;
use Livewire\WithPagination;

class MerkIndex extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $statusUpdate = false;
    public $search = '';

    protected $listeners = [
        'merkTersimpan', 'merkTerupdate'
    ]; 
    
    public function render()
    {
        return view('livewire.merk.merk-index', [
            'merks'=>$this->search == null ?
            Merk::latest()->paginate($this->paginate) : 
            Merk::where('nama_merk', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])->layout('layouts.template');
    }

    public function getMerk($id){
        $this->statusUpdate=true;
        $merk = Merk::find($id);
        $this->emit('getMerk', $merk);
    }

    public function destroy ($id){
        if($id){
            $data = Merk::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus!!!');
        }
    }

    public function merkTersimpan()
    { 
        session()->flash('message', 'data tersimpan!!!');
    }

    
    public function merkTerupdate()
    { 
        session()->flash('message', 'data tersimpan!!!');
    }


}