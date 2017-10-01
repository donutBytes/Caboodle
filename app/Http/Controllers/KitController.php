<?php

namespace App\Http\Controllers;
use \App\UserKits;
use Illuminate\Http\Request;
use App\KitItems;
class KitController extends Controller
{
    public function index($kit_id)
    {
      $kit = UserKits::where('kit_id','=',$kit_id)->first();
      $items = KitItems::where('kit_id','=',$kit_id)->get();
      return view('kit',compact('kit'),compact('items'));
    }
}
