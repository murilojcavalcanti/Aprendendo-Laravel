<x-layout title="Temporadas de {!! $series->nome!!}">
    <ul class = "list-group">
        @foreach ($seasons as $season)
            <li class = "list-group-item d-flex justify-content-between align-itens-center">
                <a href="{{ route('episodes.index',$season->id) }}">
                    Temporadas: {{ $season-> number }}
                </a> 
                <span class="d-flex">
                     {{ $season->episodes->count()}}       
                </span>
            </li>
        @endforeach

    </ul>
</x-layout>
