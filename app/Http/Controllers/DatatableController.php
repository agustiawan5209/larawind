<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function SupplierTable(){
        $supplier = Suppliers::all();

        echo $supplier->toJson();
    }
}
