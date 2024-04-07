<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //fazendo a query na mão
        //$series = DB::select('SELECT nome FROM series;');
       
        //usando o eloquent para buscar todos
        //$series = Serie::all();

        $series = Serie::query()->orderBy('nome')->get();

        //recuperando a mensagem de sucesso
        //$mensagemSucesso= $request->session()->get('mensagem.sucesso');
       
        //usando helper
        $mensagemSucesso= session('mensagem.sucesso');
        

        //Esquece a mensagem
        $request->session()->forget('mensagem.sucesso');

        //return view('series.listar-series',['series'=>$series]);
        
        //para simplificar usamos a função compact
        return view('series.index',compact('series'))->with('mensagemSucesso',$mensagemSucesso);
    }
    public function create(){
        return view('series.create');
    }
    public function store(Request $request){
    //$nomeSerie = $request->input('nome');
        //inserindo com comando SQL
        //DB::insert('INSERT INTO series (nome)VALUES(?)',[$nomeSerie]);
        
        //usando eloquent
        //$serie = new Serie();
        //$serie->nome=$nomeSerie;
        //$serie->save();
        
        $serie= Serie::create($request->all());
        //outras sintaxes
        //return redirect(route('series.index'));
        //return redirect()->route('series.index');
        
        $request->session()-> put('mensagem.sucesso',"Série '{$serie-> nome}' adicionada com sucesso");
        return to_route('series.index');
            
    }
    public function destroy(Request $request){
        //dd($request->serie);
        Serie::destroy($request->series);
        
        //Cria uma mensagem de sucesso depois da remoção
        $request->session()-> put('mensagem.sucesso','Série removida com sucesso');
        
        //Usando o flash a mensagem é esquecida automaticamente.
        //$request->session()-> flash('mensagem.sucesso','Série removida com sucesso');
        
        return to_route('series.index');
    }
}
