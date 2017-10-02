<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Items;
use Webpatser\Uuid\Uuid;

class CreateItemController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      return view('createItem');
  }
  public function store(Request $request)
  {
      Items::create([
          'user_id'=>Auth::user()->user_id,
          'item_id'=>(string)Uuid::generate(4),
          'name'=>$request['name'],
          'date_released'=>$request['date_released'],
          'producer'=>$request['producer']
      ]);
      return Redirect::back();
  }
}
