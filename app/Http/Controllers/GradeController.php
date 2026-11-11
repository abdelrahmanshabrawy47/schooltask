<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    // READ: Display all grades
    public function index()
    {
        $grades = Grade::with('student')->get();

        return view('grades.index', compact('grades'));
    }

    // CREATE: Show create form
    public function create()
    {
        $students = Student::all();

        return view('grades.create', compact('students'));
    }

    // STORE: Insert new grade
    public function store(Request $request)
    {
        $request->validate([
            'stud_ID' => 'required|exists:students,id',
            'grade' => 'required|numeric|min:0|max:100',
        ]);

        Grade::create([
            'stud_ID' => $request->stud_ID,
            'grade' => $request->grade,
        ]);

        return redirect()->route('grades.index')
            ->with('success', 'Grade added successfully');
    }

    // READ: Display one grade
    public function show(Grade $grade)
    {
        $grade->load('student');

        return view('grades.show', compact('grade'));
    }

    // UPDATE: Show edit form
    public function edit(Grade $grade)
    {
        $students = Student::all();

        return view('grades.edit', compact('grade', 'students'));
    }

    // UPDATE: Update grade
    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'stud_ID' => 'required|exists:students,id',
            'grade' => 'required|numeric|min:0|max:100',
        ]);

        $grade->update([
            'stud_ID' => $request->stud_ID,
            'grade' => $request->grade,
        ]);

        return redirect()->route('grades.index')
            ->with('success', 'Grade updated successfully');
    }

    // DELETE: Delete grade
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('grades.index')
            ->with('success', 'Grade deleted successfully');
    }
}


