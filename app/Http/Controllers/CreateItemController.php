<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Items;
use App\KitItems;
use Webpatser\Uuid\Uuid;

class CreateItemController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index($kit_id)
  {
      return view('createItem',compact('kit_id'));
  }
  public function store(Request $request)
  {
      $items = new Items();
      $item = $items->firstOrCreate([
          'user_id'=>Auth::user()->user_id,
          'item_id'=>(string)Uuid::generate(4),
          'name'=>$request['name'],
          'producer'=>$request['producer'],
          'date_released'=>$request['date_released']
      ]);

      $kitItems = new KitItems();
      $kitItems->create([
          'kit_id' => $request->kit_id,
          'item_id' => $item->item_id,
          'kit_item_id' => Uuid::generate(4),
          'name' => $request->name,
          'condition' => $request->condition,
          'cost' => !is_null($request->cost) ? $request->cost : null,
          'description' => $request->description
      ]);

      return redirect('/kit/'.$request->kit_id);
  }
}
