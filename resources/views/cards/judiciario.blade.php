<main class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">                                
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-5">
                                <label class="form-label">Nº do Processo</label>
                                <input id="numero_processo" type="text" maxlength="14" class="form-control  @error('proc_numero_proc') is-invalid @enderror" placeholder="Digite o nome do Requerente" value="{{old('proc_numero_proc')}}" name="proc_numero_proc">
                                @error('proc_numero_proc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="col-md-5">
                                <label class="form-label">CID10</label>
                                <input id="cid_id" type="text" maxlength="14" class="form-control  @error('cid_id') is-invalid @enderror" placeholder="Digite o CID" value="{{old('cid_id')}}" name="cid_id">
                                @error('cid_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Data Inicial dos Sintomas</label>
                                <input id="rg" type="date" maxlength="14" class="form-control  @error('proc_judiciarios_data_ini_doenca') is-invalid @enderror" value="{{old('proc_judiciarios_data_ini_doenca')}}" name="proc_judiciarios_data_ini_doenca">
                                @error('proc_judiciarios_data_ini_doenca')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Data de Início da Incapacidade</label>
                                <input id="proc_judiciarios_data_ini_incapacidade" type="date" maxlength="14" class="form-control  @error('proc_judiciarios_data_ini_incapacidade') is-invalid @enderror" value="{{old('proc_judiciarios_data_ini_incapacidade')}}" name="proc_judiciarios_data_ini_incapacidade">
                                @error('proc_judiciarios_data_ini_incapacidade')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Parte do corpo atingida</label>
                                <input id="proc_judiciarios_parte_atingida" type="text" maxlength="100" class="form-control  @error('proc_judiciarios_parte_atingida') is-invalid @enderror" placeholder="Digite a parte atingida" value="{{old('proc_judiciarios_parte_atingida')}}" name="proc_judiciarios_parte_atingida">
                                @error('proc_judiciarios_parte_atingida')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">História</label>
                                <textarea id="proc_judiciarios_historia" type="text" maxlength="500" class="form-control  @error('proc_judiciarios_historia') is-invalid @enderror" placeholder="Digite o seu RG" value="{{old('proc_judiciarios_historia')}}" name="proc_judiciarios_historia"></textarea>
                                @error('proc_judiciarios_historia')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Considerações</label>
                                <textarea id="proc_judiciarios_consideracoes" type="text" maxlength="500" class="form-control  @error('proc_judiciarios_consideracoes') is-invalid @enderror" placeholder="Digite o seu RG" value="{{old('proc_judiciarios_consideracoes')}}" name="proc_judiciarios_consideracoes"></textarea>
                                @error('proc_judiciarios_consideracoes')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> 

                            <div class="col-md-6">
                                <input class="mt-2 @error('encaminhar') is-invalid @enderror" name="encaminhar" type="file" id="" accept=".jpeg, .jpg, .png, .pdf">
                                @error('encaminhar')
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
</main>
<main class="py-4">
    @yield('content')
</main>