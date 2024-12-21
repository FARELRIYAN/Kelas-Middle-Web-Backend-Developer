<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Farel Riyan Fajar Riyadi',
            'photo' => asset('image/profil.jpg'), // Path foto
            'alamat' => 'Jl. Jempono, Bangetayu Kulon, Kec. Genuk, Kota Semarang, Jawa Tengah 50115',
            'sekolah' => 'SMK Negeri 10 Semarang',
            'bio' => 'Ketidaksempurnaan dan kegagalan saya adalah berkah dari Tuhan, sama seperti pencapaian dan bakat saya.'
        ];

        return view('profile', compact('data'));
    }
}
