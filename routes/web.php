<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentAdminController;
use App\Http\Controllers\DetailProjectController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\PageController;


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


// Kelola akun
Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->group(function () {
    Route::get('/kelolaakun', [SuperAdminController::class, 'kelolaakun'])->name('superadmin.kelolaakun.index');
    Route::post('/kelolaakun', [SuperAdminController::class, 'store'])->name('superadmin.kelolaakun.store');
    Route::delete('/kelolaakun/{id_user}', [SuperAdminController::class, 'destroy'])->name('superadmin.kelolaakun.destroy');
    Route::get('/kelolaakun/{id_user}/edit', [SuperAdminController::class, 'edit'])->name('superadmin.kelolaakun.edit');
    Route::put('/kelolaakun/{id_user}', [SuperAdminController::class, 'update'])->name('superadmin.kelolaakun.update');
});
Route::get('/superadmin/kelolaakun/search', [SuperAdminController::class, 'search'])->name('superadmin.kelolaakun.search');



// Admin rute
Route::get('/admin/dashboardadmin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dokumenadmin', [DocumentAdminController::class, 'index'])->name('dokumen');
});



// Authentication routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//landingpage dan login
Route::get('/', [PageController::class, 'landingPage'])->name('landingpage');
Route::get('/home', [PageController::class, 'home'])->name('home');


// Superadmin routes
Route::middleware(['auth'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
});
Route::prefix('superadmin')->name('superadmin.')->middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('superadmin/dokumensuperadmin', [DocumentController::class, 'index'])->name('dokumen');
});



// Upload project 
Route::post('/upload-doc', [ProjectController::class, 'store']);
Route::get('/superadmin/uploaddoc', [ProjectController::class, 'create'])->name('superadmin.uploaddoc');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.detail');



// Edit project
Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::prefix('superadmin')->name('superadmin.')->group(function () {
    Route::resource('project', ProjectController::class);
});
Route::get('superadmin/project/{id_project}/edit', [ProjectController::class, 'edit'])->name('superadmin.editproject');
Route::put('/superadmin/updateProject/{id}', [ProjectController::class, 'update'])->name('superadmin.updateProject');
Route::delete('/superadmin/link/delete/{id_link}', [ProjectController::class, 'destroyLink']);
Route::delete('/superadmin/dokumen/delete/{id_doc}', [ProjectController::class, 'destroyDokumen']);



//dokumen
Route::delete('/delete/{id_project}', [DocumentController::class, 'delete'])->name('project.delete');



// Detail project
Route::get('/project/{id}', [DetailProjectController::class, 'show'])->name('project.detail');



// search project
Route::get('/search', [DocumentController::class, 'search']);
Route::get('/dokumensuperadmin', [DocumentController::class, 'index'])->name('superadmin.dokumensuperadmin');
Route::get('/admin/search', [DocumentAdminController::class, 'search'])->name('admin.search');


// Tabel tracking
Route::middleware(['auth'])->group(function () {
    Route::get('/link/{id_link}', [TrackingController::class, 'openLink'])
         ->name('link.open');

    Route::get('/document/{id_doc}', [TrackingController::class, 'viewDocument'])
         ->name('document.view');
    
    Route::get('/document/download/{id_doc}', [TrackingController::class, 'downloadDocument'])
         ->name('document.download');
});
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/tracking', [TrackingController::class, 'index'])
         ->name('superadmin.tracking');
});

Route::get('/projects', [DocumentController::class, 'index'])->name('project.index');