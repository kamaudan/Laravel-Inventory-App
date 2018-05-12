@extends('layouts.app')
@include("admin.adminnav")
@section("content")


<div class="well">

<h1 align="center">Closing Balances</h1>

<table class="table table-striped">
    <thead>
        
        <th>id</th>
        <th>Closing Cash</th>
        <th>Closing Float</th>
       <th>Branch</th>
       <th>Date</th>
        
</thead>
<tbody>
    @foreach($closings as $closing)
    <tr>
        <td>{{$closing-> id}}</td>
        <td>{{$closing-> ccash}}</td>
        <td>{{$closing-> cfloat}}</td>
        <td>{{$closing-> branch}}</td>
        <td>{{$closing-> created_at}}</td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
    
@endsection








