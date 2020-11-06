<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Programming Unpas'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me!'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. pangkalan loji',
                    'kota' => 'Karawang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jln SetiaBudhi 193',
                    'kota' => 'Bandung'
                ]

            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
