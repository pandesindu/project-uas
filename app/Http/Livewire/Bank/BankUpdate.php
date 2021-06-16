<?php

namespace App\Http\Livewire\Bank;

use App\Models\Bank;
use Livewire\Component;

class BankUpdate extends Component
{

    public $nama_bank, $BankID;
    
    protected $listeners = [
        'getBank' 
    ];

    public function render()
    {
        return view('livewire.bank.bank-update');
    }

    public function getBank($bank)
    {
        $this->nama_bank = $bank['nama_bank'];
        $this->BankID = $bank['id'];
    }

    public function update()
    {
        $this->validate([
            'nama_bank' => 'required',
        ]);
        if($this->BankID){ 
            $bank= Bank::find($this->BankID);

            $bank-> update([
                'nama_bank' => $this->nama_bank
            ]);
        }
        $this->resetInput();
        $this->emit('bankTerupdate', $bank);
    }

    public function resetInput()
    {
        $this->nama_bank = null;
    }
}