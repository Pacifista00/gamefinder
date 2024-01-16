<?php

namespace App\Http\Controllers;
use App\Models\Rawg;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    public function index($genreId){
        return view('gameGenre',[
            "title" => "Games",
            "data" => Rawg::getRawgGameWithGenre($genreId),
            "genres" => Rawg::getRawgGenres()
        ]);
    }
}
