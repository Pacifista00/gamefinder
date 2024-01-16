<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rawg;
use App\Models\Favourite;

class DetailController extends Controller
{
    public static function insertdb($id){
        Favourite::insertdb($id);
    }
}
