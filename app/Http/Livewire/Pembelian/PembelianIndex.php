<?php

namespace App\Http\Livewire\Pembelian;

use App\Models\motor;
use App\Models\Pembelian;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class PembelianIndex extends Component
{
    public $statusAdd = false;
    public $statusEdit = false;
  

    use WithPagination;
    public $paginate = 5;
    public $search = '';

    public $listeners = [
        'PembelianTerupdate', 'PembelianDitambahkan'
    ];

    
    public function render()
    {
        return view('livewire.pembelian.pembelian-index', [

            'pembelian'=>$this->search == null ?
            Pembelian::latest()->paginate($this->paginate) :
            Pembelian::where('nama_penjual', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])->layout('layouts.template');
    }

    public function addPembelian()
    {
        $this->statusAdd=true;
    }

    public function editPembelian($id)
    {
        
        $this->statusEdit=true;
        $dataPembelian = Pembelian::find($id);
        $this->emit('getPembelian', $dataPembelian);
    }

    public function destroy ($id){
        if($id){
            $data = Pembelian::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus!!!');
        }
    }


    public function PembelianTerupdate()
    { 
        $this->statusEdit=false;
        session()->flash('message', 'data tersimpan!!!');
    }

    public function PembelianDitambahkan()
    { 
        $this->statusAdd=false;
        session()->flash('message', 'Data Ditambahkan!!!');
    }
}