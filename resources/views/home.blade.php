@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3><b>Retrive  all Role belog with its Customer ID and Role ID:</b></h3>
                            <p>Combine roles and customer_role table </p>
                                   
                                <table class="table table-dark table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Role</th>
                                        <th>Customer_ID</th>
                                        <th>Role_ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($role as $ro)
                                    <tr>
                                        <td>{{$ro->id}}</td>
                                        <td>{{$ro->role}}</td>
                                        <td>{{$ro->pivot->customer_id}}</td>
                                        <td>{{$ro->pivot->role_id}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <br><hr>
                                
                    <h3><b>Retrive  all Customers belog to its roles:</b></h3>
                    <p>Combine customer and customer_role table </p>
                                <table class="table table-dark table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer Name</th>
                                        <th>Customer Email</th>
                                        <th>Customer Phone</th>
                                        <th>Job</th>
                                        <th>Role_ID</th>
                                        <th>Customer_ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customer as $cus)
                                    <tr>
                                        <td>{{$cus->id}}</td>
                                        <td>{{$cus->name}}</td>
                                        <td>{{$cus->email}}</td>
                                        <td>{{$cus->phone}}</td>
                                        <td>{{$cus->job}}</td>
                                        <td>{{$cus->pivot->role_id}}</td>
                                        <td>{{$cus->pivot->customer_id}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
