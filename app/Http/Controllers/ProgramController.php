<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the programs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $programs = Program::all();
        return view('programs', compact('programs'));
    }

    /**
     * Display the specified program.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function displayProgram($id)
    {
        $program = Program::findOrFail($id);
        return view('program_detail', compact('program'));
    }
}
