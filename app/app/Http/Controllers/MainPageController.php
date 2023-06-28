<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\PostRepository;
use App\Models\Post;

class MainPageController extends Controller
{
    public function index()
    {
        return view('mainPage');
    }

}
