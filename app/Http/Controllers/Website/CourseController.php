<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('customer.website.course.course');
    }

    public function course_detail(){
        return view('customer.website.course.course-detail');
    }

    public function checkout(){
        return view('customer.website.course.checkout');
    }
}
