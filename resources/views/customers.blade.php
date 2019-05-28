@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Value</th>
                                <th>City</th>
                            </tr>

                            @foreach($customers as $customer)
                                <tr>

                                    <td> {{ $customer ->name }}</td>
                                    <td> {{ $customer ->email }}</td>
                                    <td> {{ $customer ->value }}</td>
                                    <td> {{ $customer ->city->name ?? ''}}</td>
                                </tr>

                            @endforeach


                            {{ $customers->links() }}
                        </table>

                        <div class="links">
                            <a href="http://helloworld.test/customers/create">Add New Customer</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


