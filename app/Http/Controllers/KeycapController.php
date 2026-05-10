<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeycapController extends Controller
{
    public function index()
    {
        $keycaps = [

            [
                'name' => 'GMK Olivia',
                'profile' => 'Cherry Profile',
                'material' => 'ABS',
                'price' => 'Rp 1,800,000',
                'image' => 'https://novelkeys.com/cdn/shop/files/GMK_CYL_OliviaNo3_16x9-1_3000x.jpg?v=1701457064'
            ],

            [
                'name' => 'PBTfans WoB',
                'profile' => 'OEM Profile',
                'material' => 'PBT',
                'price' => 'Rp 850,000',
                'image' => 'https://pbt.fans/cdn/shop/files/23_961ce80a-ef63-4d84-869d-a25e8bb807d2.webp?v=1684207105&width=1946'
            ],

            [
                'name' => 'Akko Black Pink',
                'profile' => 'ASA Profile',
                'material' => 'PBT',
                'price' => 'Rp 650,000',
                'image' => 'https://m.media-amazon.com/images/I/51FkUJKu4EL.jpg'
            ],

        ];

        return view('keycaps', compact('keycaps'));
    }
}