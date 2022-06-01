<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    protected $table = 'bahan_bakus';
    protected $fillable = ['gambar','bawaan_id','isi', 'harga', 'suppliers_id'];
    use HasFactory;

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'suppliers_id');
    }
    public function getStock(){
        return $this->hasOne(Stock::class);
    }
    public function default_stock(){
        return $this->belongsTo(Bawaan::class, 'bawaan_id');
    }
}
