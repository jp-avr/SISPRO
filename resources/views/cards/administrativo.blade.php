
<div class="col-12 col-lg-6">
    <div class="card" style="border-top:2px solid #3a9dd5;">
        <div class="card-header">
            <h5 class="card-title mb-0">Informações do Processo</h5>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Número do Processo</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Número do Processo" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Médico</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">CID 10</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Informe o CID" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Data inicial dos sintomas</label>
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
                    <label class="form-label">Data de início das incapacidades</label>
                    <input type="date" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Parte do corpo atingida</label>
                    <input type="text" class="form-control @error('prds_numero_processo') is-invalid @enderror" placeholder="Nome do Médico" value="{{ old('prds_numero_processo') }}" name="prds_numero_processo">
                    @error('prds_numero_processo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">História</label>
                    <textarea class="form-control @error('prds_objetivo') is-invalid @enderror" placeholder="História do Cliente" value="{{ old('prds_objetivo') }}" name="prds_objetivo" rows="3"></textarea>
                    @error('prds_objetivo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Considerações</label>
                    <textarea class="form-control @error('prds_justificativa') is-invalid @enderror" placeholder="Digite suas considerações" value="{{ old('prds_justificativa') }}" name="prds_justificativa" rows="3"></textarea>
                    @error('prds_justificativa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>