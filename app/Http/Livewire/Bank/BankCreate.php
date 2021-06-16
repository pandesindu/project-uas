<?php

namespace App\Http\Livewire\Bank;

use App\Models\Bank;
use Livewire\Component;

class BankCreate extends Component
{
    public $nama_bank;

    public function render()
    {
        return view('livewire.bank.bank-create');
    }

    public function store()
    {
        $this->validate([
            'nama_bank' => 'required',
        ]);

        $data = Bank::create([
            'nama_bank' => $this->nama_bank,
        ]);
        $this->resetInput();
        $this->emit('bankTersimpan', $data);
    }

    public function resetInput()
    {
        $this->nama_bank = null;

    }
}