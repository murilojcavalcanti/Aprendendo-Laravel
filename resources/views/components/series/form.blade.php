<form action="{{$action}}" method="post">
@csrf
<!--verifica se é uma atualização se for usar o metodo put-->
@isset($update)
    @method('PUT')
@endisset
    <div class="mb-3">

    <label for="nome" class="form-label">Nome:</label>
    <input type="text" 
           id="nome" 
           name="nome"
           class="form-control"
            @isset($nome) value="{{ $nome }}" @endisset>
    </div>

    <button type="submit" class= "btn btn-primary">Adicionar</button>
</form>