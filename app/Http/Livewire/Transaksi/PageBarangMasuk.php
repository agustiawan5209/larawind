<?php

namespace App\Http\Livewire\Transaksi;

use Carbon\Carbon;
use App\Models\Stock;
use Livewire\Component;
use App\Models\BahanBaku;
use App\Models\Suppliers;
use App\Models\Transaksi;
use App\Models\BarangMasuk;
use App\Models\Bawaan;

class PageBarangMasuk extends Component
{
    public $addItem = false;
    public $sup, $bb;
    public $supplier, $harga, $jumlah, $KBM, $sub_total, $tgl, $bahan, $userSaved, $getBB;
    public $barangmasuk, $date;
    public $min_date, $max_date, $total_penjualan, $total_date_penjualan;
    public function MinDate()
    {
        if($this->min_date != "" && $this->max_date != ""){
            $this->date = BarangMasuk::whereBetween('tgl_masuk', [$this->min_date, $this->max_date])->get();
            $this->total_date_penjualan = $this->date->sum('jumlah_pembelian') * 3200;
        }else {
            // dd("hahaha");
        }
    }
    public function AddingItem()
    {
        $this->supplier = '';
        $this->harga = 0;
        $this->jumlah = '';
        $this->KBM = '';
        $this->sub_total = '';
        $this->tgl = Carbon::now()->format('Y-m-d');
        $this->bahan = 'Cup';
        $this->addItem = true;
        $this->userSaved = false;
    }
    public function getData()
    {
        $harga = BahanBaku::where('bawaan_id', $this->bahan)->get();
        foreach ($harga as $hargas) {
            $this->harga = $hargas->harga;
        }
        // dd($this->bahan);
    }
    public function getSupplier()
    {
        $this->bb = Suppliers::where('supplier', $this->supplier)->get();
        // foreach($this->bb as $BBS){
        //     $this->bb = $BBS->bahan_baku->bahan;
        // }
    }
    public function sub_total()
    {
        $this->sub_total = "Rp. " . number_format(intval($this->harga) * intval($this->jumlah), 0, 2);
    }
    public function generateKode()
    {
        $query = BarangMasuk::max('kode_barang_masuk');
        if (empty($query)) {
            $this->KBM = 'KBM1';
        } else {
            $exp =  explode("M", $query);
            $str = 'KBM';
            $this->KBM = sprintf("%s%u", $str, abs($exp[1] + 1));
        }
    }
    public function transaksiKode()
    {
        $query = Transaksi::max('kode_transaksi');
        if (empty($query)) {
            $this->kode_transaksi = 'KT1';
        } else {
            $exp =  explode("T", $query);
            $str = 'KT';
            $this->kode_transaksi = sprintf("%s%u", $str, abs($exp[1] + 1));
        }
        return $this->kode_transaksi;
    }
    public function submit()
    {
        $this->validate([
            'KBM' => 'required',
            'bahan' => 'required',
            'supplier' => 'required',
            'jumlah' => 'required|integer',
            'sub_total' => 'required',
            'tgl' => 'required',
        ]);
        $transaksi = [
            'kode_transaksi' => $this->transaksiKode(),
            'tgl_transaksi' => $this->tgl,
            'jenis'=> 1
        ];
        // Insert Data
        $cek =   Transaksi::create($transaksi);
        if ($cek) {
            $tr = Transaksi::latest()->first();
            $tr->id;
            $data = [
                'kode_barang_masuk' => $this->KBM,
                'bahan' => $this->bahan,
                'supplier_id' => $this->supplier,
                'jumlah_pembelian' => $this->jumlah,
                'sub_total' => intval($this->harga) * intval($this->jumlah),
                'tgl_masuk' => $this->tgl,
                'transaksi_id' => $tr->id,
            ];
            BarangMasuk::create($data);
        }
        session()->flash("message", $this->KBM ? "Berhasil Ditambah Menambah " . $this->KBM : "Gagal Ditambah");
        $this->userSaved = true;
        $this->addItem = false;
        // Update Stock
        $stock = Stock::select('jumlah_stock')
        ->where('default_stock_id', $this->bahan)
            ->get();
        foreach ($stock as $a) {
            $hasil = intval($a->jumlah_stock) + intval($this->jumlah);
        }
        // dd($hasil);
        Stock::where('bawaan_id', $this->bahan)
            ->update(['jumlah_stock' => $hasil]);
    }
    public function closeAlert()
    {
        $this->userSaved = false;
    }
    public function getBahan()
    {
        $df = BahanBaku::where('suppliers_id', $this->supplier)->get();
        $this->getBB = $df;
        // dd($df);
    }
    public function render()
    {
        $this->sup = Suppliers::all();
        $this->bb = Bawaan::all();
        $this->barangmasuk = BarangMasuk::all();
        $this->total_penjualan = $this->barangmasuk->sum('jumlah_pembelian') * 3200;
        return view('livewire.transaksi.page-barang-masuk');
    }
}
