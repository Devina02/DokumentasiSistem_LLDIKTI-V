<?php
namespace App\Http\Controllers;

use App\Models\Dokument;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tautan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    // Halaman Dashboard Super Admin
    public function index()
    {
        $title = 'Dashboard Super Admin';

        // Hitung jumlah akun admin yang aktif
        $activeAdmins = User::where('role', 'admin')
            ->whereNotNull('last_active') // Misalnya, hanya akun yang aktif
            ->count();

        // Hitung jumlah project, dokumen, dan link
        $totalProjects = Project::count(); 
        $totalDocuments = Dokument::count();
        $totalLinks = tautan::count(); 
         // Ambil data tracking aktivitas admin
         $trackingRecords = Tracking::with('user')->orderBy('created_at', 'desc')->paginate(3)->onEachSide(1);

         // Kirim semua data ke view dashboard superadmin
         return view('superadmin.dashboardsuperadmin', compact(
             'title',
             'activeAdmins',
             'totalProjects',
             'totalDocuments',
             'totalLinks',
             'trackingRecords'
         ));
     }

    public function showDashboard()
    {
        // Ambil jumlah akun admin aktif
        $activeAdmins = User::where('role', 'admin')->where('is_active', true)->count();

        // Kirim data ke view
        return view('superadmin.dashboardsuperadmin', compact('activeAdmins'));
    }

    // Menampilkan daftar akun yang bisa dikelola
    public function kelolaakun(Request $request)
    {
        $title = 'Kelola Akun Super Admin';
        $search = $request->input('search');

        // Pastikan akun admin diurutkan berdasarkan created_at descending (terbaru dibuat di atas)
        $users = User::where('role', 'admin')
            ->when($search, function ($query) use ($search) {
                return $query->where('username', 'like', '%' . $search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        return view('superadmin.kelolaakun', compact('title', 'users'));
    }

    // Menampilkan dokumen untuk superadmin
    public function documents()
    {
        $title = 'Documents Super Admin';
        $dokumen = Post::all();

        return view('superadmin.dokumensuperadmin', compact('title', 'dokumen'));
    }

    // Menambah akun baru
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username|min:2|regex:/^\S*$/u',
            'password' => 'required|min:2',
        ], [
            'username.unique' => 'Username sudah terdaftar.',
            'username.regex' => 'Username tidak boleh mengandung spasi.',
        ]);

        User::create([
            'id_user' => Str::uuid()->toString(),
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'last_active' => now(),
        ]);

        return redirect()->route('superadmin.kelolaakun.index')->with('success', 'Akun berhasil dibuat.');
    }


    // Menghapus akun
    public function destroy($id_user)
    {
        $user = User::findOrFail($id_user);
        $user->delete();

        return redirect()->route('superadmin.kelolaakun.index')->with('success', 'Akun berhasil dihapus.');

    }


    // Memperbarui akun
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // Validasi jika ada perubahan pada username dan password
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:2',
        ]);

        $isChanged = false;

        // Cek apakah username berubah
        if ($user->username !== $request->input('username')) {
            $user->username = $request->input('username');
            $isChanged = true;
        }

        // Cek apakah password berubah
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
            $isChanged = true;
        }

        // Simpan perubahan jika ada yang berubah
        if ($isChanged) {
            $user->save();
            return redirect()->route('superadmin.kelolaakun.index')->with('success', 'Akun berhasil diperbarui!');
        }

        // Jika tidak ada perubahan
        return redirect()->route('superadmin.kelolaakun.index')->with('warning', 'Tidak ada perubahan yang dilakukan.');
    }

    public function login(Request $request)
    {
        // Proses login
        if (Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();
            // Update last_active saat login
            if ($user->role === 'admin') {
                $user->update([
                    'last_active' => now(),
                ]);
            }
            return redirect()->route('superadmin.index')->with('success', 'Login berhasil.');
        }

        return back()->withErrors('Username atau password salah.');
    }
    public function logout(Request $request)
    {
        $user = Auth::user();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil.');
    }

}