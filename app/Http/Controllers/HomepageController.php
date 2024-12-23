<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->limit(3)->get();
        foreach ($blogs as $blog) {
            $blog->date = Carbon::parse($blog->date)->translatedFormat('l, j F Y');
        }

        return view('welcome', compact('blogs'));
    }

    public function kebijakanPrivasi()
    {
        return view('kebijakan-privasi');
    }

    public function syaratKetentuan()
    {
        return view('syarat-ketentuan');
    }
}
