<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserKits;

class KitsController extends Controller
{
    public function index()
    {
        $kits = UserKits::where('user_id','!=',Auth::user()->user_id)->get();
        return view('kits',compact('kits'));
    }
}
