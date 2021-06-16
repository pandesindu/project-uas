<?php

namespace App\Http\Livewire\Penjualan;

use Livewire\Component;

class PenjualanDetail extends Component
{

    public $nik_pembeli, $nama_pembeli,$alamat_pembeli, $jk_pembeli, $no_pembeli,$motor_id, $transaksi, $pembayaran, $uang_muka, $bank;
    public $PenjualanID;
   
    public $listeners = [
        'detailPenjualan'
    ];

    public function detailPenjualan($data)
    {
        $this->nik_pembeli = $data['nik_pembeli'];
        $this->nama_pembeli = $data['nama_pembeli'];
        $this->alamat_pembeli = $data['alamat_pembeli'];
        $this->jk_pembeli = $data['jk_pembeli'];
        $this->no_pembeli = $data['no_pembeli'];
        $this->motor_id = $data['motor_id'];
        $this->transaksi = $data['transaksi'];
        $this->pembayaran = $data['pembayaran'];
        $this->uang_muka = $data['uang_muka'];
        $this->bank = $data['bank'];
        $this->PenjualanID = $data['id'];
    }

    public function render()
    {
        return view('livewire.penjualan.penjualan-detail');
    }
}