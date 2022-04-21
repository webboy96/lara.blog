<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->posts()->orderBy('id', 'desc')->paginate(2);
        $mostViewedPosts = Post::orderBy('views', 'desc')->limit(3)->get();
        $categoryList = Category::all();
        $tagList = Tag::all();
        return view('categories.show', compact('articles', 'category', 'categoryList', 'tagList','mostViewedPosts'));
    }
}
