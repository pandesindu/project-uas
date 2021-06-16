<?php

namespace App\Http\Livewire\Pembelian;

use App\Models\motor;
use App\Models\Pembelian;
use Livewire\Component;

class PembelianUpdate extends Component
{
    public $nik_penjual, $nama_penjual,$alamat_penjual, $jk_penjual, $no_penjual,$motor_id, $PembelianID;
    
    protected $listeners= [
        'getPembelian'=> 'showPembelian'
    ]; 

    public function render()
    {
        return view('livewire.pembelian.pembelian-update',[
            'dataMotor' => motor::all()
        ]);
    }

    public function showPembelian($dataPembelian)
    {
        $this->nik_penjual = $dataPembelian['nik_penjual'];
        $this->nama_penjual = $dataPembelian['nama_penjual'];
        $this->alamat_penjual = $dataPembelian['alamat_penjual'];
        $this->jk_penjual = $dataPembelian['jk_penjual'];
        $this->no_penjual = $dataPembelian['no_penjual'];
        $this->motor_id = $dataPembelian['motor_id'];
        $this->PembelianID = $dataPembelian['id'];
    }

    public function update()
    {
        $this->validate([
            'nik_penjual' => 'required|numeric',
            'nama_penjual'=> 'required',
            'alamat_penjual'=> 'required',
            'jk_penjual'=>'required',
            'no_penjual'=>'required|numeric',
            'motor_id'=>'required'
        ]);

        if($this->PembelianID){
            $pembelian= Pembelian::find($this->PembelianID);

            $pembelian-> update([
                'nik_penjual' => $this->nik_penjual,
                'nama_penjual'=> $this->nama_penjual,
                'alamat_penjual'=> $this->alamat_penjual,
                'jk_penjual'=>$this->jk_penjual,
                'no_penjual'=>$this->no_penjual,
                'motor_id'=>$this->motor_id
            ]);

            
            $this->emit('PembelianTerupdate', $pembelian);
            $this->resetInput();
            // return redirect()->to('/pembelian');
        }
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