<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DocumentController extends Controller
{
    public function index()
    {
        // Ambil semua project
        $projects = Project::paginate(6);

        // Menambahkan warna berdasarkan urutan
        $projects->each(function($project, $index) {
            
            $colors = [
                "#e0f7fa", "#fef3c7", "#d1fae5", "#fde2e2", "#e9d5ff", "#d1d5db"
            ];

            // Menentukan warna
            $project->color = $colors[$index % count($colors)];
        });

        // Kirim data projects ke view
        return view('superadmin.dokumensuperadmin', compact('projects'));
    }

    // Fungsi untuk menghapus project
    public function delete($id_project)
{
    $project = Project::findOrFail($id_project);

    $project->tautan()->delete(); // Hapus link 
    $project->dokument()->delete(); // Hapus dokumen 

    // Hapus proyek
    $project->delete();

    // Kembalikan response JSON
    return response()->json([
        'success' => true,
        'message' => 'Project beserta data terkait berhasil dihapus.'
    ]);
}


    public function search(Request $request)
{
   // Ambil query pencarian
   $query = $request->input('search');
    
   if ($query) {
       $projects = Project::where('judul', 'like', '%' . $query . '%')->paginate(6)->onEachSide(1);
       
       // Menambahkan warna berdasarkan urutan
       $projects->each(function($project, $index) {
           $colors = [
               "#e0f7fa", "#fef3c7", "#d1fae5", "#fde2e2", "#e9d5ff", "#d1d5db"
           ];

           $project->color = $colors[$index % count($colors)];
       });

       // Jika tidak ada hasil pencarian
       if ($projects->isEmpty()) {
            return view('search', [
                'projects' => $projects,
                'message' => 'Tidak ada proyek dengan judul tersebut.'
            ]);
       }
   } else {
       // Jika tidak ada pencarian, kembalikan ke halaman superadmin.dokumensuperadmin
       return redirect()->route('superadmin.dokumensuperadmin');
   }
   
   // Kirim hasil pencarian ke view yang sama
   return view('search', compact('projects'));
}


    
}
