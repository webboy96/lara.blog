<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index()
    {
        $comments =Comment::paginate(10);
        return view('admin.comments.index', compact('comments'));
    }
    public function create()
    {
        return view('admin.comments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'content'=>'required',
            'post_id'=>'required',
            'user_id'=>'required'
        ]);
        Comment::create($request->all());
        return redirect()->route('comments.index')->with('success', 'Комментарий добавлен успешно');
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        $user = $comment->users;
        $post = $comment->posts;
        //$comment = Comment::find($id);
        //$users = User::all();
        return view('admin.comments.edit', compact('comment', 'user', 'post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content'=>'required',
            'post_id'=>'required'
        ]);
        $comment = Comment::find($id);
        //$category->slug = null;
        $comment->update($request->all());
        return redirect()->route('comments.index')->with('success', 'Изменения сохранены');
    }

    public function destroy($id)
    {
        //$category = Category::find($id);
        //$category->delete();
        $comment = Comment::find($id);

        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Комментарий удален');

    }
}
