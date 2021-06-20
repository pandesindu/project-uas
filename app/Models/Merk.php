<?php

namespace App\Models;
// use App\Models\Type;

use App\Http\Livewire\Motors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_merk'
    ];

    public function motor(){
        return $this->hasMany(motor::class);
      }
      public function type(){
        return $this->hasMany(Type::class);
      }
    
}