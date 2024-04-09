<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFromRequest;
use App\Models\Serie;
use App\Models\Series;
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
        //usando desa forma ele ja puxa as temposradas junto com as series
        //$series = Serie::query()->orderBy('nome')->with(['temporadas'])->get();
        $series = Series::query()->orderBy('nome')->get();

        //recuperando a mensagem de sucesso
        //$mensagemSucesso= $request->session()->get('mensagem.sucesso');
       
        //usando helper - recupera a mensagem de sucesso
        $mensagemSucesso= session('mensagem.sucesso');
        

        //Esquece a mensagem
//        $request->session()->forget('mensagem.sucesso');

        //return view('series.listar-series',['series'=>$series]);
        
        //para simplificar usamos a função compact
        return view('series.index',compact('series'))->with('mensagemSucesso',$mensagemSucesso);
    }
    public function create(){
        return view('series.create');
    }
    public function store(SeriesFromRequest $request){
      
        $serie= Series::create($request->all());
      
        return to_route('series.index')->with('mensagem.sucesso',"Série '{$serie-> nome}' adicionada com sucesso");
            
    }

    public function edit(Series $series){
        
        return view('series.edit')->with('serie',$series);
    }

    public function update (Series $series,SeriesFromRequest $request)
    {
        //dessa forma, quando tivermos mais atributos teremos que mudar repetir alinha 66 para todos
        //$series->nome=$request->nome;

        //nesse formato todos os atributos serão enviados
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso',"serie: {$series->nome} atualizada com sucesso!");    
    }



    public function destroy(Series $series,Request $request){
        $series->delete();
        //usando o metodo with a flash message já é usada
        return to_route('series.index')->with('mensagem.sucesso',"Série '{$series->nome}' removida com sucesso");
    }
    
}
