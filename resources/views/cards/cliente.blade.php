
<div class="col-12 col-lg-6">
    <div class="card" style="border-top:2px solid #3a9dd5;">
        <div class="card-header">
            <h5 class="card-title mb-0">Informações do Cliente</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Requerente</label>
                    <input type="text" class="form-control @error('cliente_nome') is-invalid @enderror" placeholder="Número do Processo" value="{{ old('cliente_nome') }}" name="cliente_nome">
                    @error('cliente_nome')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control @error('cliente_data_nascimento') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('cliente_data_nascimento') }}" name="cliente_data_nascimento">
                    @error('cliente_data_nascimento')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Gênero</label>
                    <input type="text" class="form-control @error('cliente_sexo') is-invalid @enderror" placeholder="Informe o CID" value="{{ old('cliente_sexo') }}" name="cliente_sexo">
                    @error('cliente_sexo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">RG</label>
                    <input type="text" class="form-control @error('cliente_rg') is-invalid @enderror" placeholder="Digite o RG do Cliente" value="{{ old('cliente_rg') }}" name="cliente_rg">
                    @error('cliente_rg')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div> 
            
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control @error('cliente_cpf') is-invalid @enderror" placeholder="Digite o CPF do Cliente" value="{{ old('cliente_cpf') }}" name="cliente_cpf">
                    @error('cliente_cpf')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control @error('cliente_email') is-invalid @enderror" placeholder="Digite o e-mail do Cliente" value="{{ old('cliente_email') }}" name="cliente_email">
                    @error('cliente_email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Estado Civil</label>
                    <input type="text" class="form-control @error('cliente_estado_civil') is-invalid @enderror" placeholder="Estado Civil" value="{{ old('cliente_estado_civil') }}" name="cliente_estado_civil">
                    @error('cliente_estado_civil')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control @error('cliente_telefone') is-invalid @enderror" placeholder="Digite o Telefone do Cliente" value="{{ old('cliente_telefone') }}" name="cliente_telefone">
                    @error('cliente_telefone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>