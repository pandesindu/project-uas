<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pembelian extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik_penjual',  'nama_penjual','alamat_penjual', 'jk_penjual', 'no_penjual','motor_id'
    ];

    public function motor(){
        //setiap profil memiliki satu mahasiswa
        return $this->hasMany(motor::class, 'id');
      }

}