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
                        <a type="button"  href='/following/{{$user->user_id}}' class="btn btn-primary btn-xs">Unfollow</a>
                    @endif
                </br><b>E-mail: </b>{{$user->email}}
            </br></br>
                  <b>Kits</b>
                  <ul class="list-group">
                  @if($kits->count()>0)
                    @foreach($kits as $kit)
                      <li class="list-group-item">
                          <a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</a>
                          @if(FavoritesController::isFavorited($kit->kit_id)!=null)
                            <a type="button" style="float:right;" href="/favorites/{{$kit->kit_id}}" class="btn btn-primary btn-xs">Unfavorite</a>
                          @else
                            <a type="button" style="float:right;" href="/favorites/{{$kit->kit_id}}" class="btn btn-primary btn-xs">Favorite</a>
                          @endif
                      </li>
                    @endforeach
                </ul>
                  @else
                    <li>User does not have any kits</li>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
