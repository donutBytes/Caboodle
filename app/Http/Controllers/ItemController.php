<?php

namespace App\Http\Controllers;
use \App\KitItems;
use App\User;
use App\UserKits;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index($item_id)
    {
        $item = KitItems::where('kit_item_id','=',$item_id)->first();
        $kit = UserKits::where('kit_id','=',$item->kit_id)->first();
        $user = User::where('user_id','=',$kit->user_id)->first();
        return view('item',compact('item'))->with(compact('user'))->with(compact('kit'));
    }
}
