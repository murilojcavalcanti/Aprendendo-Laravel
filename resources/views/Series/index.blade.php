<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class = "list-group">
        @foreach ($series as $serie)
            <li class = "list-group-item d-flex justify-content-between align-itens-center">
                {{ $serie->nome }}
                <span class="d-flex">
                    <!-- /series/id/edit essa é uma rota que o route::resource ja cria-->    
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">E</a>
                
                    <form action ="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')<!--Dessa forma informamos por baixo dos panos que o metodo é o delete e não post-->
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </span>
            </li>
        @endforeach

    </ul>
    <!-- usando para acessar variaveis do php para o js-->
    <script>
        const series = {{ Js::from($series) }}
    </script>
</x-layout>
