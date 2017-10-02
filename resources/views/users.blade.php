<?php
use App\Http\Controllers\FollowingController;
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                    @foreach($users as $user)
                        <li>
                            <a href='/profile/{{$user->user_id}}'>{{$user->name}}</a>
                            @if(FollowingController::isFollowing($user->user_id)==null)
                                <a href='/following/{{$user->user_id}}'>Follow</a>
                            @else
                                <a href='/following/{{$user->user_id}}'>Unfollow</a>
                            @endif
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
