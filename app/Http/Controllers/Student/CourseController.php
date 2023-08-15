<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('customer.student.course.index');
    }

    public function lesson(){
        return view('customer.student.course.content.lesson');
    }
}
