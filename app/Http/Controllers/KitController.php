<?php

namespace App\Http\Controllers;
use \App\UserKits;
use Illuminate\Http\Request;
use App\KitItems;
use App\User;
use App\UserFavorites;
use Illuminate\Support\Facades\Redirect;
class KitController extends Controller
{
    public function index($kit_id)
    {
        $kit = UserKits::where('kit_id','=',$kit_id)->first();
        $items = KitItems::where('kit_id','=',$kit_id)->get();
        $user = User::where('user_id','=',$kit->user_id)->first();
        return view('kit',compact('kit'),compact('items'))->with(compact('user'));
    }
    public function delete($kit_id)
    {
        $kit = UserKits::where('kit_id','=',$kit_id)->first();
        $kit_items = KitItems::where('kit_id','=',$kit_id)->get();
        $favorites = UserFavorites::where('liked_id','=',$kit_id)->get();
        foreach($kit_items as $kit_item)
        {
            $favorites->push(UserFavorites::where('liked_id','=',$kit_item->kit_item_id));
        }
        foreach($kit_items as $item)
            $item->delete();
        foreach($favorites as $favorite)
            $favorite->delete();
        $kit->delete();
        return Redirect::back();
    }
}
