<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BawaanBahanBakuAir extends Model
{
    protected $table = 'bawaan_bahan_baku_airs';
    protected $fillable = ['id','gambar','bahan_baku'];
    use HasFactory;

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
    public function Supplier(){
        return $this->hasOne(Suppliers::class);
    }
    // public function bahan_baku(){
    //     return $this->hasMany(BahanBaku::class, 'bawaan_id');
    // }
}
