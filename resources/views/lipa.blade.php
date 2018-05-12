
@extends('layouts.app')
@include('layouts.usernav')

@section("content")
<div class="container">
<div class="row">
<div class="well" align="center">
    <h1>Telfon EBU sales</h1>
    {!!Form::open(['action' => 'LipaController@store', 'method' => 'POST'])!!}
    <div class="form-group">
        {{ Form::label('branch', 'Branch') }} </br>
        {{Form::select('branch', ['Arusha' => 'Arusha', 'Tarino' => 'Tarino','Bata' => 'Bata','Family Dishes' => 'Family Dishes','National Bank' => 'National Bank','Trade Center' => 'Trade Center','EastMatt' => 'EastMatt','Chairman' => 'Chairman',
        'Stage' => 'Stage','Mlolongo' => 'Mlolongo','Simu poa' => 'Simu poa','Kisaju A' => 'Kisaju A','Kisaju B' => 'Kisaju B','Isinya A' => 'Isinya A','Isinya B' => 'Isinya B','Peponi' => 'Peponi','Forcenet' => 'Forcenet','Makadara' => 'Makadara','Karatina Main' => 'Karatina Main','Karatina A' => 'Karatina A','Karatina Tea Factory' => 'Karatina Tea Factory','Karatina B' => 'Karatina B'],null, ['placeholder' => 'Choose your branch  from the following list'])}}
    </div>
    <div class="form-group">
        {{ Form::label('till', 'Sales Provided') }}
        {{Form::text('till', '',['class' => 'form-control','placeholder'=> 'Enter till created'])}}
    </div>
    <div class="form-group">
        {{ Form::label('month', 'Month') }}
        {{Form::text('month', '',['class' => 'form-control','placeholder'=> 'Enter month the till was created'])}}
    </div>
    <div class="form-group">
        {{ Form::label('tillno', 'Number Of Sales') }}
        {{Form::text('tillno', '',['class' => 'form-control','placeholder'=> 'Enter the till number'])}}
    </div>
    
    <div>
        {{Form::submit('Save',['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
    
            </div>
        </div>
    </div>
@endsection