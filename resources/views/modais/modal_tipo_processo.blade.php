<div class="d-flex justify-content-end">  
    <a href="{{ route('processo_administrativo.inserir', [$cliente->cliente_id]) }}" class="btn btn-success mr-2">Administrativo</a>
    <a href="{{ route('processo_judiciario.inserir', [$cliente->cliente_id]) }}" class="btn btn-danger">Judiciário</a>
</div>
