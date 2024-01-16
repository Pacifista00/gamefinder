@extends('layouts/main')
@section('container')
    <h1 class="mt-3">Games</h1>
    <hr>
    
<div class="row">
    @foreach ($data["results"] as $gamegenre)
    <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ $gamegenre["background_image"] }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="/home/{{ $gamegenre["id"] }}"><h5 class="card-title">{{ $gamegenre["name"] }}</h5></a>
                  <p class="card-text">Tanggal rilis : {{ $gamegenre["released"] }}</p>
                  <p class="card-text">Genre : 
                    @foreach ($gamegenre["genres"] as $index => $genre)
                        {{ $genre["name"] }}
                        @if ($index < count($gamegenre["genres"])-1)
                            ,
                        @endif
                    @endforeach
                  </p>
                  
                </div>
              </div>
            </div>
        </div>
    </div>
    
    @endforeach
</div>

@endsection