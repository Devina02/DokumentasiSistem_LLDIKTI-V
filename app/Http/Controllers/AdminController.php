<?php

namespace App\Http\Controllers;
use App\Models\Dokument;
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
        $totalDocuments = Dokument::count(); // Menghitung jumlah dokumen
        $totalLinks = Tautan::count(); // Menghitung jumlah link
    
        // Kirim data ke view
        return view('admin.dashboardadmin', compact('title', 'totalProjects', 'totalDocuments', 'totalLinks'));
    }

    public function documents()
{
    $title = 'Dokumen Admin';
    $documents = Dokument::all(); // Ambil semua data dokumen
    
    return view('admin.dokumenadmin', compact('title', 'documents'));

}

    
}
