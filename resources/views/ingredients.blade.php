@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingredient List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                            </tr>

                            @foreach($ingredients as $ingredient)
                                <tr>

                                    <td> {{ $ingredient ->name }}</td>
                                    <td> {{ $ingredient ->ing_type->name ?? ''}}</td>
                                </tr>

                            @endforeach


                            {{ $ingredients->links() }}
                        </table>

                        <div class="links">
                            <a href="http://helloworld.test/ingredients/create">Add New Ingredient</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


