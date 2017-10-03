@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>
                @if($user->user_id == Auth::user()->user_id)
                    <a href="/userprofile">{{$user->name}}</a>
                @else
                    <a href="/profile/{{$user->user_id}}">{{$user->name}}</a>
                @endif
                // <a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</a> // {{$item->name}}
            </b></div>
                <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item"><b>Description:   </b>{{$item->description}}</li>
                    <li class="list-group-item"><b>Producer:      </b>{{$genericItem->producer}}</li>
                    <li class="list-group-item"><b>Date Released: </b>{{$genericItem->date_released}}</li>
                    <li class="list-group-item"><b>Condition:     </b>{{$item->condition}}</li>
                    <li class="list-group-item"><b>Cost:          </b>${{$item->cost}}</li>

                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
