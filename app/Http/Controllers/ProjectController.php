<?php

namespace App\Http\Controllers;

use App\Models\Dokument;
use App\Models\Tautan;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

        return redirect()->back()->with('success', 'Project berhasil disimpan!');
    }

    public function edit($id)
    {
        $project = Project::with(['tautan', 'dokument'])->findOrFail($id);
        return view('superadmin.editproject', compact('project'));
    }

    public function update(Request $request, $id_project)
    {
        // dd($request->all());
        $validated = $request->validate([
            'judul' => 'required|string|max:255', 
            'project_type' => 'required|string|max:255', 
        ]);
    
        $project = Project::findOrFail($id_project);
    
        $project->judul = $request->input('judul');
        $project->project_type = $request->input('project_type');
        $project->save();
    
        if ($request->has('tautan')) {
            foreach ($request->tautan as $id_link => $linkData) {
                $link = Tautan::find($id_link);
                if ($link) {
                    // Update link yang sudah ada jika nama_link tidak kosong
                    if (!empty($linkData['nama_link'])) {
                        $link->update([
                            'nama_link' => $linkData['nama_link'],
                            'link' => $linkData['link']
                        ]);
                    }
                }
            }
        }
    
        // Handle link baru (pastikan nama_link tidak kosong)
        if ($request->has('new_link')) {
            foreach ($request->new_link as $newLinkData) {
                // Pastikan 'nama_link' dan 'link' tidak kosong sebelum menambah
                if (!empty($newLinkData['nama_link']) && !empty($newLinkData['link'])) {
                    Tautan::create([
                        'id_project' => $project->id_project,
                        'nama_link' => $newLinkData['nama_link'],
                        'link' => $newLinkData['link'],
                    ]);
                }
            }
        }
    
       // Handle dokumen yang ada
       if ($request->has('dokument')) {
        foreach ($request->dokument as $id => $dokumen) {
            if (!empty($dokumen['nama_dokumen'])) {
                Dokument::where('id_doc', $id)->update([
                    'nama_dokumen' => $dokumen['nama_dokumen'],
                ]);                
            }
            if ($request->has('dokument')) {
                foreach ($request->dokument as $id =>  $dokumen) {
                    if (!empty($dokumen['dokumen'])) {
                        $path = $dokumen['dokumen']->store('dokumen', 'public'); // Menyimpan file ke storage
                        Dokument::where('id_doc',$id)->update( [
                            'dokumen' => $path,
                        ]);
                    
                        
                    }
                }
            }
        }
        
    }

    
    if ($request->has('new_dokumen')) {
        foreach ($request->new_dokumen as $newdokumenData) {
            if (!empty($newdokumenData['nama_dokumen']) && !empty($newdokumenData['dokumen'])) {
                // Pastikan $project->id_project ada nilainya
                $path = $newdokumenData['dokumen']->store('dokumen', 'public');
                Dokument::create([
                    'id_project' => $project->id_project,  // pastikan ini benar
                    'nama_dokumen' => $newdokumenData['nama_dokumen'],
                    'dokumen' => $path,
                ]);
            }
        }
    }
    // Menampilkan pemberitahuan sukses
    Session::flash('success', 'Project updated successfully!');

    return redirect()->route('superadmin.editproject', $id_project)->with('success', 'Project updated successfully!');
}
    

    public function destroyLink($id_link)
    {
        $link = Tautan::findOrFail($id_link);
        $link->delete(); // Hapus tautan dari database
    
        Session::flash('success', 'Link berhasil dihapus!');
    }
    
    public function destroyDokumen($id_doc)
    {
        $dokumen = Dokument::findOrFail($id_doc);
    
        // Hapus file dokumen dari storage
        Storage::delete('public/' . $dokumen->dokumen);
    
        $dokumen->delete(); // Hapus dokumen dari database
        Session::flash('success', 'Dokumen berhasil dihapus!');
    }
    


}
