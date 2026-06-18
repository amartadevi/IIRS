<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Program;
use App\Models\Newse;
use App\Models\Event;
use App\Models\Notice;
use App\Models\Teacher;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slides = Slide::orderBy('sort_order')->get();
        $programs = Program::take(2)->get();
        $newses = Newse::orderByDesc('date')->get();
        $events = Event::where('completed', 0)->get();
        $notices = Notice::orderByDesc('date')->get();
        $previewFaculty = Teacher::orderBy('sort_order')->take(4)->get();

        return view('index', compact('slides', 'programs', 'newses', 'events', 'notices', 'previewFaculty'));
    }
}
