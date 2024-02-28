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
                <div class="mb-3 col-md-12">
                    <label class="form-label">Número do Processo</label>
                    <input type="text" class="form-control @error('proc_numero_proc') is-invalid @enderror" placeholder="Número do Processo" value="{{ old('proc_numero_proc') }}" name="proc_numero_proc">
                    @error('proc_numero_proc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">CID 10</label>
                    <select type="text" class="form-control @error('cid_id') is-invalid @enderror" value="{{ old('cid_id') }}" name="cid_id">
                        <option value="">Selecione o CID</option>
                        @foreach ($cids as $cid)
                        <option value="{{ $cid->cid_id }}" @if (old('cid_id')==$cid->cid_id) {{ 'selected' }} @endif>
                            {{ $cid->cid_descricao.' - '.$cid->cid_codigo }}
                        </option>
                        @endforeach
                    </select>
                    @error('cid_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Data inicial dos sintomas</label>
                    <input type="date" class="form-control @error('proc_data_ini_doenca') is-invalid @enderror" value="{{ old('proc_data_ini_doenca') }}" name="proc_data_ini_doenca">
                    @error('proc_data_ini_doenca')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> 
            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Data de início das incapacidades</label>
                    <input type="date" class="form-control @error('proc_data_ini_incapacidade') is-invalid @enderror" value="{{ old('proc_data_ini_incapacidade') }}" name="proc_data_ini_incapacidade">
                    @error('proc_data_ini_incapacidade')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Parte do corpo atingida</label>
                    <input type="text" class="form-control @error('proc_parte_atingida') is-invalid @enderror" placeholder="Informe qual parte do corpo foi atingida" value="{{ old('proc_parte_atingida') }}" name="proc_parte_atingida">
                    @error('proc_parte_atingida')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">História</label>
                    <textarea class="form-control @error('proc_historia') is-invalid @enderror" placeholder="História do Cliente" name="proc_historia" rows="3">{{ old('proc_historia') }}</textarea>
                    @error('proc_historia')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Considerações</label>
                    <textarea class="form-control @error('proc_consideracoes') is-invalid @enderror" placeholder="Digite suas considerações" name="proc_consideracoes" rows="3">{{ old('proc_consideracoes') }}</textarea>
                    @error('proc_consideracoes')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>