<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('admin.events.index');
    }

    public function detail()
    {
        return view('admin.events.detail');
    }

    public function order()
    {
        return view('admin.events.order');
    }

    public function order_detail()
    {
        return view('admin.events.order-detail');
    }
}
