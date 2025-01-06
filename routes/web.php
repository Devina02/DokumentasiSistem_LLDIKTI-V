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
    return view('home');
});

Route::get('/admin/dashboardadmin', action: function () {
    $tracking = [
        [
            "no" => "1",
            "akun" => "Karina",
            "aksi" => "Lihat",
            "dokumen" => "Handbook Evira",
            "waktu" => "17 Januari 2025",
        ],
        [
            "no" => "2",
            "akun" => "NingNing",
            "aksi" => "Unduh",
            "dokumen" => " Analisis sistem sengkuni",
            "waktu" => "10 Januari 2025",
        ],
        [
            "no" => "4",
            "akun" => "Gisele",
            "aksi" => "Unduh",
            "dokumen" => "Data analysis sadewa",
            "waktu" => "1 Januari 2025",
        ],

    ];
    return view('admin.dashboardadmin', [
        "title" => "dashboardadmin",
        "tracking" => $tracking
    ]);
});

Route::get('/admin/dokumen', function () {
    $dokumen = Post::all(); 
    return view('admin.dokumen', [ 
        "title" => "Dokumen Admin", 
        "dokumen" => $dokumen
    ]);
});

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

Route::get('/admin/kelolaakun', action: function () {
    return view('admin.kelolaakun', [
        "title" => "kelolaakun"
    ]);
});

Route::get('/admin/uploaddoc', action: function () {
    return view('admin.uploaddoc', [
        "title" => "uploaddoc"
    ]);
});

Route::get('/alert/alerthapusproject', action: function () {
    return view('alert.alerthapusproject', [
        "title" => "alerthapusproject"
    ]);
});

Route::get('/alert/alerthapusakunuser', action: function () {
    return view('alert.alerthapusakunuser', [
        "title" => "alerthapusakunuser"
    ]);
});

Route::get('/alert/alerttambahakun', action: function () {
    return view('alert.alerttambahakun', [
        "title" => "alerttambahakun"
    ]);
});


Route::get('/alert/fileuploadcard', action: function () {
    return view('alert.fileuploadcard', [
        "title" => "fileuploadcard"
    ]);
});

Route::get('/alert/linkuploadcard', action: function () {
    return view('alert.linkuploadcard', [
        "title" => "linkuploadcard"
    ]);
});

Route::get('/alert/alerthapusdoc', action: function () {
    return view('alert.alerthapusdoc', [
        "title" => "alerthapusdoc"
    ]);
});

Route::get('/alert/alerthapuslink', action: function () {
    return view('alert.alerthapuslink', [
        "title" => "alerthapuslink"
    ]);
});

Route::get('/alert/alertsuksesupload', action: function () {
    return view('alert.alertsuksesupload', [
        "title" => "alertsuksesupload"
    ]);
});

