@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>
                <div class="panel-body">
                    <b>Username:</b> {{$user->name}} </br>
                    <b>E-mail:</b> {{$user->email}} </br>
                </br>
                    <b>Kits</b>
                    @if($kits->count()>0)
                    <ul class = "list-group">
                    @foreach($kits as $kit)
                        <li class="list-group-item">
                            <a href='/kit/{{$kit->kit_id}}'>{{$kit->kit_name}}</a>
                            <a href='/kit/{{$kit->kit_id}}/delete' type="button" style="float:right;" class="btn btn-primary btn-xs">Delete Kit</a>
                        </li>
                    @endforeach
                    </ul>
                    @else
                </br>You do not have any kits.</br>
                    @endif
                    <a type="button" href='/newKit' class="btn btn-primary btn-xs">Create New Kit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
