@extends("layouts/app")
@include("admin.adminnav")

@section("content")



<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>Branch</th>
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
        <td>{{$card-> Balances}}</td>
        <td>{{$$card-> cash}}</td>
        <td>{{$card-> Invoice}}</td>
        <td>{{$card-> created_at}}</td>

    </tr>
    @endforeach
</tbody>
</table>
    
@endsection

