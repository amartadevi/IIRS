<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of teachers.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $teachers = Teacher::orderBy('sort_order')->get();
        return view('teachers', compact('teachers'));
    }

    /**
     * Display the specified teacher profile.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function displayTeacherProfile($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher_detail', compact('teacher'));
    }
}
