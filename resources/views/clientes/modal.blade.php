@foreach($processos as $processo)
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop-{{ $processo->getKey() }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        @include('modais.modal_info_cliente')
    </div>
@endforeach