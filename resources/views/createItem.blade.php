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

.container {
    border-radius: 30px;
    padding: 40px;
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
                    <form name="newItem">
                      <label for="itemName">Item Name</label>
                      <input type="text" id="itemName" name="itemname" placeholder="Ex: New York Snowglobe">
                      <label for="itemCost">Item Cost</label>
                      <input type="text" id="itemCost" name="itemcost" placeholder="Ex: $35.00">
                      <label for="condition">Item Condition</label>
                      <select id="itemCondition" name="itemcondition">
                        <option value="excellent">Excellent</option>
                        <option value="great">Great</option>
                        <option value="good">Good</option>
                        <option value="fair">Fair</option>
                        <option value="poor">Poor</option>
                      </select>
                      <label for="itemDescription">Item Description</label>
                      <textarea id="itemDescription" name="itemDescription" placeholder="Ex: Bought @ New York" style="height:200px"></textarea>
                      <input type="submitItem" value="Create New Item">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
