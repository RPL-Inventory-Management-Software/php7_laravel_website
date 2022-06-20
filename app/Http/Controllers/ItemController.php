<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest();
        // dd(request('search'));
        if(request('search')) {
            $items->where('name', 'like', '%' . request('search') . '%');
        }

        return view('items',[
            'title' => 'All Item',
            'items' => $items->get()
            //'items' => Item::latest()->get()
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
