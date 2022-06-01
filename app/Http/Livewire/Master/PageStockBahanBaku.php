<?php

namespace App\Http\Livewire\Master;

use App\Models\BahanBaku;
use Livewire\Component;

class PageStockBahanBaku extends Component
{
    public $bahanbaku;
    public function render()
    {
        $this->bahanbaku = BahanBaku::all();
        return view('livewire.master.page-stock-bahan-baku');
    }
}
