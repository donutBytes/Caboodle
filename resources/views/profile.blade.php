@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$user->name}}'s Profile </div>
                <div class="panel-body">
                  <li><b>E-mail: </b>{{$user->email}}</li>
                </br>
                  <b>Kits</b>
                  @if($kits->count()>0)
                    @foreach($kits as $kit)
                      <li>
                          <a href="/kit/{{$kit->kit_id}}">{{$kit->kit_name}}</a>
                      </li>
                    @endforeach
                  @else
                    <li>User does not have any kits</li>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
