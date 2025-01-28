<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');


Route::get('/user/dokumenuser', function () {
    $dokumen = Post::all();
    return view('user.dokumenuser', [
        "title" => "Dokumen Admin",
        "dokumen" => $dokumen
    ]);
});

Route::get('/dokumen/{slug}', function ($slug) {
    return view('detailproject', [
        "title" => "post::find($slug)",

    ]);
});



Route::get('/user/dashboarduser', action: function () {
    return view('user.dashboarduser', [
        "title" => "dashboarduser"
    ]);
});

Route::get('/superadmin/kelolaakun', action: function () {
    return view('superadmin.kelolaakun', [
        "title" => "kelolaakun"
    ]);
});

Route::get('/superadmin/uploaddoc', action: function () {
    return view('superadmin.uploaddoc', [
        "title" => "uploaddoc"
    ]);
});
Route::get('/alert/linkuploadcard', action: function () {
    return view('alert.linkuploadcard', [
        "title" => "linkuploadcard"
    ]);
});

Route::get('/home', function () {
    return view('home');
})->name('home');


use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;


// Superadmin routes
Route::get('/superadmin/dashboardsuperadmin', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
Route::get('/superadmin/dokumensuperadmin', [SuperAdminController::class, 'documents'])->name('superadmin.dokumen');


// Route for editing accounts
Route::get('/superadmin/kelolaakun/{id_user}/edit', [SuperAdminController::class, 'edit'])->name('superadmin.kelolaakun.edit');

// Route for updating account data
Route::put('/superadmin/kelolaakun/{id_user}', [SuperAdminController::class, 'update'])->name('superadmin.kelolaakun.update');

// Admin routes
Route::get('/admin/dashboardadmin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dokumenadmin', [AdminController::class, 'documents'])->name('admin.dokumen');

// Authentication routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Middleware routes
Route::middleware(['auth'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('/superadmin/dokumensuperadmin', [SuperAdminController::class, 'documents'])->name('superadmin.dokumen');
    Route::get('/admin/dashboardadmin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dokumenadmin', [AdminController::class, 'documents'])->name('admin.dokumen');
});

// Superadmin role middleware
Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->group(function () {
    // Route for managing accounts
    Route::get('/kelolaakun', [SuperAdminController::class, 'kelolaakun'])->name('superadmin.kelolaakun.index');
    Route::post('/kelolaakun', [SuperAdminController::class, 'store'])->name('superadmin.kelolaakun.store');
    Route::delete('/kelolaakun/{id_user}', [SuperAdminController::class, 'destroy'])->name('superadmin.kelolaakun.destroy');
    
    // Route for editing accounts
    Route::get('/kelolaakun/{id_user}/edit', [SuperAdminController::class, 'edit'])->name('superadmin.kelolaakun.edit');
    
    // Route for updating account data
    Route::put('/kelolaakun/{id_user}', [SuperAdminController::class, 'update'])->name('superadmin.kelolaakun.update');
});
Route::get('/superadmin/kelolaakun/search', [SuperAdminController::class, 'search'])->name('superadmin.kelolaakun.search');

// Logout route
Route::post('/logout', [SuperAdminController::class, 'logout'])->name('logout');

// Upload project 
Route::get('/upload-doc', [ProjectController::class, 'create'])->name('uploaddoc');
Route::post('/upload-doc', [ProjectController::class, 'store']);

