<?php

namespace App\Http\Livewire\Penjualan;

use App\Models\Penjualan;
use Livewire\Component;
use Livewire\WithPagination;

class PenjualanIndex extends Component
{
    use WithPagination;

    public $paginate = 5; 
    public $search = '';
    
    public $statusAdd = false;
    public $statusEdit = false;
    public $statusDetail=false;

    public $listeners = [
        'PenjualDitambahkan','PenjualUpdated'
    ];


    public function render()
    {
        return view('livewire.penjualan.penjualan-index', [

            'penjualans' => $this->search == null ?
            Penjualan::latest()->paginate($this->paginate) :
            Penjualan::where('nama_pembeli', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])->layout('layouts.template');
    }

    public function addPenjualan()
    {
        $this->statusAdd=true;
    }

    public function PenjualDitambahkan()
    {
        $this->statusAdd=false;
        session()->flash('message', 'Data Ditambahkan!!!');
    }
    

    public function editPenjualan($id)
    {
        $this->statusEdit=true;
        $dataPenjualan = Penjualan::find($id);
        $this->emit('getPenjualan', $dataPenjualan);
    }

    public function PenjualUpdated()
    {
        $this->statusEdit=false;
        session()->flash('message', 'Data DiPerbaharui!!!');
    }

    public function destroy ($id){
        if($id){
            $data = Penjualan::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus!!!');
        }
    }

    public function detailPenjualan($id){
        $this->statusDetail=true;
        $data = Penjualan::find($id);
        $this->emit('detailPenjualan', $data); 
    }
    
}