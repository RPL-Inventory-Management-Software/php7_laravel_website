<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('items',[
            'title' => 'All Item',
            'items' => Item::all()
        ]);
    }

    public function show(Item $item)
    {
        return view ('inventory_equipment', [
            "title" => "Single Item",
            "item" => $item
        ]);
    }
}
