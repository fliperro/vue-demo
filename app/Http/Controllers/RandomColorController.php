<?php

namespace App\Http\Controllers;

class RandomColorController extends Controller
{
    public function __invoke()
    {
        return [
            'color' => '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)
        ];
    }
}
