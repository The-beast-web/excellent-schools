<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('customer.website.blog.index');
    }

    public function detail()
    {
        return view('customer.website.blog.detail');
    }
}
