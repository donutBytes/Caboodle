<?php

namespace App\Http\Controllers;
use \App\KitItems;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index($item_id)
    {
        $item = KitItems::where('kit_item_id','=',$item_id)->first();
        return view('item',compact('item'));
    }
}
