<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Rawg extends Model
{
    use HasFactory;
    public static function getRawg(){
        $apiKey = 'e0b0792f5d714eb5a34335a2165cab9f'; // Ganti dengan API Key RAWG Anda

        $response = Http::get("https://api.rawg.io/api/games?key=$apiKey&dates=2023-01-01,2023-10-10&page_size=8");

        if ($response->successful()) {
            $data = $response->json();
            // Lakukan sesuatu dengan data yang Anda terima
            return $data;
        } else {
            // Penanganan kesalahan jika permintaan gagal
            return response()->json(['error' => 'Permintaan API gagal'], 500);
        }
    }
    public static function getRawgDetail($id){
        $apiKey = 'e0b0792f5d714eb5a34335a2165cab9f'; // Ganti dengan API Key RAWG Anda
    
        $response = Http::get("https://api.rawg.io/api/games/$id?key=$apiKey");
    
        if ($response->successful()) {
            $data = $response->json();
            // Lakukan sesuatu dengan data yang Anda terima
            return $data;
        } else {
            // Penanganan kesalahan jika permintaan gagal
            return response()->json(['error' => 'Permintaan API gagal'], 500);
        }
    }
    public static function getRawgSearch($keyword){
        $apiKey = 'e0b0792f5d714eb5a34335a2165cab9f'; // Ganti dengan API Key RAWG Anda
    
        $response = Http::get("https://api.rawg.io/api/games?key=$apiKey&search=$keyword");
        
        if ($response->successful()) {
            $data = $response->json();
            // Lakukan sesuatu dengan data yang Anda terima
            return $data;
        } else {
            // Penanganan kesalahan jika permintaan gagal
            return response()->json(['error' => 'Permintaan API gagal'], 500);
        }
    }
    public static function getRawgGenres(){
        $apiKey = 'e0b0792f5d714eb5a34335a2165cab9f'; // Ganti dengan API Key RAWG Anda
    
        $response = Http::get("https://api.rawg.io/api/genres?key=$apiKey");
        
        if ($response->successful()) {
            $data = $response->json();
            // Lakukan sesuatu dengan data yang Anda terima
            return $data;
        } else {
            // Penanganan kesalahan jika permintaan gagal
            return response()->json(['error' => 'Permintaan API gagal'], 500);
        }
    }
    public static function getRawgGameWithGenre($id){
        $apiKey = 'e0b0792f5d714eb5a34335a2165cab9f'; // Ganti dengan API Key RAWG Anda
    
        $response = Http::get("https://api.rawg.io/api/games?key=$apiKey&genres=$id");
        
        if ($response->successful()) {
            $data = $response->json();
            // Lakukan sesuatu dengan data yang Anda terima
            return $data;
        } else {
            // Penanganan kesalahan jika permintaan gagal
            return response()->json(['error' => 'Permintaan API gagal'], 500);
        }
    }

}
