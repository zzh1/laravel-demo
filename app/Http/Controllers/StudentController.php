<?php
namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::paginate(20);

        return view('student.index',[
            'students'=>$students,
        ]);
    }

    //添加页面
    public function create(Request $request)
    {
        if($request->isMethod('POST')){

            $data = $request->input('Student');

            if(Student::create($data)){
                return redirect('student/index')->with('success','添加成功！');
            }else{
                return redirect()->back();
            }
        }
        return view('student.create');
    }

    //保存添加
    public function save(Request $request)
    {
        $data = $request->input('Student');

        $student = new Student();
        $student->name = $data['name'];
        $student->age = $data['age'];
        $student->sex = $data['sex'];

        if($student->save()){
            return redirect('student/index');
        }else{
            return redirect()->back();
        }

    }

}



