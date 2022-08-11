<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    { 
        $warehouses = Warehouse::paginate(Warehouse::PER_PAGE);
        $listStatus = Warehouse::LIST_STATUS;

        return view('admin.warehouses.index', compact('warehouses','listStatus'));
        // return view('admin.warehouses.index');
    }

}