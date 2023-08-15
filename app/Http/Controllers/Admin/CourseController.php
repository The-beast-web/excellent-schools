<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.course.index');
    }

    public function course_detail()
    {
        return view('admin.course.course-detail');
    }

    public function lesson_detail()
    {
        return view('admin.course.lesson-detail');
    }

    public function category()
    {
        return view('admin.course.course-category');
    }

    public function order(){
        return view('admin.course.orders');
    }
}
