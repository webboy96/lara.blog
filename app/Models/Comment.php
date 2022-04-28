<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'user_id', 'post_id'];
    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function posts()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }
}
