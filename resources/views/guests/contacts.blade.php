@extends('layouts.app')


@section('content')
<div class="p-5 mb-4 bg-dark text-white">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Get in touch with Larabri</h1>
        <p class="col-md-8 fs-4">
            Contact us we will reply in a jiffy
        </p>
        <button class="btn btn-primary btn-lg" type="button">
            Get in touch
        </button>
    </div>
</div>

<div class="container py-5">
    <form action="#" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="Stanislav" />
            <small id="nameHelper" class="form-text text-muted">Write above your fullname</small>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Email</label>
            <input type="email" class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="stanislav@tryfenko.com" />
            <small id="nameHelper" class="form-text text-muted">Write above your fullname</small>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-dark">
            Submit
        </button>


    </form>
</div>


@endsection