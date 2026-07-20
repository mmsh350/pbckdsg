<?php

use Illuminate\Support\Facades\Route;

// Frontend Routes (Mapping existing static views)
Route::get('/', function () {
    $sliders = \App\Models\Slider::where('is_active', true)->orderBy('sort_order')->get();
    $news = \App\Models\News::where('is_published', true)->latest()->take(3)->get();
    return view('index', compact('sliders', 'news'));
})->name('home');

Route::get('/departments', function () {
    $departments = \App\Models\Department::all();
    return view('departments', compact('departments'));
})->name('departments');

Route::get('/news', function () {
    $newsItems = \App\Models\News::where('is_published', true)->latest()->paginate(12);
    return view('news', compact('newsItems'));
})->name('news.index');

Route::get('/news/{news:slug}', function (\App\Models\News $news) {
    if (!$news->is_published && !auth()->check()) {
        abort(404);
    }

    $latestNews = \App\Models\News::where('is_published', true)
        ->where('id', '!=', $news->id)
        ->latest()
        ->take(5)
        ->get();

    return view('news-details', compact('news', 'latestNews'));
})->name('news.show');
Route::view('/planning', 'planning')->name('planning');
Route::view('/budget', 'budget')->name('budget');
Route::view('/monitoring', 'monitoring')->name('monitoring');
Route::view('/devaid', 'devaid')->name('devaid');
Route::view('/administration', 'administration')->name('administration');
Route::view('/sdgs', 'sdgs')->name('sdgs');
Route::view('/socu', 'socu')->name('socu');
Route::view('/eiu', 'eiu')->name('eiu');
Route::view('/bureau', 'bureau')->name('bureau');
Route::view('/agency', 'agency')->name('agency');
Route::view('/downloads', 'downloads')->name('downloads');
Route::get('/downloads/{document}', \App\Livewire\Frontend\DownloadDetails::class)->name('downloads.show');
Route::view('/contact', 'contact')->name('contact');

Route::get('/documents/{document}/download', function (\App\Models\Document $document) {
    $document->increment('download_count');
    $extension = pathinfo($document->file_path, PATHINFO_EXTENSION);
    $filename = \Illuminate\Support\Str::slug($document->title) . '.' . $extension;
    return \Illuminate\Support\Facades\Storage::disk('public')->download($document->file_path, $filename);
})->name('documents.download');

// Admin Routes using Livewire Components
Route::redirect('/admin', '/admin/dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');

    // News
    Route::get('/news', \App\Livewire\Admin\News\Index::class)->name('news.index');
    Route::get('/news/create', \App\Livewire\Admin\News\Form::class)->name('news.create');
    Route::get('/news/{news}/edit', \App\Livewire\Admin\News\Form::class)->name('news.edit');

    // Documents
    Route::get('/documents', \App\Livewire\Admin\Documents\Index::class)->name('documents.index');
    Route::get('/documents/create', \App\Livewire\Admin\Documents\Form::class)->name('documents.create');
    Route::get('/documents/{document}/edit', \App\Livewire\Admin\Documents\Form::class)->name('documents.edit');

    // Departments
    Route::get('/departments', \App\Livewire\Admin\Departments\Index::class)->name('departments.index');
    Route::get('/departments/create', \App\Livewire\Admin\Departments\Form::class)->name('departments.create');
    Route::get('/departments/{department}/edit', \App\Livewire\Admin\Departments\Form::class)->name('departments.edit');

    // Leadership
    Route::get('/leadership', \App\Livewire\Admin\Leadership\Index::class)->name('leadership.index');
    Route::get('/leadership/create', \App\Livewire\Admin\Leadership\Form::class)->name('leadership.create');
    Route::get('/leadership/{leadership}/edit', \App\Livewire\Admin\Leadership\Form::class)->name('leadership.edit');

    // Sliders
    Route::get('/sliders', \App\Livewire\Admin\Sliders\Index::class)->name('sliders.index');
    Route::get('/sliders/create', \App\Livewire\Admin\Sliders\Form::class)->name('sliders.create');
    Route::get('/sliders/{slider}/edit', \App\Livewire\Admin\Sliders\Form::class)->name('sliders.edit');

    // Pages
    Route::get('/pages', \App\Livewire\Admin\Pages\Index::class)->name('pages.index');
    Route::get('/pages/create', \App\Livewire\Admin\Pages\Form::class)->name('pages.create');
    Route::get('/pages/{page}/edit', \App\Livewire\Admin\Pages\Form::class)->name('pages.edit');

    // Settings
    Route::get('/settings', \App\Livewire\Admin\Settings\Index::class)->name('settings.index');
});

Route::view('/profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
