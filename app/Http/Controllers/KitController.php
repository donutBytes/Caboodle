<?php

namespace App\Http\Controllers;
use \App\UserKits;
use Illuminate\Http\Request;
use App\KitItems;
use App\User;
class KitController extends Controller
{
    public function index($kit_id)
    {
      $kit = UserKits::where('kit_id','=',$kit_id)->first();
      $items = KitItems::where('kit_id','=',$kit_id)->get();
      $user = User::where('user_id','=',$kit->user_id)->first();
      return view('kit',compact('kit'),compact('items'))->with(compact('user'));
    }
}
