
<div class="col-12 col-lg-6">
    <div class="card" style="border-top:2px solid #3a9dd5;">
        <div class="card-header">
            <h5 class="card-title mb-0">Informações do Cliente</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Requerente</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Número do Processo" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Gênero</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Informe o CID" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">RG</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Digite o RG do Cliente" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> 
            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">CPF</label>
                    <input type="date" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Digite o CPF do Cliente" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Digite o e-mail do Cliente" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Estado Civil</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Estado Civil" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Digite o Telefone do Cliente" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>