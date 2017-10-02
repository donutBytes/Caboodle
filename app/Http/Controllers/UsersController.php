<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('user_id','!=',Auth::user()->user_id)->get();
        return view('users',compact('users'));
    }
}
