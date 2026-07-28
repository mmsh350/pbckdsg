<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\NewsletterController;

// Frontend Livewire Components
use App\Livewire\Frontend\DownloadDetails;

// Admin Livewire Components
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\News\Index as AdminNewsIndex;
use App\Livewire\Admin\News\Form as AdminNewsForm;
use App\Livewire\Admin\Documents\Index as AdminDocumentsIndex;
use App\Livewire\Admin\Documents\Form as AdminDocumentsForm;
use App\Livewire\Admin\Departments\Index as AdminDepartmentsIndex;
use App\Livewire\Admin\Departments\Form as AdminDepartmentsForm;
use App\Livewire\Admin\Leadership\Index as AdminLeadershipIndex;
use App\Livewire\Admin\Leadership\Form as AdminLeadershipForm;
use App\Livewire\Admin\Sliders\Index as AdminSlidersIndex;
use App\Livewire\Admin\Sliders\Form as AdminSlidersForm;
use App\Livewire\Admin\Pages\Index as AdminPagesIndex;
use App\Livewire\Admin\Pages\Form as AdminPagesForm;
use App\Livewire\Admin\Settings\Index as AdminSettingsIndex;

/*
|--------------------------------------------------------------------------
| Web & Frontend Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/departments', [HomeController::class, 'departments'])->name('departments');

// News Routes
Route::get('/news', [HomeController::class, 'news'])->name('news.index');
Route::get('/news/{news:slug}', [HomeController::class, 'newsShow'])->name('news.show');

// Static Section Views
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

// Downloads & Media Routes
Route::view('/downloads', 'downloads')->name('downloads');
Route::get('/downloads/{document}', DownloadDetails::class)->name('downloads.show');
Route::get('/documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');

// Contact & Communications Routes
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->middleware('throttle:5,1')->name('contact.send');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

/*
|--------------------------------------------------------------------------
| Admin Portal Routes (Protected Livewire Components)
|--------------------------------------------------------------------------
*/

Route::redirect('/admin', '/admin/dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');

    // News Management
    Route::get('/news', AdminNewsIndex::class)->name('news.index');
    Route::get('/news/create', AdminNewsForm::class)->name('news.create');
    Route::get('/news/{news}/edit', AdminNewsForm::class)->name('news.edit');

    // Document Management
    Route::get('/documents', AdminDocumentsIndex::class)->name('documents.index');
    Route::get('/documents/create', AdminDocumentsForm::class)->name('documents.create');
    Route::get('/documents/{document}/edit', AdminDocumentsForm::class)->name('documents.edit');

    // Department Management
    Route::get('/departments', AdminDepartmentsIndex::class)->name('departments.index');
    Route::get('/departments/create', AdminDepartmentsForm::class)->name('departments.create');
    Route::get('/departments/{department}/edit', AdminDepartmentsForm::class)->name('departments.edit');

    // Leadership Management
    Route::get('/leadership', AdminLeadershipIndex::class)->name('leadership.index');
    Route::get('/leadership/create', AdminLeadershipForm::class)->name('leadership.create');
    Route::get('/leadership/{leadership}/edit', AdminLeadershipForm::class)->name('leadership.edit');

    // Slider Management
    Route::get('/sliders', AdminSlidersIndex::class)->name('sliders.index');
    Route::get('/sliders/create', AdminSlidersForm::class)->name('sliders.create');
    Route::get('/sliders/{slider}/edit', AdminSlidersForm::class)->name('sliders.edit');

    // Page Management
    Route::get('/pages', AdminPagesIndex::class)->name('pages.index');
    Route::get('/pages/create', AdminPagesForm::class)->name('pages.create');
    Route::get('/pages/{page}/edit', AdminPagesForm::class)->name('pages.edit');

    // System Settings
    Route::get('/settings', AdminSettingsIndex::class)->name('settings.index');
});

Route::view('/profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
