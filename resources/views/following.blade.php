@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Followed Users</div>
                <div class="panel-body">
                  @foreach($users as $user)
                    <li><a href="/profile/{{$user->user_id}}">{{$user->name}}</a></li>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
