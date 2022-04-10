<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }
    public function show()
    {
        //return view('posts.index');
    }
}
