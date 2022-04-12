<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Post::with('category')->orderBy('id', 'desc')->paginate(4);
        return view('articles.index', compact('articles'));
    }
    public function show($slug)
    {
        return view('articles.show');
    }
}
