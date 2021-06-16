<?php

namespace App\Http\Livewire;

use App\Http\Middleware\TrustHosts;
use Livewire\Component;
use App\Models\motor;
use Livewire\WithPagination;

class Motors extends Component
{

    use WithPagination;
    public $paginate = 5;
    public $search = '';
    // public $motors;
    public $statusUpdate = false;
    public $statusAdd = false;
    public $statusDetail = false;
    public $AddMotor = false;

    protected $listeners = [
        'motorStored' ,
        'motorUpdated' 
    ];
    
    public function render()
    {
        // $this->motors = Motor::orderBy('created_at', 'DESC')->get();
        return view('livewire.motors', [
            'motors' => $this->search == null ?
            motor::latest()->paginate($this->paginate) :
            motor::where('plat_nomor', 'like', '%'.$this->search.'%')->paginate($this->paginate)
        ])
        ->layout('layouts.template');
    }

    public function addMotor()
    {
        $this->statusAdd=true;
        // return view('livewire.motor-create');
    }

    public function getMotor($id){
        $this->statusUpdate=true;
        $motor = motor::find($id);
        $this->emit('getMotor', $motor);
    }

    public function detailMotor($id){
        $this->statusDetail=true;
        $motor = motor::find($id);
        $this->emit('detailMotor', $motor); 
    }

    public function destroy ($id){
        if($id){
            $data = motor::find($id);
            $data-> delete();
            session()->flash('message', 'data terhapus!!!');
        }

    }

    public function motorStored($data)
    {
        $this->statusAdd=false;
        session()->flash('message', 'data tersimpan!!!');
    }

    public function motorUpdated($motor)
    {
        $this->statusUpdate=false;
        session()->flash('message', 'data motor '.$motor['plat_nomor'].' tersiupdate!!!');
    }

}