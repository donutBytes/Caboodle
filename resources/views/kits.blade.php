<?php
use App\Http\Controllers\FavoritesController;
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kits</div>
                <div class="panel-body">
                    @foreach($kits as $kit)
                        <a href='/kit/{{$kit->kit_id}}'>{{$kit->kit_name}}</a>
                        @if(FavoritesController::isFavorited($kit->kit_id)==null)
                            <a href='/favorites/{{$kit->kit_id}}'>Follow</a>
                        @else
                            <a href='/favorites/{{$kit->kit_id}}'>Unfollow</a>
                        @endif
                    </li>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
