<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Console\isVerbose;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

}
