<div class="col-md-12">
    <div>
        <div class="card">
            <div class="card-header" style="border-top:2px solid #54a9af;">
                <h5 class="card-title mb-0">Informações do Cliente</h5>
            </div>
            <div class="card-body d-flex flex-column gap-3">

                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Requerente</label>
                            <input id="cliente_nome" type="text" maxlength="50" class="form-control  @error('cliente_nome') is-invalid @enderror" placeholder="Digite o nome do Requerente" value="{{old('cliente_nome')}}" name="cliente_nome">
                            @error('cliente_nome')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                            
                        <div class="col-md-4">
                            <label class="form-label">Nascimento</label>
                            <input id="cliente_data_nascimento" type="date" maxlength="14" class="form-control  @error('cliente_data_nascimento') is-invalid @enderror" value="{{old('cliente_data_nascimento')}}" name="cliente_data_nascimento">
                            @error('cliente_data_nascimento')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Genero</label>
                            <select class="form-control @error('cliente_sexo') is-invalid @enderror" name="cliente_sexo">
                                <option value="" selected disabled> Selecione o Genero do Cliente</option>
                                <option value="1" @if (old('cliente_sexo')=='1') {{ 'selected '}} @endif> Masculino </option>
                                <option value="2" @if (old('cliente_sexo')=='2') {{ 'selected '}} @endif> Feminino </option>
                            </select>
                            @error('cliente_sexo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">RG</label>
                            <input id="cliente_rg" type="text" maxlength="14" class="form-control  @error('cliente_rg') is-invalid @enderror" placeholder="Digite o seu RG" value="{{old('cliente_rg')}}" name="cliente_rg">
                            @error('cliente_rg')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                            
                        <div class="col-md-4">
                            <label class="form-label">CPF</label>
                            <input id="cliente_cpf" type="text" maxlength="14" class="form-control  @error('cliente_cpf') is-invalid @enderror" placeholder="Digite o CPF do cliente" value="{{old('cliente_cpf')}}" name="cliente_cpf">
                            @error('cliente_cpf')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                            
                        <div class="col-md-4">
                            <label class="form-label">Email</label>
                            <input id="cliente_email" type="text" maxlength="100" class="form-control  @error('cliente_email') is-invalid @enderror" placeholder="Digite o Email do Cliente" value="{{old('cliente_email')}}" name="cliente_email">
                            @error('cliente_email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Estado Civil</label>
                            <select class="form-control @error('cliente_estado_civil') is-invalid @enderror" name="cliente_estado_civil">
                                <option value="" selected disabled> Selecione o Estado Civil do Cliente</option>
                                <option value="1" @if (old('cliente_estado_civil')=='1') {{ 'selected '}} @endif> Solteiro </option>
                                <option value="2" @if (old('cliente_estado_civil')=='2') {{ 'selected '}} @endif> Casado </option>
                                <option value="3" @if (old('cliente_estado_civil')=='3') {{ 'selected '}} @endif> Separado </option>
                                <option value="4" @if (old('cliente_estado_civil')=='4') {{ 'selected '}} @endif> Divorciado </option>
                                <option value="5" @if (old('cliente_estado_civil')=='5') {{ 'selected '}} @endif> Viúvo </option>
                            </select>
                            @error('cliente_estado_civil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Telefone</label>
                            <input id="cliente_telefone" type="text" maxlength="20" class="form-control  @error('cliente_telefone') is-invalid @enderror" placeholder="Digite o Telefone do Cliente" value="{{old('cliente_telefone')}}" name="cliente_telefone">
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
    </div>
</div>
<br>