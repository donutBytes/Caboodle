@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Favorites</div>
                <div class="panel-body">
                  Favorited Kits
                  @foreach($kits as $kit)
                    <li>
                        <a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</a>
                        <a href="/favorites/{{$kit->kit_id}}">Unfavorite</a>
                    </li>
                    Favorited Items
                  @endforeach
                  @foreach($items as $item)
                    <li>
                        <a href="/item/{{$item->kit_item_id}}">{{$item->name}}</a>
                        <a href="/favorites/{{$item->kit_item_id}}">Unfavorite</a>    
                    </li>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
