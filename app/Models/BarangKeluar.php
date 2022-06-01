<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'barang_keluars';
    protected $fillable =['kode_barang_keluar', 'alamat_tujuan', 'customer', 'tgl_keluar','produk_id', 'transaksi_id'];
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class ,'customer');
    }
    public function produk(){
        return $this->belongsTo(Produk::class);
    }
    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }
}
