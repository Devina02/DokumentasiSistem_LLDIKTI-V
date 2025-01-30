<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DocumentAdminController extends Controller
{
    public function index()
    {
        // Ambil semua project
        $projects = Project::paginate(6);
    
        // Menambahkan warna berdasarkan urutan
        $projects->each(function($project, $index) {
            $colors = ["#e0f7fa", "#fef3c7", "#d1fae5", "#fde2e2", "#e9d5ff", "#d1d5db"];
            $project->color = $colors[$index % count($colors)];
        });
    
        // Kirim ke view dokumenadmin
        return view('admin.dokumenadmin', compact('projects'));
    }
    
}
