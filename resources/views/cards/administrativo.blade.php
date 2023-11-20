{{-- @if ($errors->any())
<div class="alert alert-danger">Erro! :(
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}

<div class="col-12 col-lg-6">
    <div class="card" style="border-top:2px solid #3a9dd5;">
        <div class="card-header">
            <h5 class="card-title mb-0">Informações do Processo</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Número do Processo</label>
                    <input type="text" class="form-control @error('proc_adm_numero_proc') is-invalid @enderror" placeholder="Número do Processo" value="{{ old('proc_adm_numero_proc') }}" name="proc_adm_numero_proc">
                    @error('proc_adm_numero_proc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Médico</label>
                    <input type="text" class="form-control @error('proc_adm_nome_perito') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('proc_adm_nome_perito') }}" name="proc_adm_nome_perito">
                    @error('proc_adm_nome_perito')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">CID 10</label>
                    <input type="text" class="form-control @error('proc_adm_cid') is-invalid @enderror" placeholder="Informe o CID" value="{{ old('proc_adm_cid') }}" name="proc_adm_cid">
                    @error('proc_adm_cid')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Data inicial dos sintomas</label>
                    <input type="date" class="form-control @error('proc_adm_data_ini_doenca') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('proc_adm_data_ini_doenca') }}" name="proc_adm_data_ini_doenca">
                    @error('proc_adm_data_ini_doenca')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> 
            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Data de início das incapacidades</label>
                    <input type="date" class="form-control @error('proc_adm_data_ini_incapacidade') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('proc_adm_data_ini_incapacidade') }}" name="proc_adm_data_ini_incapacidade">
                    @error('proc_adm_data_ini_incapacidade')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Parte do corpo atingida</label>
                    <input type="text" class="form-control @error('proc_adm_parte_atingida') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('proc_adm_parte_atingida') }}" name="proc_adm_parte_atingida">
                    @error('proc_adm_parte_atingida')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">História</label>
                    <textarea class="form-control @error('proc_adm_historia') is-invalid @enderror" placeholder="História do Cliente" name="proc_adm_historia" rows="3">{{ old('proc_adm_historia') }}</textarea>
                    @error('proc_adm_historia')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Considerações</label>
                    <textarea class="form-control @error('proc_adm_consideracoes') is-invalid @enderror" placeholder="Digite suas considerações" name="proc_adm_consideracoes" rows="3">{{ old('proc_adm_consideracoes') }}</textarea>
                    @error('proc_adm_consideracoes')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>