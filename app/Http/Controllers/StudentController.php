<?php
namespace App\Http\Controllers;

use App\Student;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::paginate(2);

        return view('student.index',[
            'students'=>$students,
        ]);
    }

}



