<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Helper to clean scraped HTML content by removing unclosed outer grid divs.
     */
    public static function cleanTabContent($content)
    {
        if (empty($content)) {
            return "";
        }
        // Remove starting <div class="row"><div class="col-md-12">
        $clean = preg_replace('/^\s*<div class="row">\s*<div class="col-md-12">\s*/is', '', $content);
        return trim($clean);
    }

    /**
     * Homepage
     */
    public function index()
    {
        $allFaculty = config('faculty', []);
        $previewFaculty = array_slice($allFaculty, 0, 4, true);

        return view('index', compact('previewFaculty'));
    }

    /**
     * About Page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * News List Page
     */
    public function news()
    {
        return view('allnews');
    }

    /**
     * News Detail Page
     */
    public function newsDetail()
    {
        return view('news_detail');
    }

    /**
     * Offered Programs Page
     */
    public function programs()
    {
        return view('programs');
    }

    /**
     * Program Detail Page
     */
    public function programDetail()
    {
        return view('program_detail');
    }

    /**
     * Faculty Directory Page
     */
    public function teachers()
    {
        $faculty = config('faculty', []);
        return view('teachers', compact('faculty'));
    }

    /**
     * Faculty Member Profile Detail Page
     */
    public function teacherDetail($id = 45)
    {
        $faculty = config('faculty', []);
        $id = intval($id);

        if (!isset($faculty[$id])) {
            $id = 45;
        }

        $teacher = $faculty[$id];

        return view('teacher_detail', [
            'teacher' => $teacher,
            'teacherId' => $id,
            'controller' => $this // so views can call cleanTabContent
        ]);
    }

    /**
     * Contact Page
     */
    public function contact()
    {
        return view('contact');
    }
}
