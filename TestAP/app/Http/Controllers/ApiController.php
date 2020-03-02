<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $students = new Student();

        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();

        return response()->json($students);

    }

    // public function show(Request $request)
    // {
    //     // $students = Student::where('fname', $request->input('fname'))->get();
    //     // $students = Student::where('fname', $request->('fname'))->get();
    //     $students = Student::where('fname', $request->input('fname'))->get();


    //     return response()->json($students);
    // }


    public function show(Request $request)
    {
        // $students = Student::where('fname', $request->input('fname'))->get();
        // $students = Student::where('fname', $request->('fname'))->get();
        $students = Student::where('fname', $request->input('fname'))->get();


        return response()->json($students);
    }

    public function showbyid(Request $request, $id)
    {
        $students = Student::find($id);

        return response()->json($students);
    }


    public function updatebyid(Request $request, $id)
    {
        $students = Student::find($id);
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();


        return response()->json($students);
    }
}
