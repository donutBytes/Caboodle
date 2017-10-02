@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Kits</div>
                  <div class="panel-body">
                    @foreach($kits as $kit)
                      <li><a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</li></a>
                    @endforeach
                      <a href='/createKit'>Create New Kit</a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
