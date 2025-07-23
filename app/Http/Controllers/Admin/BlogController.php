<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function BlogView()
    {
        $blogs = Blog::latest()->get();
        return view('Admin.blog.BlogView', compact('blogs'));
    }

    public function BlogForm()
    {
        return view('Admin.blog.BlogForm');
    }

    public function store(Request $request)
    {
        $blog = Blog::create([
            'nama_blog' => $request->input('nama_blog'),
            'penulis' => $request->input('penulis'),
            'gambar' => $request->input('gambar'),
        ]);

        return redirect('/blogs')->with('success', 'Blog berhasil ditambahkan!');
    }
}
