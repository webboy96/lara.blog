<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
           's'=>'required'
        ]);
        $s = $request->s;
        $articles = Post::where('title', 'LIKE', "%{$s}%")->paginate(2);
        $categoryList = Category::all();
        $tagList = Tag::all();
        $mostViewedPosts = Post::orderBy('views', 'desc')->get();
        return view('search.show', compact('articles','s', 'categoryList', 'tagList', 'mostViewedPosts' ));
    }
}
