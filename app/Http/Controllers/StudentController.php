<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function ShowAllStudent(){
        $students= student::all();
        return view("ShowPage",compact("students"));
    }

    public function ShowStudent($id){
        $student= student::find($id);
        return view("ShowOneStudent",compact("student"));
    }

    public function create(){
        return view("CreateStudent");
    }

    public function store(Request $request){
        $validate=$request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "phone"=>"required|numeric"
        ]);
        student::create($validate);
        return redirect()->route("students.index");
    }

    public function edit($id){
        $student= student::find($id);
        return view("EditStudent",compact("student"));
    }

    public function update(Request $request,$id){
        $validate=$request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "phone"=>"required|numeric"
        ]);
        student::where("id",$id)->update($validate);
        return redirect()->route("students.index");
    }

    public function destroy($id){
        student::where("id",$id)->delete();
        return redirect()->route("students.index");
    }
}
