@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{$user->name}}'s Kit: {{$kit->kit_name}}</b></div>
                <div class="panel-body">
                  <li><b>Kit Type: </b>{{$kit->kit_type}}</li>
                  <li><b>Kit Description: </b>{{$kit->description}}</li>
                </br>
                  <b>Items</b>
                  @foreach($items as $item)
                    <li><a href="/item/{{$item->kit_item_id}}">{{$item->name}}</li></a>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
