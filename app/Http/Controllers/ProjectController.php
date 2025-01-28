<?php

namespace App\Http\Controllers;

use App\Models\Dokument;
use App\Models\Tautan;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Link;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function create()
    {
        return view('superadmin.uploaddoc');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'project_type' => 'required|in:Mobile,Website',
            'links' => 'nullable|array',
            'links.*.nama_link' => 'nullable|string|max:255',
            'links.*.link' => 'nullable|url|max:255',
            'dokumen' => 'nullable|array',
            'dokumen.*.nama_doc' => 'nullable|string|max:255',
            'dokumen.*.document' => 'nullable|file|mimes:pdf|max:2048',
        ]);
        
        // Menyimpan project
        $project = Project::create([
            'judul' => $request->judul,
            'project_type' => $request->project_type,
        ]);

        // Menyimpan links jika ada
        if ($request->has('links')) {
            foreach ($request->links as $link) {
                if (!empty($link['nama_link']) && !empty($link['link'])) {
                    Tautan::create([
                        'id_project' => $project->id_project,
                        'nama_link' => $link['nama_link'],
                        'link' => $link['link'],
                    ]);
                }
            }
        }  
        

        if ($request->has('dokumen')) {
            foreach ($request->dokumen as $doc) {
                if (isset($doc['document']) && $doc['document'] instanceof \Illuminate\Http\UploadedFile) {
                    $path = $doc['document']->store('dokumen', 'public'); // Menyimpan file ke storage
                    Dokument::create([
                        'id_project' => $project->id_project,
                        'nama_dokumen' => $doc['nama_doc'] ?? 'Untitled Document', // Nama default jika kosong
                        'dokumen' => $path,
                    ]);
                }
            }
        }
        

        // Menampilkan pemberitahuan sukses
        Session::flash('success', 'Project berhasil disimpan!');

        // Redirect kembali ke halaman upload
        return redirect()->route('uploaddoc');
    }

}
