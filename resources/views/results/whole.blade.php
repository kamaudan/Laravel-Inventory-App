@extends('layouts.app')
@include("admin.adminnav")
@section("content")

<div class="well">


<h1 align="center">Wholesale Airtime</h1>

<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Branch</th>
        <th>Size</th>
        <th>Serial</th>
        <th>Price</th>
        <th>Card Balances</th>
        <th>Cash Submited</th>
        <th>Invoices</th>
        
        <th>Date</th>
        
</thead>
<tbody>
    @foreach($wholesales as $wholesale)
    <tr>
        <td>{{$wholesale-> id}}</td>
        <td>{{$wholesale-> branch}}</td>
        <td>{{$wholesale-> size}}</td>
        <td>{{$wholesale-> serial}}</td>
        <td>{{$wholesale-> price}}</td>
        <td>{{$wholesale-> Balances}}</td>
        <td>{{$wholesale-> cash}}</td>
        <td>{{$wholesale-> Invoice}}</td>
        
        <td>{{$wholesale-> created_at}}</td>

    </tr>
    @endforeach
</tbody>
</table>

</div>
    
@endsection








