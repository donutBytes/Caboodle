<?php

namespace App\Http\Controllers;
use App\UserFavorites;
use App\UserKits;
use App\KitItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index() //not sure yet lmao tbd
  {
    $kits = collect([]);
    $items = collect([]);
      $kit_ids = UserFavorites::where('user_id','=', Auth::user()->user_id)
                              ->where('isKit','=','1')->get();
      $item_ids = UserFavorites::where('user_id','=',Auth::user()->user_id)
                              ->where('isKit','=','0')->get();
      foreach($kit_ids as $kit_id)
      {
          $kits->push(UserKits::where('kit_id','=',$kit_id->liked_id)->first());
      }
      foreach($item_ids as $item_id)
      {
          $items->push(KitItems::where('kit_item_id','=',$item_id->liked_id)->first());
      }
      return view('favorites')->with(compact('kits'))->with(compact('items'));

  }
}
