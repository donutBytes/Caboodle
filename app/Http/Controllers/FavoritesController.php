<?php

namespace App\Http\Controllers;
use App\UserFavorites;
use App\UserKits;
use App\KitItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

          $newKit=UserKits::where('kit_id','=',$kit_id->liked_id)->first();
          if($newKit!=null)
            $kits->push($newKit);
      }
      foreach($item_ids as $item_id)
      {
          $newItem = KitItems::where('kit_item_id','=',$item_id->liked_id)->first();
          if($newItem!=null)
            $items->push($newItem);
      }
      return view('favorites')->with(compact('kits'))->with(compact('items'));
  }


  public function toggle($id)
  {
    $favoriteRecord = $this->isFavorited($id);
    if($favoriteRecord == null)
    {
        if((UserKits::where('kit_id','=',$id))!=null)
            $isKit = true;
        else
            $isKit = false;
        UserFavorites::create([
            'user_id'=>Auth::user()->user_id,
            'liked_id'=>$id,
            'isKit'=> $isKit
        ]);
    }
    else
    {
        $favoriteRecord->delete();
    }
    return Redirect::back();
  }


  public static function isFavorited($id)
  {
      $favoriteRecord = UserFavorites::where('user_id','=',Auth::user()->user_id)
      ->where('liked_id','=',$id)->first();
      return $favoriteRecord;
  }
}
