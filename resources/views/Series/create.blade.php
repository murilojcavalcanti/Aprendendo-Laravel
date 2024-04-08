<x-layout title="Nova série">                          {{-- pega o caracter da ultima requisição--}}
 <x-series.form :action="route('series.store')"  {{--:nome ="old('nome')" :update ="false" --}}/> 
</x-layout> 