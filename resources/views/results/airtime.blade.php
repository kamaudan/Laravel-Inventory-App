@extends('layouts.app')
@include("admin.adminnav")

@section("content")
<div class="well">

<h1 align="center">Lines Activated</h1>

<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Mpesa Lines</th>
        <th>Activated Lines</th>
        <th>Serial Number</th>
        <th>Branch</th>
        <th>Date</th>
        
</thead>
<tbody>
    @foreach($airtimes as $airtime)
    <tr>
        <td>{{$airtime-> id}}</td>
        <td>{{$airtime-> mpesa}}</td>
        <td>{{$airtime-> Activated}}</td>
        <td>{{$airtime-> serialnumber}}</td>
        <td>{{$airtime-> branch}}</td>
        <td>{{$airtime-> created_at}}</td>
        

    </tr>
    @endforeach
</tbody>
</table>
</div>
    
@endsection








