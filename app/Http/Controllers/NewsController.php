<?php

namespace App\Http\Controllers;

use App\Models\Newse;

class NewsController extends Controller
{
    /**
     * Display a listing of the news.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $newses = Newse::orderByDesc('date')->get();
        return view('allnews', compact('newses'));
    }

    /**
     * Display the specified news item.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function displayNews($id)
    {
        $news = Newse::findOrFail($id);
        return view('news_detail', compact('news'));
    }
}
