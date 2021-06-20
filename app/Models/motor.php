<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class motor extends Model
{
    use HasFactory;
    protected $fillable = [
        'plat_nomor', 'nama_motor', 'merk', 'warna', 'tahun_kendaraan', 'no_mesin', 'no_rangka', 'modal', 'status', 'cover'
    ];


    public function pembelian(){
        return $this->BelongsTo(Pembelian::class);
      }

      
      public function penjualan()
      {
        return $this->belongsTo(Penjualan::class);  
      }


      public function merk()
      {
        return $this->belongsTo(Merk::class);  
      }

      public function type()
      {
        return $this->belongsTo(Type::class);  
      }


}