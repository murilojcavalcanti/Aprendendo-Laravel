
<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2" >Adicionar</a>
    <ul class = "list-group">
         @foreach($series as $serie)
            <li class = "list-group-item"> {{ $serie->nome }}</li>
        
        
         @endforeach
        
    </ul>
    <!-- usando para acessar variaveis do php para o js-->
    <script>
        const series = {{Js::from($series)}}
    </script>
</x-layout> 
