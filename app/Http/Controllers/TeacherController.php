<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    private $teachers, $teacher;

    public function add()
    {
        return view('admin.teacher.add');
    }

    public function manage()
    {
        $this->teachers = Teacher::all();
        return view('admin.teacher.manage', ['teachers' => $this->teachers]);
    }

    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect('add-teacher')->with('message', 'Teacher Info Create Successfully');
    }


    public function edit($id)
    {
       $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit', ['teacher' => $this->teacher]);
    }

    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('manage-teacher')->with('message', 'Updated Teacher Info Successfully');
    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('manage-teacher')->with('message', 'Deleted Teacher Info Successfully');
    }
}
