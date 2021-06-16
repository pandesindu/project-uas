<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik_pembeli',  'nama_pembeli','alamat_pembeli', 'jk_pembeli', 'no_pembeli','motor_id','transaksi', 'pembayaran', 'uang_muka', 'bank'
    ];
}