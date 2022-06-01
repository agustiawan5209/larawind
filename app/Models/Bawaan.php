<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bawaan extends Model
{
    protected $table = 'bawaans';
    protected $fillable = ['id','bahan_baku', 'bbs', 'maxbb'];
    use HasFactory;

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
    public function Supplier(){
        return $this->hasOne(Suppliers::class);
    }
    public function bahan_baku(){
        return $this->hasMany(BahanBaku::class, 'bawaan_id');
    }
}
