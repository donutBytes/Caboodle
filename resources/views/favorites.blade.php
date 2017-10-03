@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Favorites</div>
                <div class="panel-body">
                  <b>Favorited Kits</b>
                  @if($kits->count()>0)
                  <ul class = "list-group">
                  @foreach($kits as $kit)
                    <li class = "list-group-item">
                        <a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</a>
                        <a type="button" style="float:right;" href="/favorites/{{$kit->kit_id}}" class="btn btn-primary btn-xs">Unfavorite</a>
                    </li>
                  @endforeach
                  </ul>
                  @else
              </br> You do not have any favorited kits.</br></br>
                  @endif
                  <b>Favorited Items</b>
                  @if($items->count()>0)
                  <ul class = "list-group">
                  @foreach($items as $item)
                    <li class = "list-group-item">
                        <a href="/item/{{$item->kit_item_id}}">{{$item->name}}</a>
                        <a type="button" style="float:right;" href="/favorites/{{$item->kit_item_id}}" class="btn btn-primary btn-xs">Unfavorite</a>
                    </li>
                  @endforeach
                  @else
              </br>You do not have any favorited items.
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
