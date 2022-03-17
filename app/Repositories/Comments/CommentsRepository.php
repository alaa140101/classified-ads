<?php
namespace App\Repositories\Comments;

use App\Traits\ImageUploadTrait;
use App\ {
    Ad,
    Comment,
    Image
};

class CommentsRepository implements CommentsInterface
{
  protected $comment;

  public function __construct(Comment $comment)
  {
    $this->comment = $comment;
  }

  public function add($request)
  {
    $request->user()->comments()->create($request->all());
  }

  public function addreply($request)
  {
    $request->user()->comments()->create($request->all());
  }
}