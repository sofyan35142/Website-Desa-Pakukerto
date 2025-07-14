<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Blog()
    {
        // Logic to retrieve blog posts can be added here
        return view('LandingPage.blog');
    }
    public function blogdetail()
    {
        // Logic to retrieve blog posts can be added here
        return view('LandingPage.blogdetail');
    }
}
