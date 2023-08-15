<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCourseController extends Controller
{
    public function index(){
        return view('customer.instructor.create-course.index');
    }

    public function course_manager(){
        return view('customer.instructor.create-course.course-manager');
    }

    public function create_lesson(){
        return view('customer.instructor.create-course.create-lesson');
    }

    public function create_topic(){
        return view('customer.instructor.create-course.create-topic');
    }
}
