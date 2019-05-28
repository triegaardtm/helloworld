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
                        <form method="POST" action="/recipes">
                            @csrf

                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                            </tr>

                            @foreach($recipes as $recipe)

                                <tr>
                                    <td> {{ $recipe ->name }}</td>
                                    <input type="hidden" name="recipes[]" value="{{ $recipe->id }}">
                                    <td> <input type = 'text' name="quantities[]"></td>
                                </tr>

                            @endforeach


                            {{ $recipes->links() }}
                        </table>


                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>

                        </form>

                        <div class="links">
                            <a href="http://helloworld.test/ingredients/create">Submit</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


