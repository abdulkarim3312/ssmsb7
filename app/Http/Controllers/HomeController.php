<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class HomeController extends Controller
{
    public $courses, $offerCourses, $course, $enroll, $status;

    public function sendMail()
    {
        Mail::to('karim156843@gmail.com')->send(new EnrollConfirmationMail());
        return 'success';
    }





    public function index()
    {
//        $this->courses =
//        $this->offerCourses =
        return view('website.home.index', [
            'courses' => Course::where('status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'offer_courses' => Course::where('offer_fee', '>', 0)->orderBy('id', 'desc')->get()]);
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function courses()
    {
        return view('website.courses.index');
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    public function auth()
    {
        return view('website.auth.index');
    }

    public function detail($id)
    {
        $this->course = Course::find($id);
        if (Session::get('student_id'))
        {
            $this->enroll= Enroll::where('student_id', Session::get('student_id'))->where('course_id', $id)->first();
            if ($this->enroll)
            {
                $this->status = true;
            }
            else
            {
                $this->status = false;
            }
        }
        else
        {
            $this->status = false;
        }

        return view('website.courses.detail', [
            'course' =>  $this->course,
            'status' =>  $this->status,
        ]);
    }
}
