<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\UserKits;
use Webpatser\Uuid\Uuid;

class CreateKitController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('createKit');
  }

  public function createKit(Request $request)
  {
//      dd($request);
      $kit = new UserKits();
      $kit->create([
          'user_id' => Auth::user()->user_id,
          'kit_id' =>  Uuid::generate(4),
          'kit_name' => $request->kitName,
          'kit_type' => $request->kitType,
          'description' => $request->kitDescription,
          'item_quantity' => 0
      ]);

//      $kits = $kit->where('user_id', Auth::id())->get();
      return redirect('/');
  }
}
