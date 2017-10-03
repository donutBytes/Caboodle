@extends('layouts.app')
<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
    margin-top: 15px;
    margin-bottom: 15px;
    resize: vertical;
}

input[type=submitItem] {
    background-color: #D3D3D3 ;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submitItem]:hover {
    background-color: #808080 ;
}
</style>
</head>
@section('content')
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Item</div>
                <!-- name,condition,cost,description, producer, date released (YYYY-MM-DD) -->
                <div class="panel-body">
                    <form name="newItem" method="POST" action="{{ route('createItem',['kit_id' => $kit_id]) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <label for="name">Item Name</label>
                        <input type="text" id="name" name="name">
                        <label for="producer">Item Producer</label>
                        <input type="text" id="producer" name="producer">
                        <label for="cost">Date of Release</label>
                        <input type="text" id="date_released" name="date_released" placeholder="YYYY-MM-DD">
                        <label for="cost">Item Cost</label>
                        <input type="text" id="cost" name="cost" placeholder="Enter a whole number">
                        <label for="condition">Item Condition</label>
                        <select id="condition" name="condition">
                            <option value="excellent">Excellent</option>
                            <option value="great">Great</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="poor">Poor</option>
                        </select>
                        <label for="description">Item Description</label>
                        <textarea id="description" name="description" style="height:200px"></textarea>
                    </br></br>
                        <button type="submit" class="btn btn-primary">
                            Create New Item
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
