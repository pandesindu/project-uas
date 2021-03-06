<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable= [
        'nama_type', 'merk_id'
    ];

    public function merk(){
        return $this->belongsTo(Merk::class);
      }

}