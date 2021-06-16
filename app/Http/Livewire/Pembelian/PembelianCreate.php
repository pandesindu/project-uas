<?php

namespace App\Http\Livewire\Pembelian;

use App\Models\motor;
use App\Models\Pembelian;
use Livewire\Component;

class PembelianCreate extends Component
{
    public $nik_penjual, $nama_penjual,$alamat_penjual, $jk_penjual, $no_penjual,$motor_id;
    public $data;

    public function render()
    {
        return view('livewire.pembelian.pembelian-create', [
            'dataMotor' => motor::all()
        ]);
    }

    public function store()
    {
        $this->validate([
            'nik_penjual' => 'required|numeric',
            'nama_penjual'=> 'required',
            'alamat_penjual'=> 'required',
            'jk_penjual'=>'required',
            'no_penjual'=>'required|numeric',
            'motor_id'=>'required'
        ]);

        $data = Pembelian::create([
            'nik_penjual' => $this->nik_penjual,
            'nama_penjual'=> $this->nama_penjual,
            'alamat_penjual'=> $this->alamat_penjual,
            'jk_penjual'=>$this->jk_penjual,
            'no_penjual'=>$this->no_penjual,
            'motor_id'=>$this->motor_id
        ]);
        $this->emit('PembelianDitambahkan', $data);
        $this->resetInput();
        // return redirect()->to('/pembelian');
    }

    public function resetInput()
    {
        $this->nik_penjual = null;
        $this->nama_penjual = null;
        $this->alamat_penjual = null;
        $this->jk_penjual = null;
        $this->no_penjual = null;
        $this->motor_id = null;
    }
}