@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Kits</div>
                  <div class="panel-body">
                    @foreach($kits as $kit)
                      <li>{{$kit->kit_name}}</li>
                    @endforeach
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
