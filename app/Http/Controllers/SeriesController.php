<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SeriesController extends Controller
{
    public function index()
    {
        //fazendo a query na mão
        //$series = DB::select('SELECT nome FROM series;');
       
        //usando o eloquent para buscar todos
        //$series = Serie::all();

        $series = Serie::query()->orderBy('nome')->get(0);

        
        //return view('series.listar-series',['series'=>$series]);
        //para simplificar usamos a função compact
        return view('series.index',compact('series'));
    }
    public function create(){
        return view('series.create');
    }
    public function store(Request $request){
        $nomeSerie = $request->input('nome');
        //inserindo com comando SQL
        //DB::insert('INSERT INTO series (nome)VALUES(?)',[$nomeSerie]);
        
        //usando eloquent
        $serie = new Serie();
        $serie->nome=$nomeSerie;
        $serie->save();
        
        return redirect('/series');
            
    }
}
