<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseBuilderController extends Controller
{
    public function index()
    {
        return view('admin.course-builder.index');
    }

    public function create_lesson(){
        return view('admin.course-builder.new-lesson');
    }
}
