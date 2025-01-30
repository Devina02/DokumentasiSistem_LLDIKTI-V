<?php

use App\Models\Dokument;
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
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentAdminController;
use App\Http\Controllers\DetailProjectController;
use App\Http\Controllers\BreadcrumbController;

// Route for editing accounts
Route::get('/superadmin/kelolaakun/{id_user}/edit', [SuperAdminController::class, 'edit'])->name('superadmin.kelolaakun.edit');

// Route for updating account data
Route::put('/superadmin/kelolaakun/{id_user}', [SuperAdminController::class, 'update'])->name('superadmin.kelolaakun.update');

// Admin rute
Route::get('/admin/dashboardadmin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dokumenadmin', [DocumentAdminController::class, 'index'])->name('dokumen');
});


// Authentication routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



// Middleware routes
Route::middleware(['auth'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
});

// Superadmin role middleware
Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->group(function () {
    Route::get('/kelolaakun', [SuperAdminController::class, 'kelolaakun'])->name('superadmin.kelolaakun.index');
    Route::post('/kelolaakun', [SuperAdminController::class, 'store'])->name('superadmin.kelolaakun.store');
    Route::delete('/kelolaakun/{id_user}', [SuperAdminController::class, 'destroy'])->name('superadmin.kelolaakun.destroy');
    Route::get('/kelolaakun/{id_user}/edit', [SuperAdminController::class, 'edit'])->name('superadmin.kelolaakun.edit');
    Route::put('/kelolaakun/{id_user}', [SuperAdminController::class, 'update'])->name('superadmin.kelolaakun.update');
});

// Search route for superadmin
Route::get('/superadmin/kelolaakun/search', [SuperAdminController::class, 'search'])->name('superadmin.kelolaakun.search');

// Logout route
Route::post('/logout', [SuperAdminController::class, 'logout'])->name('logout');

// Upload project routes
Route::get('/upload-doc', [ProjectController::class, 'create'])->name('uploaddoc');
Route::post('/upload-doc', [ProjectController::class, 'store']);

// Route for editing project
Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');

Route::prefix('superadmin')->name('superadmin.')->group(function () {
    Route::resource('project', ProjectController::class);
});
Route::put('superadmin/project/{project}', [ProjectController::class, 'update'])->name('superadmin.project.update');
Route::put('/superadmin/project/{id}', [ProjectController::class, 'update'])->name('project.update');

Route::put('/project/{id_project}', [ProjectController::class, 'update'])->name('superadmin.updateProject');
Route::get('superadmin/project/{id_project}/edit', [ProjectController::class, 'edit'])->name('superadmin.editproject');


Route::put('/superadmin/updateProject/{id}', [ProjectController::class, 'update'])->name('superadmin.updateProject');
Route::delete('/superadmin/link/delete/{id_link}', [ProjectController::class, 'destroyLink']);
Route::delete('/superadmin/dokumen/delete/{id_doc}', [ProjectController::class, 'destroyDokumen']);



// Superadmin document route
Route::prefix('superadmin')->name('superadmin.')->middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('superadmin/dokumensuperadmin', [DocumentController::class, 'index'])->name('dokumen');
});

Route::delete('/delete/{id_project}', [DocumentController::class, 'delete'])->name('project.delete');



// Detail project
Route::get('/project/{id}', [DetailProjectController::class, 'show'])->name('project.detail');

// search project
Route::get('/search', [DocumentController::class, 'search']);
Route::get('/dokumensuperadmin', [DocumentController::class, 'index'])->name('superadmin.dokumensuperadmin');




// // Routes for superadmin dashboard
// Route::get('/superadmin/dashboardsuperadmin', [BreadcrumbController::class, 'handleUploadFromDashboard'])->name('superadmin.dashboardsuperadmin');
// Route::get('/superadmin/kelolaakun', [BreadcrumbController::class, 'handleAccountManagement'])->name('superadmin.kelolaakun');

// // Routes for superadmin document management
// Route::get('/superadmin/dokumensuperadmin', [BreadcrumbController::class, 'handleUploadFromDocument'])->name('superadmin.dokumensuperadmin');
// Route::get('/superadmin/editproject/{projectId}', [BreadcrumbController::class, 'handleEditProjectUpload'])->name('superadmin.editproject');
// Route::get('/superadmin/detailproject/{projectId}', [BreadcrumbController::class, 'handleDetailProject'])->name('superadmin.detailproject');
