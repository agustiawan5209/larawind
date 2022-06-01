<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['supplier', 'user_id'];
    use HasFactory;

    public function bahan_baku(){
        return $this->hasOne(BahanBaku::class, 'suppliers_id');
    }
    public function barang()
    {
        return $this->hasOne(BarangMasuk::class, 'supplier_id');
    }
    public function User(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
