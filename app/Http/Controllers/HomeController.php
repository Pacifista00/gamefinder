<?php

namespace App\Http\Controllers;
use App\Models\Rawg;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->search){
            $keyword = $request->search;
            return view('home',[
                "title" => "Home",
                "data" => Rawg::getRawgSearch($keyword),
                "genres" => Rawg::getRawgGenres()
            ]);
        }else{
            return view('home',[
                "title" => "Home",
                "data" => Rawg::getRawg(),
                "genres" => Rawg::getRawgGenres()
            ]);
        }
    }
    public function detail($id){
        return view('detail',[
            "title" => "Detail",
            "data" => Rawg::getRawgDetail($id),
            "genres" => Rawg::getRawgGenres()
        ]);
    }
}
