<?php

namespace App\Http\Livewire\Master;

use App\Models\Produk;
use Livewire\Component;

class PageStockBaarang extends Component
{
    public $produk, $date;
    public $min_date, $max_date, $total_penjualan, $total_date_penjualan;
    public function render()
    {

        $this->produk = Produk::all();
        $this->total_penjualan = $this->produk->sum('jumlah_stock_produk') * 3200;
        return view('livewire.master.page-stock-baarang');
    }
    public function MinDate()
    {
        if($this->min_date != "" && $this->max_date != ""){
            $this->date = Produk::whereBetween('tgl_stock_produk', [$this->min_date, $this->max_date])->get();
            $this->total_date_penjualan = $this->date->sum('jumlah_stock_produk') * 3200;
        }else {
            // dd("hahaha");
        }
    }
}
