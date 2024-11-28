<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();

        return view('students.index', ['students' => $students]);
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        Profile::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'contact_number' => $request['contact_number'],
            'address' => $request['address']
        ])->students()->create([
            'student_number' => $request['student_number'],
            'year_level' => $request['year_level'],
        ]);

        return redirect(route('students.index'));
    }
}
