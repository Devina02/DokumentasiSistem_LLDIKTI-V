<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking;
use App\Models\Dokument;
use App\Models\Tautan;
class TrackingController extends Controller
{
    
    public static function storeActivity($idUser, $aksi, $detail = null)
    {
        try {
            Tracking::create([
                'id_user' => $idUser,
                'aksi'    => $aksi,
                'detail'  => $detail
            ]);
            \Log::info('Aktivitas tersimpan', ['id_user' => $idUser, 'aksi' => $aksi]);
        } catch (\Exception $e) {
            \Log::error('Gagal menyimpan aktivitas: ' . $e->getMessage());
        }
    }
    
    
    // Contoh di controller yang membuka link
    public function openLink($idLink)
    {
        $tautan = Tautan::findOrFail($idLink);
    
        // Simpan aktivitas admin
        self::storeActivity(auth()->user()->id_user, 'lihat_link', $tautan->link);
    
        // Redirect ke link tujuan
        return redirect()->away($tautan->link);
    }
    
     // Method untuk melihat dokumen
     public function viewDocument($id_doc)
     {
         $dokument = Dokument::findOrFail($id_doc);
         // Catat aktivitas: lihat dokumen
         \App\Http\Controllers\TrackingController::storeActivity(auth()->user()->id_user, 'lihat_file', $dokument->nama_dokumen);
 
         // Redirect ke file dokumen (misalnya, dalam storage)
         return redirect(asset('storage/' . $dokument->dokumen));
     }
 
     // Method untuk download dokumen
     public function downloadDocument($id_doc)
     {
         $dokument = Dokument::findOrFail($id_doc);
         // Catat aktivitas: download dokumen
         \App\Http\Controllers\TrackingController::storeActivity(auth()->user()->id_user, 'download_file', $dokument->nama_dokumen);
 
         // Mengembalikan file download
         return response()->download(storage_path('app/public/' . $dokument->dokumen), $dokument->nama_dokumen . '.pdf');
     }

}