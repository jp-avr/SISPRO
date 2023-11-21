@foreach($processos as $processo)
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="staticBackdrop-{{ $processo->getKey() }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="staticBackdropLabel">Informações do Processo</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @include('modais.modal_info_cliente')
          <div class="dropdown-divider"></div>
          @include('modais.modal_info_processo_adm')
        </div>
      </div>
    </div>
  </div>
@endforeach