
@foreach($clientes as $cliente)
    <div class="col-12 col-lg-6">
        <div class="card" style="border-top:2px solid #3a9dd5;">
            <div class="card-header">
                <h5 class="card-title mb-0">Informações do Cliente</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Requerente</label>
                        <input type="text" class="form-control @error('cliente_nome') is-invalid @enderror" placeholder="Nome do Requerente" value="{{ $cliente->cliente_nome ?? old('cliente_nome') }}" name="cliente_nome">
                        @error('cliente_nome')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control @error('cliente_data_nascimento') is-invalid @enderror" placeholder="Nome do Médico" value="{{ $cliente->cliente_data_nascimento ?? old('cliente_data_nascimento') }}" name="cliente_data_nascimento">
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
                        <select class="form-control @error('cliente_sexo') is-invalid @enderror" placeholder="Gênero do Requerente" name="cliente_sexo">
                            <option value="" selected disabled> Selecione o gênero adequado </option>
                            
                            <option value="0" @if ($cliente->cliente_sexo =='0' ?? old('cliente_sexo')=='0') {{ 'selected' }} @endif> Ignorado </option>
                            <option value="1" @if ($cliente->cliente_sexo =='1' ?? old('cliente_sexo')=='1') {{ 'selected' }} @endif> Masculino </option>
                            <option value="2" @if ($cliente->cliente_sexo =='2' ?? old('cliente_sexo')=='2') {{ 'selected' }} @endif> Feminino </option>
                        </select>

                        @error('cliente_sexo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">RG</label>
                        <input type="text" class="form-control @error('cliente_rg') is-invalid @enderror" placeholder="Digite o RG do Cliente" value="{{ $cliente->cliente_rg ?? old('cliente_rg') }}" name="cliente_rg">
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
                        <input type="text" class="form-control @error('cliente_cpf') is-invalid @enderror" placeholder="Digite o CPF do Cliente" value="{{ $cliente->cliente_cpf ?? old('cliente_cpf') }}" name="cliente_cpf">
                        @error('cliente_cpf')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control @error('cliente_email') is-invalid @enderror" placeholder="Digite o e-mail do Cliente" value="{{ $cliente->cliente_email ?? old('cliente_email') }}" name="cliente_email">
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
                        <select type="text" class="form-control @error('estado_civil_id') is-invalid @enderror" name="estado_civil_id">
                            <option value="" selected disabled>Selecione o seu Estado Civil</option>
                            @foreach ($estados_civis as $estado_civil)
                            <option value="{{ $estado_civil->estado_civil_id }}" @if ($cliente->estadoCivil->estado_civil_id==$estado_civil->estado_civil_id ?? old('estado_civil_id')==$estado_civil->estado_civil_id) {{ 'selected' }} @endif>
                                {{ $estado_civil->estado_civil_nome }}
                            </option>
                            @endforeach
                        </select>
                        @error('estado_civil_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control @error('cliente_telefone') is-invalid @enderror" placeholder="Digite o Telefone do Cliente" value="{{ $cliente->cliente_telefone ?? old('cliente_telefone') }}" name="cliente_telefone">
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
@endforeach