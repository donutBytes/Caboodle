@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b><a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</a> // {{$item->name}}</b></div>
                <div class="panel-body">
                    @if($user->user_id == Auth::user()->user_id)
                        Owned By: <a href="/userprofile">{{$user->name}}</a>
                    @else
                        Owned By: <a href="/profile/{{$user->user_id}}">{{$user->name}}</a>
                    @endif
                    <li><b>Description: </b>{{$item->description}}</li>
                    <li><b>Condition: </b>{{$item->condition}}</li>
                    <li><b>Cost: </b>${{$item->cost}}</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
