<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id) {
        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->message = $request->message;
        $comment->room_id = $id;
        $comment->save();
        return $comment;
    }

    public function list($id) {
        $comment = Comment::query()->with('user')->where('room_id', $id)->get();
        return $comment;
    }
}
