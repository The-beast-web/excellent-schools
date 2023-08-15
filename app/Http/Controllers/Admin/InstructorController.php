<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        return view('admin.instructors.index');
    }

    public function detail()
    {
        return view('admin.instructors.detail');
    }

    public function request()
    {
        return view('admin.instructors.request');
    }

    public function request_test()
    {
        return view('admin.instructors.request-test');
    }

    public function payment()
    {
        return view('admin.instructors.payment');
    }

    public function payment_detail(){
        return view('admin.instructors.payment-detail');
    }

    public function payment_detail_print(){
        return view('admin.instructors.payment-detail-print');
    }


}
