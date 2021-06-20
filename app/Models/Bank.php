<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_bank'
    ];

    public function penjualan(){
        return $this->hasMany(Penjualan::class, 'id');
      }
}