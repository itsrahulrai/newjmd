<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $categories = Category::count();
        $blogs = Blog::count();
        $product = Product::count();
        $testimonails = Testimonial::count();
        return view('admin.dashboard', compact('categories','product', 'blogs', 'testimonails'));
    }


    public function login()
    {
        return view('admin.auth.login');
    }
}
