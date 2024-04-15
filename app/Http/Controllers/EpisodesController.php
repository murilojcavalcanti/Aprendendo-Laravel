<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function index(Season $season)
    {
        //return view('seasons.index')->with('seasons',$seasons)->with('series',$series);
        return view('episodes.index', ['episodes'=>$season->episodes]);
    }
}
