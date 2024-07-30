@foreach($clientes as $cliente)
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop-processo-{{ $cliente->getKey() }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
      <div class="modal-content">
        <div class="modal-header">
          
          <h3 class="modal-title" id="staticBackdropLabel">Informações do Processo</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @include('modais.modal_info_processo_adm')
        </div>
      </div>
    </div>
  </div>
@endforeach