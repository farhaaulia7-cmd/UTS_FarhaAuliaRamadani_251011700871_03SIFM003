<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() 
    {
        $toko = [
            'nama'     => 'Toko Tanaman Hias',
            'alamat'   => 'Jl. Haji Gedad, Tangerang',
            'telepon'  => '0895329509099',
            'email'    => 'tanamanhias@gmail.com',
            'jam_buka' => 'Senin - Minggu (08.00 - 17.00 WIB)',
            'status'   => 'Buka / Melayani Pengiriman',
        ];

        return view('page.contact', compact('toko'));
    }
}