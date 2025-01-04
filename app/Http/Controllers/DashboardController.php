<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total_user = User::count();
        $total_administrator = User::where('role_id', '=', 1)->count();
        $total_verifikator = User::where('role_id', '=', 2)->count();
        $total_operator = User::where('role_id', '=', 3)->count();

        $total_masjid_terverifikasi = 0;
        $total_masjid = 0;
        $total_musholah = 0;

        $total_berita_terverifikasi = 0;
        $total_berita = 0;
        $total_taushiyah = 0;

        return view(
            'cms.dashboard.index',
            compact(
                'total_user',
                'total_administrator',
                'total_verifikator',
                'total_operator',
                'total_masjid_terverifikasi',
                'total_masjid',
                'total_musholah',
                'total_berita_terverifikasi',
                'total_berita',
                'total_taushiyah'
            )
        );
    }
}
