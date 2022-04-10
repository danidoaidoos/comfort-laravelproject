<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ProfileController extends Controller
{
    public function Index(){

        return view("layout.index");
            // ->with("posts",Post::orderBy("updated_at","Desc")->get());;}

    }
}