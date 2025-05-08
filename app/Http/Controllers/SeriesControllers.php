<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesControllers extends Controller
{
    public function index (Request $request) {
        $series = [
            'The Last Of Us',
            'The Flash',
            'Grays Of Anatomy'
        ];

        return view('series.index', compact('series'));
    }
}
