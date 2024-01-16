@extends('layouts/main')
@section('container')
<h1 class="mt-3">Daftar Game Favorit</h1>
<hr>
<table class="text-center table table-dark table-responsive">
    <thead>
      <tr>
        <th scope="col">Judul Game</th>
        <th scope="col">Tanggal Ditambahkan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @if(count($favlist) == 0)
            <tr>
                <td colspan="3">Data tidak ada</td>
            </tr>
        @else
          @foreach ($favlist as $item)
              
          <tr>
            <td>{{ $item["title"] }}</td>
            <td>{{ $item["created_at"] }}</td>
            <td>
              <a href="/home/{{ $item["gameid"] }}" class="btn btn-info text-white">Detail</a>
              <a href="/favourite/delete/{{ $item["title"] }}" class="btn btn-danger text-white">Hapus dari Favorit</a>
            </td>
          </tr>
          
          @endforeach
        @endif
    </tbody>
  </table>
@endsection