<?php

namespace App\Http\Livewire\Penjualan;

use App\Models\Bank;
use App\Models\motor;
use App\Models\Penjualan;
use Livewire\Component;

class PenjualanCreate extends Component
{

    public $nik_pembeli, $nama_pembeli,$alamat_pembeli, $jk_pembeli, $no_pembeli,$motor_id, $transaksi, $pembayaran, $uang_muka, $bank;
    
    public function render()
    {
        return view('livewire.penjualan.penjualan-create', [
            'dataMotor' => motor::all(),
            'banks'=> Bank::all()
        ]);
    }


    public function store()
    {
        $this->validate([
            'nik_pembeli' => 'required|numeric',
            'nama_pembeli'=> 'required',
            'alamat_pembeli'=> 'required',
            'jk_pembeli'=>'required',
            'no_pembeli'=>'required|numeric',
            'motor_id'=>'required'
        ]);

        $data = Penjualan::create([
            'nik_pembeli' => $this->nik_pembeli,
            'nama_pembeli'=> $this->nama_pembeli,
            'alamat_pembeli'=> $this->alamat_pembeli,
            'jk_pembeli'=>$this->jk_pembeli,
            'no_pembeli'=>$this->no_pembeli,
            'motor_id'=>$this->motor_id, 
            'transaksi'=>$this->transaksi,
            'pembayaran'=>$this->pembayaran,
            'uang_muka'=>$this->uang_muka,
            'bank'=>$this->bank
        ]);
        $this->emit('PenjualDitambahkan', $data);
        $this->resetInput();
       
    }

    public function resetInput()
    {
        $this->nik_pembeli = null;
        $this->nama_pembeli = null;
        $this->alamat_pembeli = null;
        $this->jk_pembeli = null;
        $this->no_pembeli = null;
        $this->motor_id = null;
        $this->transaksi = null;
        $this->pembayaran = null;
        $this->uang_muka = null;
        $this->bank = null;
    }

    
}