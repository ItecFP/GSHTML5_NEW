<?php

namespace App\Models;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    public static function getTag($name)
    {
        return Tag::where("Name", "=", $name)->first();
    }
    public static function getAllTags()
    {
        return Tag::all();
    }
    public static function getAllCategories()
    {
        $documents = Tag::get(['Category'])
        ->groupBy(['Category'])
        ->all();

        $categories = array_keys($documents);

        $result = [];
        foreach ($categories as $value) {
            array_push($result, [
                "nombre" => $value,
                "url" => "/categoria/$value"
            ]);
        }
        return $result;
    }

    public static function getCategory($category = "")
    {
        return Tag::where('categoria', '=', $category)->get();
    }


    public static function search(Request $request)
    {
        $nombreCampo = $request->input("nombreCampo", "nombre");
        $busqueda = $request->input("busqueda", "");

        return Tag::where($nombreCampo, "like", "%$busqueda%")->get();
    }
}
