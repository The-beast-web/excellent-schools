<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function index(){
        return view('customer.student.order history.index');
    }
}
