<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index()
    {
        $switches = [

            [
                'id' => 1,
                'name' => 'HMX Violet',
                'type' => 'Linear',
                'force' => '42g',
                'price' => 'Rp 5,500',
                'image' => 'https://kbd.news/pic/switch/beauty/182.jpg'
            ],

            [
                'id' => 2,
                'name' => 'Cherry MX Brown',
                'type' => 'Tactile',
                'force' => '55g',
                'price' => 'Rp 8,000',
                'image' => 'https://ae-pic-a1.aliexpress-media.com/kf/S2fd0897caa8b4ccc80c44882b1c07b37D.jpg'
            ],

            [
                'id' => 3,
                'name' => 'Akko Cream Blue',
                'type' => 'Clicky',
                'force' => '50g',
                'price' => 'Rp 6,500',
                'image' => 'https://computerlounge.co.nz/cdn/shop/files/40b7d934a36fedaffc0ab1a67e3ccbcbf1f6e4b8_54630_2.jpg?v=1752633312&width=1214'
            ],

        ];

        return view('switches', compact('switches'));
    }
}