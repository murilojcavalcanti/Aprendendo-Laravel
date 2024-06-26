<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index( Series $series){

        
        $seasons = $series->seasons()->with('episodes')->get();
        //dd($seasons[0]);
        /*query com eager loading
        
        $seasons = Season::query()
        ->with('episodes')
        ->where('series_id', $series)
        ->get();*/

        return view('seasons.index')->with('seasons',$seasons)->with('series',$series);
    
    }   
}
