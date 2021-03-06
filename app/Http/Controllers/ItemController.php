<?php

namespace App\Http\Controllers;
use App\UserFavorites;
use App\KitItems;
use App\User;
use App\UserKits;
use Illuminate\Http\Request;
use App\Items;
use Illuminate\Support\Facades\Redirect;
class ItemController extends Controller
{
    public function index($item_id)
    {
        $item = KitItems::where('kit_item_id','=',$item_id)->first();
        $genericItem = Items::where('item_id','=',$item->item_id)->first();
        $kit = UserKits::where('kit_id','=',$item->kit_id)->first();
        $user = User::where('user_id','=',$kit->user_id)->first();
        return view('item',compact('item'))->with(compact('user'))->with(compact('kit'))->with(compact('genericItem'));
    }
    public function delete($kit_item_id)
    {
        $kitItem = KitItems::where('kit_item_id','=',$kit_item_id)->first();
        $favorites = UserFavorites::where('liked_id','=',$kit_item_id)->get();
        foreach($favorites as $favorite)
            $favorite->delete();
        $kitItem->delete();
        return Redirect::back();
    }
}
