<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\Project;
use App\Models\Tautan;
use App\Models\Dokumen;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Admin';
    
        $totalProjects = Project::count(); // Menghitung jumlah project
        $totalDocuments = Dokumen::count(); // Menghitung jumlah dokumen
        $totalLinks = Tautan::count(); // Menghitung jumlah link
    
        // Kirim data ke view
        return view('admin.dashboardadmin', compact('title', 'totalProjects', 'totalDocuments', 'totalLinks'));
    }
    
    public function documents()
    {
        $title = 'Documents Admin';
        $dokumen = post::all(); // Mengambil data dummy dari model post
        return view('admin.dokumenadmin', compact('title', 'dokumen'));  // Mengirim data ke view
    }

    
}
