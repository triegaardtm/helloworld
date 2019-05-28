@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Id</th>
                                <th>Price</th>
                            </tr>

                            @foreach($products as $product)
                                <tr>

                                    <td> {{ $product ->name }}</td>
                                    <td> {{ $product ->id }}</td>
                                    <td> {{ $product ->price }}</td>

                                </tr>

                            @endforeach
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


