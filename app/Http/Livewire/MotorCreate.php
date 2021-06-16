<?php

namespace App\Http\Livewire;

use App\Models\Merk;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\motor;
use App\Models\Type;
use Illuminate\Database\Eloquent\Collection;

class MotorCreate extends Component
{
    use WithFileUploads;
    public $plat_nomor, $nama_motor, $warna, $tahun_kendaraan, $no_mesin, $no_rangka, $status, $modal, $cover;
    public $data;
    
    public $merk = null;
    



    public function render()
    {   
 
        return view('livewire.motor-create')->with([
            'cariMerk' => Merk::all(),
            'cariType' => Type::where('merk_id', $this->merk)->get()
        ])
        ->layout('layouts.template');
    }


    public function store()
    {

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
            'cover'=> 'required |file'
        ]);

         $cover = $this->cover->store('covers');        
         // $fileName = $this->file('cover')->getClientOriginalName();
        $data = motor::create([
            'plat_nomor'=>$this->plat_nomor,
            'nama_motor'=>$this->nama_motor,
            'merk'=>$this->merk,
            'warna'=>$this->warna,
            'tahun_kendaraan'=>$this->tahun_kendaraan,
            'no_mesin'=>$this->no_mesin,
            'no_rangka'=>$this->no_rangka,
            'status'=>$this->status,
            'modal'=>$this->modal,
            'cover'=>$cover
        ]);
        // dd($cover);
        $this->resetInput();
        $this->emit('motorStored', $data);
        // return redirect()->to('/motors');       
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