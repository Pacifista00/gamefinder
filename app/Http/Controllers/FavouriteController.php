<?php

namespace App\Http\Controllers;

use App\Models\Rawg;
use Illuminate\Http\Request;
use App\Models\Favourite;

class FavouriteController extends Controller
{
    public static function index(){
        return view('favourite',[
            "title"=>"Favourite",
            "favlist"=> Favourite::all(),
            "genres" => Rawg::getRawgGenres()
        ]);
    }
    public static function deletedb($title){
        Favourite::deletedb($title);
    }
}
