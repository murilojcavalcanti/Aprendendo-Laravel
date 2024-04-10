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
        $series = Series::query()->orderBy('nome')->get();
        $mensagemSucesso= session('mensagem.sucesso');
        
        return view('series.index',compact('series'))->with('mensagemSucesso',$mensagemSucesso);
    }
    public function create(){
        return view('series.create');
    }
    public function store(SeriesFromRequest $request){
        $serie= Series::create($request->all());
        for($i=1;$i<=$request->seasonsQty;$i++){
            $season= $serie->Seasons()->create([
               'number'=>$i,
            ]);
            for($j=1;$j<=$request->episodesPerSeason;$j++){
                $season->Episodes()->create([
                    'number'=>$j,
                ]);
            }
        }
      
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
