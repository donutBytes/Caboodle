@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Followed Users</div>
                <div class="panel-body">
                    @if($users->count()>0)
                    <ul class="list-group">
                        @foreach($users as $user)
                            <li class="list-group-item">
                                <a href="/profile/{{$user->user_id}}">{{$user->name}}</a>
                                <a type="button" style="float:right;" href="/following/{{$user->user_id}}" class="btn btn-primary btn-xs">Unfollow</a>
                            </li>
                        @endforeach
                    </ul>
                    @else
                        You are not following anybody.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
