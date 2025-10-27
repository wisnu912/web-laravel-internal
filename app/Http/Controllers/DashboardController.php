<?php

namespace App\Http\Controllers;

use App\Models\upVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {
        $video = upVideo::all();
        return view('Dashboard.dashboard' , compact('video'));
    }


    public function allVideo()
    {
        $videos = upVideo::all();

      return view('Dashboard.AllVideoMove' , compact('videos'));
    }
}
