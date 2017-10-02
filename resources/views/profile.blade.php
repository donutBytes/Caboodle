<?php
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\FollowingController;
      ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->name}}'s Profile </div>
                <div class="panel-body">
                    @if(FollowingController::isFollowing($user->user_id)==null)
                        <a type="button" href='/following/{{$user->user_id}}' class="btn btn-primary btn-xs">Follow</a>
                    @else
                        <a type="button" href='/following/{{$user->user_id}}' class="btn btn-primary btn-xs">Unfollow</a>
                    @endif
                  <li><b>E-mail: </b>{{$user->email}}</li>
                </br>
                  <b>Kits</b>
                  @if($kits->count()>0)
                    @foreach($kits as $kit)
                      <li>
                          <a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</a>
                          @if(FavoritesController::isFavorited($kit->kit_id)!=null)
                            <a href="/favorites/{{$kit->kit_id}}">Unfavorite</a>
                          @else
                            <a href="/favorites/{{$kit->kit_id}}">Favorite</a>
                          @endif
                      </li>
                    @endforeach
                  @else
                    <li>User does not have any kits</li>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
