<div class="d-flex justify-content-end">  
    <a href="{{ route('questionarios.inserir', [$processo->processo_id, 'pos_operatorio' => 1]) }}" class="btn btn-success mr-2">Sim</a>
    <a href="{{ route('questionarios.inserir', [$processo->processo_id, 'pos_operatorio' => 0]) }}" class="btn btn-danger">Não</a>
</div>
