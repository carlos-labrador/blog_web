<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        DB::listen(function ($query) {
            logger($query->sql, $query->bindings);
        });
        $blog = Post::with(['user'])->latest()->paginate(5);
        return view('blogs.index', compact('blog'));
    }
}
