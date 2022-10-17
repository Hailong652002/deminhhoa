<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    public function get_all_students(){
        $students = student::all();//lay ra tat ca ban ghi tu bang products thong qua model product
        return view('student.student_manage',['students'=>$students]);
    }
    public function get_student_by_id($id){
        $student = student::whereId($id)->get();
        return view('student.student_edit', ['students'=> $student]);
    }
    public function update(Request $request, $id){ 
       
        $student = student::where('id',$id)->first();
        $student->fullname = $request->fullname;
        $student->address = $request->address;
        $student->birthday = $request->birthday;
        $student->update($request->all());
        
        return redirect('student');
    }
    public function create(){
        return view('student.student_create');
    }
    public function delete(){
        
    }

}
