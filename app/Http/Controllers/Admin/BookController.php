<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('admin.books.index');
    }


    public function detail()
    {
        return view('admin.books.detail');
    }

    public function order()
    {
        return view('admin.books.orders');
    }

    public function order_detail()
    {
        return view('admin.books.order-detail');
    }
}
