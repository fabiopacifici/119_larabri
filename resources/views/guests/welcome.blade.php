@extends('layouts.app')


@section('content')

<div class="p-5 mb-4 bg-dark text-white">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to Larabri</h1>
        <p class="col-md-8 fs-4">
            Best books ever Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi explicabo eum esse, sapiente repellat vel facere tempore placeat deleniti ipsum dicta atque necessitatibus quidem blanditiis at aut recusandae, odio harum.
        </p>
        <button class="btn btn-primary btn-lg" type="button">
            Find out more
        </button>
    </div>
</div>


<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @forelse ($books as $book )

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        {{$book->title}}
                    </h3>
                    <p>{{$book->plot}}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>No books here, sorry 😢</p>
        </div>
        @endforelse

    </div>
</div>




@endsection