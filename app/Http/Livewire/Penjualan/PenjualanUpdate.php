<?php

namespace App\Http\Livewire\Penjualan;

use App\Models\Bank;
use App\Models\motor;
use App\Models\Penjualan;
use Livewire\Component;

class PenjualanUpdate extends Component
{
    public $nik_pembeli, $nama_pembeli,$alamat_pembeli, $jk_pembeli, $no_pembeli,$motor_id, $transaksi, $pembayaran, $uang_muka, $bank;
    public $PenjualanID;
   
    public $listeners = [
        'getPenjualan'
    ];
    public function render()
    {
        return view('livewire.penjualan.penjualan-update', [
            'dataMotor' => motor::all(),
            'banks'=> Bank::all()
        ]);
    }

    public function getPenjualan($dataPenjualan)
    {
        $this->nik_pembeli = $dataPenjualan['nik_pembeli'];
        $this->nama_pembeli = $dataPenjualan['nama_pembeli'];
        $this->alamat_pembeli = $dataPenjualan['alamat_pembeli'];
        $this->jk_pembeli = $dataPenjualan['jk_pembeli'];
        $this->no_pembeli = $dataPenjualan['no_pembeli'];
        $this->motor_id = $dataPenjualan['motor_id'];
        $this->transaksi = $dataPenjualan['transaksi'];
        $this->pembayaran = $dataPenjualan['pembayaran'];
        $this->uang_muka = $dataPenjualan['uang_muka'];
        $this->bank = $dataPenjualan['bank'];
        $this->PenjualanID = $dataPenjualan['id'];
    }


    public function update()
    {
        $this->validate([
            'nik_pembeli' => 'required|numeric',
            'nama_pembeli'=> 'required',
            'alamat_pembeli'=> 'required',
            'jk_pembeli'=>'required',
            'no_pembeli'=>'required|numeric',
            'motor_id'=>'required'
        ]);

        if($this->PenjualanID){
            $penjualan= Penjualan::find($this->PenjualanID);
            $penjualan-> update([
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
        
        
            $this->emit('PenjualUpdated', $penjualan);
            $this->resetInput();

        }
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