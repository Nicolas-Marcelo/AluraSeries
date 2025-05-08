<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesControllers extends Controller
{
    public function listarSeries () {
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
        echo $html;
    }
}
