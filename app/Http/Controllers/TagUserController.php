<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagUserController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $articles = $tag->posts()->orderBy('id', 'desc')->paginate(2);
        $categoryList = Category::all();
        $tagList = Tag::all();
        return view('tags.show', compact('articles', 'tag', 'categoryList', 'tagList'));
    }
}
