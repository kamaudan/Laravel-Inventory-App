@extends('layouts.app')
@include("admin.adminnav")

@section("content")


<div class="well">
<h1 align="center">Phone Inventory</h1>

<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Branch</th>
        <th>Phone type</th>
        <th>Model</th>
        <th>Serial</th>
        <th>Date</th>
        
</thead>
<tbody>
    @foreach($admins as $admin)
    <tr>
        <td>{{$admin-> id}}</td>
        <td>{{$admin-> branch}}</td>
        <td>{{$admin-> type}}</td>
        <td>{{$admin-> model}}</td>
        <td>{{$admin-> serial}}</td>
        <td>{{$admin-> created_at}}</td>
       
        

    </tr>
    @endforeach
</tbody>
</table>
</div>
    
@endsection


