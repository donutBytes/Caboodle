<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\UserFollowing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class FollowingController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
      $followed_ids = UserFollowing::where('user_id','=',Auth::user()->user_id)->get();
      $users = collect([]);
      foreach($followed_ids as $id)
      {
          $users->push(User::where('user_id','=',$id->followed_id)->first());
      }
      return view('following')->with(compact('users'));
    }
    // public static function follow($id)
    // {
    //     UserFollowing::create([
    //         'user_id'=>Auth::user()->user_id,
    //         'followed_id'=>$id
    //     ]);
    //     return Redirect::back();
    // }
    // public static function unfollow($id)
    // {
    //     $followedRecord = UserFollowing::where('user_id','=',Auth::user()->user_id)
    //     ->where('followed_id','=',$id)->first();
    //     $followedRecord->delete();
    //     return Redirect::back();
    // }
    public static function isFollowing($id)
    {
        $followingRecord = UserFollowing::where('user_id','=',Auth::user()->user_id)
        ->where('followed_id','=',$id)->first();
        return $followingRecord;
    }
    public function toggle($id)
    {
        if(($followingRecord = $this->isFollowing($id))!=null)
        {
            $followingRecord->delete();
        }
        else {
            UserFollowing::create([
                'user_id'=>Auth::user()->user_id,
                'followed_id'=>$id
            ]);
        }
        return Redirect::back();
    }

}
