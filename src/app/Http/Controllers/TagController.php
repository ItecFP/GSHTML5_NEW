<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function getCategories()
    {
        return view("index", ["categorias" => tag::getAllCategories()]);
    }

    public function getTag($name)
    {
        return view("tagDetail", [ "tagdata" => Tag::getTag($name)]);
    }

    public function getTagCategory($category)
    {
        //return view("tagCategory",["tags"=>Tag::getCategory($category)]);
    }
}
