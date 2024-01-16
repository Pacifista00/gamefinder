<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Favourite extends Model
{
    use HasFactory;
    public static function insertdb($gameid){
        $apiKey = 'e0b0792f5d714eb5a34335a2165cab9f'; // Ganti dengan API Key RAWG Anda
    
        $response = Http::get("https://api.rawg.io/api/games/$gameid?key=$apiKey");
    
        if ($response->successful()) {
            $result = $response->json();
            // Lakukan sesuatu dengan data yang Anda terima
        } else {
            // Penanganan kesalahan jika permintaan gagal
            return response()->json(['error' => 'Permintaan API gagal'], 500);
        }

        $existingData = DB::table('favourites')
        ->where('gameid', $gameid)
        ->first();
        if($existingData===null){
            $fav = new Favourite;
            $fav->title = $result["name"];
            $fav->gameid = $result["id"];
            $fav->save();
            echo("<script>
                    alert('Game berhasil ditambahkan kedalam favorit!');
                    window.location.href = '/favourite';
                </script>");
        }else{
            echo("<script>
                    alert('Game ini sudah masuk dalam favorit. Anda tidak dapat menambahkannya lagi!');
                    window.location.href = '/favourite';
                </script>");
        }
    }
    public static function deletedb($ttl){
        Favourite::where('title', $ttl)->delete();
        echo("<script>
                    alert('Game telah dihapus dari daftar favorit!');
                    window.location.href = '/favourite';
                </script>");
    }
}
