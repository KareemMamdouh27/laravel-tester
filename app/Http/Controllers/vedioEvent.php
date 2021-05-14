<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vedioEvent extends Controller
{
    public function getVedio()
    {
        return view('video');
    }
}
