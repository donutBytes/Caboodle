@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>
                <div class="panel-body">
                    <li><b>Username:</b> {{$user->name}}</li>
                    <li><b>E-mail:</b> {{$user->email}}</li>
                </br>
                    <b>Kits</b>
                    @foreach($kits as $kit)
                        <li><a href='/kit/{{$kit->kit_id}}'>{{$kit->kit_name}}</a></li>
                    @endforeach
                </br>
                    <a type="button" href='/createKit' class="btn btn-primary btn-xs">Create New Kit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
