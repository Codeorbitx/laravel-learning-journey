<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    // Show create form
    public function create()
    {
        return view('students.create');
    }

    // Save new student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'roll_no' => 'required|string|unique:students',
            'semester' => 'required|integer',
            'email' => 'nullable|email',
        ]);

        Student::create($request->all());

        return redirect('/students');
    }

    // Show edit form
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]);
    }

    // Update student
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());

        return redirect('/students');
    }

    // Delete student
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect('/students');
    }
}