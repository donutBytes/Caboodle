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

input[type=submitKit] {
    background-color: #D3D3D3 ;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submitKit]:hover {
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
                <div class="panel-heading">Create Kit</div>
                  <!-- kit name, kit type, description -->
                <div class="panel-body">
                    <form name="newKit">
                      <label for="kitName">Kit Name:</label>
                      <input type="text" id="kitName" name="kitname" placeholder="Ex: Yu-Gi-Oh Collection">
                      <label for="kitType">Kit Type:</label>
                      <input type="text" id="kitType" name="kittype" placeholder="Ex: Trading Cards">
                      <label for="kitDescription">Kit Description:</label>
                      <textarea id="kitDescription" name="kitDescription" placeholder="Ex: Yu-Gi-Oh cards I have collected over the years" style="height:200px"></textarea>
                      <input type="submitKit" value="Create New Kit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
