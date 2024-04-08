<x-layout title="Editar Serie: '{{$serie->nome}}' ">
                        <!--Parametro de qual serie será atualizada-->
<x-series.form :action="route('series.update',$serie->id)" :nome="$serie ->nome" :update="true"/>
</x-layout>