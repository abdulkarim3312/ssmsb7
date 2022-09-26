<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        return view('teacher.home.index');
    }
}
