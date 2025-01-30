<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Tautan;
use App\Models\Dokument;

class DetailprojectController extends Controller
{
    public function show($id_project)
{
    // Mengambil data project berdasarkan ID
    $project = Project::findOrFail($id_project);

    // Mendapatkan data tautan dan dokumen terkait dengan project
    $tautans = Tautan::where('id_project', $id_project)->get();
    $dokuments = Dokument::where('id_project', $id_project)->get();

    // Mengembalikan view 'detailproject' dengan data project, tautans, dan dokuments
    return view('detailproject', compact('project', 'tautans', 'dokuments'));
}

}
