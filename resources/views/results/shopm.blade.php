@extends('layouts.app')
@include("admin.adminnav")

@section("content")

<div class="well">

<h1 align="center">Opening Balances</h1>
<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Opening Cash</th>
        <th>Opening Float</th>
        <th>Branch</th>
        <th>Date</th>
        
</thead>
<tbody>
    @foreach($shopms as $shopm)
    <tr>
        <td>{{$shopm-> id}}</td>
        <td>{{$shopm -> ocash}}</td>
        <td>{{$shopm-> ofloat}}</td>
        <td>{{$shopm-> branch}}</td>
        <td>{{$shopm-> created_at}}</td>
        
    </tr>
    @endforeach
</tbody>
</table>
</div>
    
@endsection








