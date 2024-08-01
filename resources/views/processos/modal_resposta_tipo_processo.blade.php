<style>
  .modal-custom {
      background-color: #ffffff; /* Branco */
      color: #343a40; /* Preto */
      border: 1px solid #dee2e6; /* Cinza claro */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
  }
  .modal-header-custom {
      background-color: #f8f9fa; /* Cinza claro */
      color: #343a40; /* Preto */
      border-bottom: 1px solid #dee2e6; /* Borda inferior */
      padding: 16px; /* Espaçamento interno */
  }
  .btn-close-custom {
      background-color: transparent;
      border: none;
      font-size: 1.5rem;
      opacity: 0.5;
  }
  .btn-close-custom:hover {
      opacity: 1;
  }
  .modal-body-custom {
      background-color: #ffffff; /* Branco */
      padding: 16px; /* Espaçamento interno */
  }
</style>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop-processo-{{ $cliente->getKey() }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
      <div class="modal-content modal-custom">
          <div class="modal-header modal-header-custom">
              <h3 class="modal-title" id="staticBackdropLabel">Qual será o tipo de processo?</h3>
              <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                  <i class="fas fa-times"></i>
              </button>
          </div>
          <div class="modal-body modal-body-custom">
              @include('modais.modal_tipo_processo')
          </div>
      </div>
  </div>
</div>