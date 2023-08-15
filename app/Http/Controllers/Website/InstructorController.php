<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index(){
        return view('customer.website.instructor.index');
    }

    public function detail(){
        return view('customer.website.instructor.detail');
    }
}
