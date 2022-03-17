<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{
    Comments\CommentsInterface,
  };

class CommentController extends Controller
{
    protected $comment;

    public function __construct(CommentsInterface $comment)
    {
        $this->middleware('auth', ['only' => ['reply', 'store']]);
        $this->comment = $comment;
    }

    public function store(Request $request)
    {
        $this->comment->add($request);

        return back();
    }

    public function reply(Request $request)
    {
        $this->comment->addreply($request);

        return back();
    }

}
