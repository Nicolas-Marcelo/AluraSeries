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

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
