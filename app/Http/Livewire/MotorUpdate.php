<?php

namespace App\Http\Livewire;

use App\Models\Merk;
use App\Models\motor;
use App\Models\Type;
use Livewire\Component;
use Livewire\WithFileUploads;

class MotorUpdate extends Component
{
    use WithFileUploads;
    public $plat_nomor, $nama_motor, $merk, $warna, $tahun_kendaraan, $no_mesin, $no_rangka, $status, $modal, $cover;
    public $MotorID;

    protected $listeners= [
        'getMotor'=> 'showMotor'
    ];


    public function render()
    {
        return view('livewire.motor-update')->with([
            'cariMerk' => Merk::all(),
            'cariType' => Type::where('merk_id', $this->merk)->get()
        ]);
    }

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
        // $this->cover = $motor['cover'];

        $this->MotorID = $motor['id'];
    }

    
    public function update(){
        $this->validate([
            'plat_nomor'=>'required|max:10',
            'nama_motor'=>'required',
            'merk'=>'required',
            'warna'=> 'required',
            'tahun_kendaraan'=>'required|numeric',
            'no_mesin'=> 'required',
            'no_rangka'=> 'required',
            'status'=>  'required',
            'modal'=> 'required',
            // 'cover'=> 'required |file'
        ]);

        if($this->MotorID){
            
            $motor = motor::find($this->MotorID);
            //  $cover = $this->cover->store('covers');
            $motor -> update([
                'plat_nomor'=> $this->plat_nomor,
                'nama_motor'=>$this->nama_motor,
                'merk'=>$this->merk,
                'warna'=> $this->warna,
                'tahun_kendaraan'=>$this->tahun_kendaraan,
                'no_mesin'=> $this->no_mesin,
                'no_rangka'=> $this->no_rangka,
                'status'=>  $this->status,
                'modal'=> $this->modal,
                'cover'=> $this->cover->store('covers')
            ]);

            $this->resetInput();
            $this->emit('motorUpdated', $motor);
        }

    }


    private function resetInput()
    {
            $this->plat_nomor=null;
            $this->nama_motor=null;
            $this->merk=null;
            $this->warna=null;
            $this->tahun_kendaraan=null;
            $this->no_mesin=null;
            $this->no_rangka=null;
            $this->status=null;
            $this->modal=null;
            $this->cover=null;
    }

}