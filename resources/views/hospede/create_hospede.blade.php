@extends('layouts.app', ['activePage' => 'hospede', 'titlePage' => __('Novo_Hospede')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="/hospede/novo" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center text-white">{{ __('Adicionar Hóspede') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                
            <div class="row">
                <div class="col-sm-12">
                    <label class="col-sm col-form-label text-right text-danger" style="margin-bottom: -20px;">{{ __('Campos obrigatórios*') }}</label>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <label class="col-sm col-form-label-lg">{{ __('Nome*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="nome" id="nome" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="col-sm col-form-label-lg">{{ __('Data de nascimento*') }}</label>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input class="form-control" name="datanasc" id="datanasc" type="date" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Profissão*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="profissao" id="profissao" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Nacionalidade*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="nacionalidade" id="nacionalidade" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Sexo*') }}</label>
                    <div class="col-sm-3    ">
                        <div class="form-group">
                            <select class="custom-select" name="sexo" id="sexo" style="width:150px;">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="ND">Não declarar</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Número do documento*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="numdoc" id="numdoc" type="text" onblur="valida();" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Tipo do documento*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="tipodoc" id="tipodoc" style="width:150px;">
                                <option value="RG">RG</option>
                                <option value="CPF">CPF</option>
                                <option value="Passaporte">Passaporte</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Órgão') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" name="org" id="org" type="text"/>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-8">
                    <label class="col-sm col-form-label-lg">{{ __('Endereço*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="endereco" id="endereco" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('CEP*') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" name="cep" id="cep" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Cidade*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="cidade" id="cidade" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('Estado*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="estado" id="estado" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm col-form-label-lg">{{ __('País*') }}</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input class="form-control" name="pais" id="pais" type="text" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-6">
                    <label class="col-sm col-form-label-lg">{{ __('Último destino') }}</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input class="form-control" name="ultdestino" id="ultdestino" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="col-sm col-form-label-lg">{{ __('Próximo destino') }}</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input class="form-control" name="proxdestino" id="proxdestino" type="text"/>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-6">
                    <label class="col-sm col-form-label-lg">{{ __('Motivo*') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group ">
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="motivo" id="motivo" type="radio" value="Férias" required="true" aria-required="true"/><br/>Férias</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="motivo" id="motivo" type="radio" value="Negócios" required="true" aria-required="true"/><br/>Negócios</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="motivo" id="motivo" type="radio" value="Estudos" required="true" aria-required="true"/><br/>Estudos</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="motivo" id="motivo" type="radio" value="Congresso" required="true" aria-required="true"/><br/>Congresso</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="motivo" id="motivo" type="radio" value="Saúde" required="true" aria-required="true"/><br/>Saúde</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="motivo" id="motivo" type="radio" value="Outros" required="true" aria-required="true"/><br/>Outros</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="col-sm col-form-label-lg">{{ __('Transporte*') }}</label>
                    <div class="col-sm-11">
                        <div class="form-group">
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="transporte" id="transporte" type="radio" value="Carro" required="true" aria-required="true"/><br/>Carro</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="transporte" id="transporte" type="radio" value="Avião" required="true" aria-required="true"/><br/>Avião</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="transporte" id="transporte" type="radio" value="Navio" required="true" aria-required="true"/><br/>Navio</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="transporte" id="transporte" type="radio" value="Ônibus" required="true" aria-required="true"/><br/>Ônibus</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="transporte" id="transporte" type="radio" value="Trem" required="true" aria-required="true"/><br/>Trem</label>
                            <label class="text-dark text-center" style="margin-right:10px; font-size:16px;"><input class="" data-switch-no-init="data-switch-no-init" name="transporte" id="transporte" type="radio" value="Outros" required="true" aria-required="true"/><br/>Outros</label>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-12">
                    <label class="col-sm col-form-label-lg">{{ __('E-mail*') }}</label>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
            </div>
              </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Adicionar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
    function valida(){
        if(document.getElementById('tipodoc').value=='CPF'){
            if(!(valida_cpf(document.getElementById('numdoc').value)))
                alert('CPF Inválido');
        }
    }
    
    function valida_cpf(cpf){
            var numeros, digitos, soma, i, resultado, digitos_iguais;
            digitos_iguais = 1;
            if (cpf.length < 11)
                return false;
            for (i = 0; i < cpf.length - 1; i++)
                if (cpf.charAt(i) != cpf.charAt(i + 1))
                        {
                        digitos_iguais = 0;
                        break;
                        }
            if (!digitos_iguais)
                {
                numeros = cpf.substring(0,9);
                digitos = cpf.substring(9);
                soma = 0;
                for (i = 10; i > 1; i--)
                        soma += numeros.charAt(10 - i) * i;
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(0))
                        return false;
                numeros = cpf.substring(0,10);
                soma = 0;
                for (i = 11; i > 1; i--)
                        soma += numeros.charAt(11 - i) * i;
                resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
                if (resultado != digitos.charAt(1))
                        return false;
                return true;
                }
            else
                return false;
    }
</script>