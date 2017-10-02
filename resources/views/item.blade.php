@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{$user->name}}'s Item from kit "{{$kit->kit_name}}": {{$item->name}}</b></div>
                <div class="panel-body">
                    <li><b>Description: </b>{{$item->description}}</li>
                    <li><b>Condition: </b>{{$item->condition}}</li>
                    <li><b>Cost: </b>${{$item->cost}}</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
