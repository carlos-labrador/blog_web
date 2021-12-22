<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Post::with(['user'])->latest()->filter(request(['search']))->paginate(5);
        return view('blogs.index', compact('blog'));
    }
}
