<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required',
            'post_id'=>'required',
            'user_id'=>'required'
        ]);
        Comment::create($request->all());
        return redirect()->back()->with('success', 'Статья добавлена');
    }
}
