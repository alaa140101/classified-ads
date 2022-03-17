<?php

namespace App\Repositories\Comments;


interface CommentsInterface
{
    // public function all();

    public function add($request);
    public function addreply($request);

    // public function getDetails($id);

}