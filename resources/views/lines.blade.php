
@extends('layouts.app')
@include('layouts.usernav')

@section("content")
<div class="container">
<div class="row  col-sm-6">
<div class="well" align="center">
    <h1> Retail Airtime</h1>
    {!!Form::open(['action' => 'CardsController@store', 'method' => 'POST'])!!}
    
    <div class="form-group">
        {{ Form::label('branch', 'Branch') }} </br>
        {{Form::select('branch', ['Arusha' => 'Arusha', 'Tarino' => 'Tarino','Bata' => 'Bata','Family Dishes' => 'Family Dishes','National Bank' => 'National Bank','Trade Center' => 'Trade Center','EastMatt' => 'EastMatt','Chairman' => 'Chairman',
        'Stage' => 'Stage','Mlolongo' => 'Mlolongo','Simu poa' => 'Simu poa','Kisaju A' => 'Kisaju A','Kisaju B' => 'Kisaju B','Isinya A' => 'Isinya A','Isinya B' => 'Isinya B','Peponi' => 'Peponi','Forcenet' => 'Forcenet','Makadara' => 'Makadara','Karatina Main' => 'Karatina Main','Karatina A' => 'Karatina A','Karatina Tea Factory' => 'Karatina Tea Factory','Karatina B' => 'Karatina B'],null, ['placeholder' => 'Choose your branch  from the following list'])}}
    </div>
    <div class="form-group">
        {{ Form::label('size', 'Amount') }} <br>
        {{Form::select('size', ['Bamba 1000' => 'Bamba 1000','Bamba 500' => 'Bamba 500','Bamba 250' => 'Bamba 250','Bamba 100' => 'Bamba 100','Bamba 50' => 'Bamba 50', 'Bamba 20' => 'Bamba 20', 'Bamba 10' => 'Bamba 10'], null, ['placeholder' => 'Choose the Bamba amount from this list'])}}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{Form::text('price', '',['class' => 'form-control','placeholder'=> 'Enter the price '])}}
    </div>
    <div class="form-group">
        {{ Form::label('serial', 'Serial') }}
        {{Form::text('serial', '',['class' => 'form-control','placeholder'=> 'Enter serial number'])}}
    </div>
    <div class="form-group">
        {{ Form::label('balances', 'Card Balances') }}
        {{Form::text('balances', '',['class' => 'form-control','placeholder'=> 'Enter the Card Balances'])}}
    </div>
    
    <div class="form-group">
        {{ Form::label('cash', 'Cash Submited') }}
        {{Form::text('cash', '',['class' => 'form-control','placeholder'=> 'Enter the Cash submitted'])}}
    </div>
    <div class="form-group">
        {{ Form::label('invoice', 'Invoices') }}
        {{Form::text('invoice', '',['class' => 'form-control','placeholder'=> 'Enter the invoices'])}}
    </div>
    
    
    
    
    <div>
        {{Form::submit('Save',['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
   
                
            </div>
        </div>
    


   
<div class="row  col-sm-6">
<div class="well" align="center">
    <h1>Wholesale Airtime</h1>
    {!!Form::open(['action' => 'WholeController@store', 'method' => 'POST'])!!}
    
    <div class="form-group col-md-12">
        {{ Form::label('branch', 'Branch') }} </br>
        {{Form::select('branch', ['Arusha' => 'Arusha', 'Tarino' => 'Tarino','Bata' => 'Bata','Family Dishes' => 'Family Dishes','National Bank' => 'National Bank','Trade Center' => 'Trade Center','EastMatt' => 'EastMatt','Chairman' => 'Chairman',
        'Stage' => 'Stage','Mlolongo' => 'Mlolongo','Simu poa' => 'Simu poa','Kisaju A' => 'Kisaju A','Kisaju B' => 'Kisaju B','Isinya A' => 'Isinya A','Isinya B' => 'Isinya B','Peponi' => 'Peponi','Forcenet' => 'Forcenet','Makadara' => 'Makadara','Karatina Main' => 'Karatina Main','Karatina A' => 'Karatina A','Karatina Tea Factory' => 'Karatina Tea Factory','Karatina B' => 'Karatina B'],null, ['placeholder' => 'Choose your branch  from the following list'])}}
    </div>
     <div class="form-group">
        {{ Form::label('size', 'Amount') }} <br>
        {{Form::select('size', ['Bamba 1000' => 'Bamba 1000','Bamba 500' => 'Bamba 500','Bamba 250' => 'Bamba 250','Bamba 100' => 'Bamba 100','Bamba 50' => 'Bamba 50', 'Bamba 20' => 'Bamba 20', 'Bamba 10' => 'Bamba 10'], null, ['placeholder' => 'Choose the Bamba amount from this list'])}}
    </div>
     <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{Form::text('price', '',['class' => 'form-control','placeholder'=> 'Enter the price '])}}
    </div>
    <div class="form-group">
        {{ Form::label('serial', 'Serial') }}
        {{Form::text('serial', '',['class' => 'form-control','placeholder'=> 'Enter serial number'])}}
    </div>
    
    
    <div class="form-group">
        {{ Form::label('balances', 'Card Balances') }}
        {{Form::text('balances', '',['class' => 'form-control','placeholder'=> 'Enter the Card Balances'])}}
    </div>
    
    <div class="form-group">
        {{ Form::label('cash', 'Cash Submited') }}
        {{Form::text('cash', '',['class' => 'form-control','placeholder'=> 'Enter the Cash submitted'])}}
    </div>
    <div class="form-group">
        {{ Form::label('invoice', 'Invoices') }}
        {{Form::text('invoice', '',['class' => 'form-control','placeholder'=> 'Enter the invoices'])}}
    </div>
    
    
   
    <div>
        {{Form::submit('Save',['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
   
                
            </div>
        </div>
    </div>
@endsection