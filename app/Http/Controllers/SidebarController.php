<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SidebarController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil user yang sedang login
        $sidebar = $user->role == 'superadmin' ? 'superadmin' : 'admin'; // Tentukan sidebar berdasarkan role

        return view('partials.sidebar', compact('sidebar'));
       
    }
}
