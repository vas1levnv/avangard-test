<?php

namespace App\Http\Repositories;

use App\Models\Post;

class PostRepository
{
    public function create(array $data)
    {
        Post::create($data);
    }
}
