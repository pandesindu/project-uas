<?php

namespace App\Http\Livewire\Bank;

use App\Models\Bank;
use Livewire\Component;
use Livewire\WithPagination;

class BankIndex extends Component
{

    use WithPagination;

    public $paginate = 5 ;
    public $search = '';
    public $statusUpdate=false;


    protected $listeners = [
        'bankTersimpan', 'bankTerupdate'
    ]; 

    public function render()
    {
        return view('livewire.bank.bank-index', [
            'banks'=> $this->search == null ?
            Bank::latest()->paginate($this->paginate) : 
            Bank::where('nama_bank', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])->layout('layouts.template');
    }

    public function getBank($id){
        $this->statusUpdate=true;
        $bank = Bank::find($id);
        $this->emit('getBank', $bank);
    }

    public function destroy ($id){
        if($id){
            $data = Bank::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus!!!');
        }
    }

    public function bankTersimpan()
    { 
        session()->flash('message', 'data tersimpan!!!');
    }

    public function bankTerupdate()
    { 
        session()->flash('message', 'data terupdate!!!');
    }

    
}