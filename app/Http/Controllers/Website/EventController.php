<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('customer.website.event.index');
    }

    public function detail(){
        return view('customer.website.event.detail');
    }

    public function ticket(){
        return view('customer.website.event.ticket');
    }
}
