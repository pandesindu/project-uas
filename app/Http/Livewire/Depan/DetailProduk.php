<?php

namespace App\Http\Livewire\Depan;

use Livewire\Component;

class DetailProduk extends Component
{
    public $plat_nomor, $nama_motor, $merk, $warna, $tahun_kendaraan, $no_mesin, $no_rangka, $status, $modal, $cover;
    public $MotorID;

    protected $listeners= [
        'detail'=> 'showMotor'
    ];

    public function showMotor($motor)
    {
        $this->plat_nomor = $motor['plat_nomor'];
        $this->nama_motor = $motor['nama_motor'];
        $this->merk = $motor['merk'];
        $this->warna = $motor['warna'];
        $this->tahun_kendaraan = $motor['tahun_kendaraan'];

        $this->no_mesin = $motor['no_mesin'];
        $this->no_rangka = $motor['no_rangka'];
        $this->status = $motor['status'];
        $this->modal = $motor['modal'];
        $this->cover = $motor['cover'];

        $this->MotorID = $motor['id'];
    }

    public function render()
    {
        return view('livewire.depan.detail-produk', [
            'plat_nomor'=>$this->plat_nomor,
            'nama_motor'=>$this->nama_motor,
            'merk'=>$this->merk,
            'warna'=>$this->warna,
            'tahun_kendaraan'=>$this->tahun_kendaraan,
            'no_mesin'=>$this->no_mesin,
            'no_rangka'=>$this->no_rangka,
            'status'=>$this->status,
            'modal'=>$this->modal,
            'cover'=>$this->cover
        ]);
    }

    public function produk()
    {
        $this->emit('produk');
    }
}