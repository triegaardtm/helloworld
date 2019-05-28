@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recipe List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                            </tr>

                            @foreach($recipes as $recipe)
                                <tr>

                                    <td> {{ $recipe ->name }}</td>
                                </tr>

                            @endforeach


                            {{ $recipe->links() }}
                        </table>

                        <div class="links">
                            <a href="http://helloworld.test/ingredients/create">Add New Recipe</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


