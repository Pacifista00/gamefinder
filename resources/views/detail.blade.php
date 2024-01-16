
@extends('layouts/main')
@section('container')
<div class="card text-center mt-5">
    <div class="card-header">
        <h3>DETAIL</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ $data["background_image"] }}" class="card-img-top mb-3 object-fit-cover" alt="..." style="width:400px; height:250px;">
                <h3>{{ $data["name"] }}</h3>
                <div class="text-center my-3">
                    <a href="/detail/{{ $data["id"] }}" class="btn btn-info text-white">Tambah ke Favorit</a>
                </div>
            </div>
            <div class="col-md-7 text-start">
                <p class="card-text">Judul : {{ $data["name"] }}</p>
                <p class="card-text">Genre : 
                    @foreach ($data["genres"] as $index => $genre)
                        {{ $genre["name"] }}
                        @if ($index < count($data["genres"])-1)
                            ,
                        @endif
                    @endforeach
                </p>
                <p class="card-text">Tanggal rilis : {{ $data["released"] }}</p>
                <p class="card-text">Rating : {{ $data["rating"] }}</p>
                <p class="card-text">Deskripsi : {{ $data["description_raw"] }}</p>
            </div>
        </div>
        <div class="text-center my-3">
            <a href="/home" class="btn btn-danger">Go back</a>
        </div>
        
    </div>
</div>
@endsection