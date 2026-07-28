<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use App\Models\Department;

class HomeController extends Controller
{
    /**
     * Homepage with active sliders and latest news.
     */
    public function index()
    {
        $sliders = Slider::where('is_active', true)->orderBy('sort_order')->get();
        $news = News::where('is_published', true)->latest()->take(3)->get();

        return view('index', compact('sliders', 'news'));
    }

    /**
     * Departments overview page.
     */
    public function departments()
    {
        $departments = Department::all();

        return view('departments', compact('departments'));
    }

    /**
     * Public news list page.
     */
    public function news()
    {
        $newsItems = News::where('is_published', true)->latest()->paginate(12);

        return view('news', compact('newsItems'));
    }

    /**
     * Single news detail page.
     */
    public function newsShow(News $news)
    {
        if (!$news->is_published && !auth()->check()) {
            abort(404);
        }

        $latestNews = News::where('is_published', true)
            ->where('id', '!=', $news->id)
            ->latest()
            ->take(5)
            ->get();

        return view('news-details', compact('news', 'latestNews'));
    }
}
