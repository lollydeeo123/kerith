<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function index()
    {  
        return view('subscription');
    }

    public function show()
    {  
        return view('ClassBooking.signupForm');
    }
}