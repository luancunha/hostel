@extends('layouts.app', ['activePage' => 'caixa', 'titlePage' => __('Caixa')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center text-white">{{ __('Caixa') }}</h4>
                <p class="card-category text-center text-white"> {{ __('Aqui você pode gerenciar seu caixa') }}</p>
              </div>
              <div class="row" >
                  <div class="col-4"></div>
                  <div class="col-4" style="margin: 5px 0px 0px 90px;">
                    <button type="button" class="btn btn-warning" id="btnclick" style="border-radius: 5px;">Adicionar Caixa</button>
                  </div>
                  <div class="col" style="margin: 5px 0px 0px 85px;">
                    <a  class="btn btn-danger text-white" href="/caixa/fechar" style="border-radius: 5px;">Fechar Caixa</a>
                  </div>
              </div>

              <div class="table-responsive" style="padding:0 15px 0 15px !important;">
                <table class="table">
                    <thead class="text-primary">
                    <th class="text-center">
                        {{ __('Descrição') }}
                    </th>
                    <th class="text-center">
                        {{ __('Usuário') }}
                    </th>
                    <th class="text-center">
                        {{ __('Valor') }}
                    </th>
                    <th class="text-center">
                        {{ __('Tipo') }}
                    </th>
                    <th class="text-center">
                        {{ __('Data e Hora') }}
                    </th>

                    </thead>
                    <tbody id="toddy">
                        @foreach($caixa as $ca)
                        <tr>
                            <td class="text-center">
                                {{ $ca->descricao }}
                            </td>
                            <td class="text-center">
                                {{ $ca->usuario }}
                            </td>
                            <td class="text-center">
                                {{ $ca->valor }}
                            </td>
                            <td class="text-center">
                                {{ $ca->tipo }}
                            </td>
                            <td class="text-center">
                                {{ $ca->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>

    <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Inserir no caixa</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button> 
            </div>
            <div class="modal-body">
              <form method="POST" action="/caixa/novo" autocomplete="off" class="form-horizontal">
                @csrf
               
                <div class="row">
                  <div class="col-sm-4">
                      <label class="col-sm col-form-label-lg">{{ __('Descrição') }}</label>
                      <div class="col-sm-12">
                          <div class="form-group">
                              <input class="form-control" name="descricao" id="descricao" type="text" placeholder="" required="true" aria-required="true"/>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <label class="col-sm col-form-label-lg">{{ __('Valor') }}</label>
                      <div class="col-sm-10">
                          <div class="form-group">
                              <input class="form-control" name="valor" id="valor" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <label class="col-sm col-form-label-lg">{{ __('Tipo') }}</label>
                      <div class="col-sm-2">
                          <div class="form-group">
                              <select class="custom-select" name="tipo" id="tipo" style="width:150px;">
                                  <option value="Débito">Débito</option>
                                  <option value="Crédito">Crédito</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer" style="margin-top: -20px;">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
          </div>
        </form>

        </div>
      </div>

@endsection

@push('scripts')
<script>
  $("#btnclick").click(function(){
      $("#myModal").modal();
  });
</script>
@endpush