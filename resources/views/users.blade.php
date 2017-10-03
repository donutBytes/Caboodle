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
                    <ul class = "list-group">
                    @foreach($users as $user)
                        <li class = "list-group-item">
                            <a href='/profile/{{$user->user_id}}'>{{$user->name}}</a>
                            @if(FollowingController::isFollowing($user->user_id)==null)
                                <a type="button" style="float:right;" href='/following/{{$user->user_id}}' class="btn btn-primary btn-xs">Follow</a>
                            @else
                                <a type="button" style="float:right;" href='/following/{{$user->user_id}}' class="btn btn-primary btn-xs">Unfollow</a>
                            @endif
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
