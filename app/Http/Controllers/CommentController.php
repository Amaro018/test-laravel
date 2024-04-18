<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea)
    {
        $comment = new Comment();
        $comment->idea_id = $idea->id;
        $comment->user_id = auth()->user()->id;
        $comment->comment = request()->get("comment");
        $comment->save();

        return redirect()->route("homepage")->with("success", "Comment successfully");
    }
}
