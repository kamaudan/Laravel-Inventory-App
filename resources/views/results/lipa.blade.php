@extends('layouts.app')
@include("admin.adminnav")

@section("content")

<div class="well">
<h1 align="center">EBU Sale</h1>

<table class="table table-striped">
	<thead>
		<th>Id</th>
		<th>Sales Provided</th>
		<th>Number of Sales</th>
		<th>Date</th>
		<th>Branch</th>
		
</thead>
<tbody>
	@foreach($lipas as $lipa)
	<tr>
		<td>{{$lipa-> id}}</td>
		<td>{{$lipa-> TillsCreated}}</td>
		<td>{{$lipa-> TillNo}}</td>
		<td>{{$lipa-> created_at}}</td>
		<td>{{$lipa-> branch}}</td>

	</tr>
	@endforeach
</tbody>
</table>

</div>
    
@endsection



