@foreach($processos as $processo)
<!-- Button trigger modal -->
<button type="button" style="border: 0; background: inherit;" class="align-middle me-1 text-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="align-middle me-1 text-primary" data-feather="maximize-2"></i>
  </button>
  
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
@endforeach