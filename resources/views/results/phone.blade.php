@extends('layouts.app')
@include("admin.adminnav")
@section("content")

<div class="well">

<h1 align="center">Phones</h1>

<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Branch</th>
        <th>Model</th>
        <th>Price</th>
        <th>Date</th>
        
</thead>
<tbody>
    @foreach($phones as $phone)
    <tr>
        <td>{{$phone-> id}}</td>
        <td>{{$phone-> branch}}</td>
        <td>{{$phone-> model}}</td>
        <td>{{$phone-> price}}</td>
        <td>{{$phone-> created_at}}</td>
       
        

    </tr>
    @endforeach
</tbody>
</table>
</div>
    
@endsection








