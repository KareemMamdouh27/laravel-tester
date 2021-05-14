<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Events\VideoVewer;

class vedioEvent extends Controller
{
    public function getVedio()
    {
        $Video = Video::first();
        event(new VideoVewer($Video));
        return view('video') -> with('video',$Video) ;
    }
}
