<?php
use App\Http\Controllers\FavoritesController;
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if(Auth::user()->user_id!=$user->user_id)
                    <b><a href="/profile/{{$user->user_id}}">{{$user->name}}</a> // {{$kit->kit_name}}</b>
                    @else
                    <b><a href="/userprofile">{{$user->name}}</a> // {{$kit->kit_name}}</b>
                    @endif
                    </div>
                <div class="panel-body">
                  <li><b>Kit Type: </b>{{$kit->kit_type}}</li>
                  <li><b>Kit Description: </b>{{$kit->description}}</li>
                </br>
                  <b>Items</b>
                  @foreach($items as $item)
                    <li>
                        <a href="/item/{{$item->kit_item_id}}">{{$item->name}}</a>
                        @if(Auth::user()->user_id != $kit->user_id)
                            @if(FavoritesController::isFavorited($item->kit_item_id)!=null)
                              <a type="button" href="/favorites/{{$item->kit_item_id}}" class="btn btn-primary btn-xs">Unfavorite</a>
                            @else
                              <a type="button" href="/favorites/{{$item->kit_item_id}}" class="btn btn-primary btn-xs">Favorite</a>
                            @endif
                        @endif
                    </li>
                  @endforeach
                  @if($kit->user_id == Auth::user()->user_id)
              </br>
                    <a type="button" href="/kit/{{$kit->kit_id}}/newItem" class="btn btn-primary btn-xs">Add Item</a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
