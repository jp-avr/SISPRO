@foreach($clientes as $cliente)
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="staticBackdrop-{{ $cliente->getKey() }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <i data-feather="user"></i>
          <h3 class="modal-title" id="staticBackdropLabel">Informações Cliente</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @include('modais.modal_info_cliente')
        </div>
      </div>
    </div>
  </div>
@endforeach