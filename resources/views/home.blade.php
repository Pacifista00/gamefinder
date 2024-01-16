@extends('layouts/main')
@section('container')
<div class="row">
    <div class="col-md-6 searchForm text-center mx-auto mt-4">
      <form class="d-flex text-center" role="search">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>
      </form>
    </div>
</div>

<h1 class="mt-3">Games</h1>
<hr>
<div class="row">
    @foreach ($data["results"] as $item)
    <div class="col-md-3 mb-4">
        <div class="card">
            <img src="{{ $item["background_image"] }}" class="card-img-top object-fit-cover" alt="..." style="height: 300px;">
            <div class="card-body">
                <h5 class="card-title" style="height:70px;">{{ $item["name"] }}</h5>
                <p class="card-text">Rating : {{ $item["rating"] }}</p>
                <a href="/home/{{ $item["id"] }}" class="btn btn-danger">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection