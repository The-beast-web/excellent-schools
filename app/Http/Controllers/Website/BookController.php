<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('customer.website.book.book');
    }

    public function book_detail(){
        return view('customer.website.book.book-detail');
    }
}
