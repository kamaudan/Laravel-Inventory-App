
@extends('layouts.app')
@include("admin.adminnav")
@section("content")


<div class="container">
<div class="row">
<div class="well" align="center">
    <h1 align="center"> Enter Phone Inventory</h1>
    {!!Form::open(['action' => 'AdminController@store', 'method' => 'POST'])!!}
    <div class="form-group">
        {{ Form::label('branch', 'Branch') }} </br>
        {{Form::select('branch', ['Arusha' => 'Arusha', 'Tarino' => 'Tarino','Bata' => 'Bata','Family Dishes' => 'Family Dishes','National Bank' => 'National Bank','Trade Center' => 'Trade Center','EastMatt' => 'EastMatt','Chairman' => 'Chairman',
        'Stage' => 'Stage','Mlolongo' => 'Mlolongo','Simu poa' => 'Simu poa','Kisaju A' => 'Kisaju A','Kisaju B' => 'Kisaju B','Isinya A' => 'Isinya A','Isinya B' => 'Isinya B','Peponi' => 'Peponi','Forcenet' => 'Forcenet','Makadara' => 'Makadara','Karatina Main' => 'Karatina Main','Karatina A' => 'Karatina A','Karatina Tea Factory' => 'Karatina Tea Factory','Karatina B' => 'Karatina B'],null, ['placeholder' => 'Choose your branch  from the following list'])}}
    </div>

     <div class="form-group">
        {{ Form::label('type', 'Type') }}
        {{Form::text('type', '',['class' => 'form-control','placeholder'=> 'Enter the type of the phone'])}}
    </div>
   
    <div class="form-group">
        {{ Form::label('model ', 'Model') }}
        {{Form::text('model', '',['class' => 'form-control','placeholder'=> 'Enter Phone Model'])}}
    </div>
    <div class="form-group">
        {{ Form::label('serial', 'Serial') }}
        {{Form::text('serial', '',['class' => 'form-control','placeholder'=> 'Enter serial number'])}}
    </div>
    <div>
        
        {{Form::submit('Save',['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
    </div>

</div>
</div>

@endsection
