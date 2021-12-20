<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Post::with(['user'])->latest()->paginate(5);
        return view('blogs.index',compact('blog'));
    }
}
