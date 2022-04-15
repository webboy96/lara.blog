<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Post::with('category')->orderBy('id', 'desc')->paginate(4);
        $categoryList = Category::all();
        //$categoryCount = Category::all->posts()->count();
        $tagList = Tag::all();
        $mostViewedPosts = Post::orderBy('views', 'desc')->get();
        return view('articles.index', compact('articles', 'categoryList', 'tagList','mostViewedPosts'));
    }
    public function show($slug)
    {
        $articles = Post::where('slug', $slug)->firstOrFail();
        $articles->views += 1;
        $articles->update();
        $categoryList = Category::all();
        $tagList = Tag::all();
        $mostViewedPosts = Post::orderBy('views', 'desc')->limit(3)->get();
        return view('articles.show', compact('articles', 'categoryList', 'tagList','mostViewedPosts'));
    }
}
