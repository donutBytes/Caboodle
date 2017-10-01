<?php

namespace App\Http\Controllers;
use \App\UserKits;
use Illuminate\Http\Request;

class KitController extends Controller
{
    public function index($kit_id)
    {
      $kit = UserKits::where('kit_id','=',$kit_id)->first();
      return view('kit',compact('kit'));
    }
}
