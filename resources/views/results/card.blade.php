@extends('layouts.app')
@include("admin.adminnav")
@section("content")

<div class="well">

<h1 align="center">Retail Airtime</h1>

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
    @foreach($cards as $card)
    <tr>
        <td>{{$card-> id}}</td>
        <td>{{$card-> branch}}</td>
        <td>{{$card-> size}}</td>
        <td>{{$card-> serial}}</td>
        <td>{{$card-> price}}</td>
        <td>{{$card-> Balances}}</td>
        <td>{{$card-> cash}}</td>
        <td>{{$card-> Invoice}}</td>
        
        <td>{{$card-> created_at}}</td>

    </tr>
    @endforeach
</tbody>
</table>
</div>
    
@endsection








