<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $blog->date = Carbon::parse($blog->date)->translatedFormat('l, j F Y');
        }

        return view('blog-list', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->date = Carbon::parse($blog->date)->translatedFormat('l, j F Y');

        return view('blog-detail', compact('blog'));
    }
}
