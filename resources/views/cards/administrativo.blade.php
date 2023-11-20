<div class="col-md-12">
    <div>
        <div class="card">
            <div class="card-header" style="border-top:2px solid #3a9dd5;">
                <h5 class="card-title mb-0">Nova ficha de Processo Administrativo</h5>
            </div>
            <div class="card-body d-flex flex-column gap-3">

                <div>
                    <div class="row">
                        <div class="col-md-4">                                
                            <label class="form-label">Nº do Processo</label>
                            <input id="numero_processo" type="text" maxlength="14" class="form-control  @error('proc_adm_numero_proc') is-invalid @enderror" placeholder="Digite o nome do Requerente" value="{{old('proc_adm_numero_proc')}}" name="proc_adm_numero_proc">
                            @error('proc_adm_numero_proc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Médico</label>
                            <input id="proc_adm_nome_perito" type="text" maxlength="150" class="form-control  @error('proc_adm_nome_perito') is-invalid @enderror" placeholder="Nome do médico" value="{{old('proc_adm_nome_perito')}}" name="proc_adm_nome_perito">
                            @error('proc_adm_nome_perito')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">CID10</label>
                            <input id="cid_id" type="text" maxlength="14" class="form-control  @error('cid_id') is-invalid @enderror" placeholder="Digite o CID" value="{{old('cid_id')}}" name="cid_id">
                            @error('cid_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Data Inicial dos Sintomas</label>
                            <input id="rg" type="date" maxlength="14" class="form-control  @error('proc_adm_data_ini_doenca') is-invalid @enderror" value="{{old('proc_adm_data_ini_doenca')}}" name="proc_adm_data_ini_doenca">
                            @error('proc_adm_data_ini_doenca')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Data de Início da Incapacidade</label>
                            <input id="proc_adm_data_ini_incapacidade" type="date" maxlength="14" class="form-control  @error('proc_adm_data_ini_incapacidade') is-invalid @enderror" value="{{old('proc_adm_data_ini_incapacidade')}}" name="proc_adm_data_ini_incapacidade">
                            @error('proc_adm_data_ini_incapacidade')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Parte do corpo atingida</label>
                            <input id="proc_adm_parte_atingida" type="text" maxlength="100" class="form-control  @error('proc_adm_parte_atingida') is-invalid @enderror" placeholder="Digite a parte atingida" value="{{old('proc_adm_parte_atingida')}}" name="proc_adm_parte_atingida">
                            @error('proc_adm_parte_atingida')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">História</label>
                            <textarea id="proc_adm_historia" type="text" maxlength="500" class="form-control  @error('proc_adm_historia') is-invalid @enderror" placeholder="Digite o seu RG" value="{{old('proc_adm_historia')}}" name="proc_adm_historia"></textarea>
                            @error('proc_adm_historia')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Considerações</label>
                            <textarea id="proc_adm_consideracoes" type="text" maxlength="500" class="form-control  @error('proc_adm_consideracoes') is-invalid @enderror" placeholder="Digite o seu RG" value="{{old('proc_adm_consideracoes')}}" name="proc_adm_consideracoes"></textarea>
                            @error('proc_adm_consideracoes')
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

