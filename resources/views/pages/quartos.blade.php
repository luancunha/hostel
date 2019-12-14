@extends('layouts.app', ['activePage' => 'quartos', 'titlePage' => __('Quartos')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center text-white">{{ __('Quartos') }}</h4>
                <p class="card-category text-center text-white"> {{ __('Aqui você pode gerenciar seus quartos') }}</p>
              </div>
              
              <div class="table-responsive" style="padding:0 15px 0 15px !important;">
                <table class="table">
                    <thead class="text-primary text-center">
                        <th>
                            {{ __('Quarto') }}
                        </th>
                        <th>
                            {{ __('Tipo') }}
                        </th>
                        <th>
                            {{ __('Valor') }}
                        </th>
                        <th>
                            {{ __('Máximo camas') }}
                        </th>
                        <th>
                            {{ __('Camas ocupadas') }} <br/> ({{ __('Entram hoje') }})
                        </th>
                        <th>
                            {{ __('Camas disponíveis') }}
                      </th>
                        <th class="text-right">
                            {{ __('Ações') }}
                        </th>
                    </thead>
                    <tbody id="toddy" class="text-center">
                        @foreach($quarto1 as $qua)
                          <tr>
                            <td>
                              {{ $qua->codquarto }}
                            </td>
                            <td>
                              {{ $qua->tipo }}
                              </td>
                            <td>
                              R$ {{ $qua->valor }}
                            </td>
                            <td>
                              {{ $qua->max_camas }}
                            </td>
                            <?php

                            function CamasReservadas1(){
                              $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
                              $stmt = $conn->prepare("select sum(qntp) from reservas where data_e = CURDATE() and id_quarto = 'C01' and status != 'Check-in' and status != 'Check-out';");
                              $stmt->execute();
                              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                              foreach ($results as $row) {
                                  foreach ($row as $key => $value) {
                                      return $value;
                                  }
                              }
                            }

                            ?>
                            <td>
                                {{ $qua->camas_o }} 
                                (<?php if (CamasReservadas1() == 0)
                                      echo 0;
                                    else 
                                      echo CamasReservadas1() ?>)
                            </td>
                            <td>
                              {{ $qua->max_camas - $qua->camas_o }}
                            </td>
                            <td class="td-actions text-right">
                                <a rel="tooltip" id="btnclick1" class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </td>
                          </tr>
                        @endforeach
                        @foreach($quarto2 as $qua)
                          <tr>
                            <td>
                              {{ $qua->codquarto }}
                            </td>
                            <td>
                              {{ $qua->tipo }}
                              </td>
                            <td>
                              R$ {{ $qua->valor }}
                            </td>
                            <td>
                              {{ $qua->max_camas }}
                            </td>
                            <?php

                            function CamasReservadas2(){
                              $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
                              $stmt = $conn->prepare("select sum(qntp) from reservas where data_e = CURDATE() and id_quarto = 'C02' and status != 'Check-in' and status != 'Check-out';");
                              $stmt->execute();
                              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                              foreach ($results as $row) {
                                  foreach ($row as $key => $value) {
                                      return $value;
                                  }
                              }
                            }

                            ?>
                            <td>
                                {{ $qua->camas_o }} 
                                (<?php if (CamasReservadas2() == 0)
                                      echo 0;
                                    else 
                                      echo CamasReservadas2() ?>)
                            </td>
                            <td>
                              {{ $qua->max_camas - $qua->camas_o }}
                            </td>
                            <td class="td-actions text-right">
                                <a rel="tooltip" id="btnclick2" class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </td>
                          </tr>
                        @endforeach
                        @foreach($quarto3 as $qua)
                          <tr>
                            <td>
                              {{ $qua->codquarto }}
                            </td>
                            <td>
                              {{ $qua->tipo }}
                              </td>
                            <td>
                              R$ {{ $qua->valor }}
                            </td>
                            <td>
                              {{ $qua->max_camas }}
                            </td>
                            <?php

                            function CamasReservadas3(){
                              $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
                              $stmt = $conn->prepare("select sum(qntp) from reservas where data_e = CURDATE() and id_quarto = 'C03' and status != 'Check-in' and status != 'Check-out';");
                              $stmt->execute();
                              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                              foreach ($results as $row) {
                                  foreach ($row as $key => $value) {
                                      return $value;
                                  }
                              }
                            }

                            ?>
                            <td>
                                {{ $qua->camas_o }} 
                                (<?php if (CamasReservadas3() == 0)
                                      echo 0;
                                    else 
                                      echo CamasReservadas3() ?>)
                            </td>
                            <td>
                              {{ $qua->max_camas - $qua->camas_o }}
                            </td>
                            <td class="td-actions text-right">
                                <a rel="tooltip" id="btnclick3" class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </td>
                          </tr>
                        @endforeach
                        @foreach($quarto4 as $qua)
                          <tr>
                            <td>
                              {{ $qua->codquarto }}
                            </td>
                            <td>
                              {{ $qua->tipo }}
                              </td>
                            <td>
                              R$ {{ $qua->valor }}
                            </td>
                            <td>
                              {{ $qua->max_camas }}
                            </td>
                            <?php

                            function CamasReservadas4(){
                              $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
                              $stmt = $conn->prepare("select sum(qntp) from reservas where data_e = CURDATE() and id_quarto = 'S01' and status != 'Check-in' and status != 'Check-out';");
                              $stmt->execute();
                              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                              foreach ($results as $row) {
                                  foreach ($row as $key => $value) {
                                      return $value;
                                  }
                              }
                            }

                            ?>
                            <td>
                                {{ $qua->camas_o }} 
                                (<?php if (CamasReservadas4() == 0)
                                      echo 0;
                                    else 
                                      echo CamasReservadas4() ?>)
                            </td>
                            <td>
                              {{ $qua->max_camas - $qua->camas_o }}
                            </td>
                            <td class="td-actions text-right">
                                <a rel="tooltip" id="btnclick4" class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
                            </td>
                          </tr>
                        @endforeach
                        @foreach($quarto5 as $qua)
                          <tr>
                            <td>
                              {{ $qua->codquarto }}
                            </td>
                            <td>
                              {{ $qua->tipo }}
                              </td>
                            <td>
                              R$ {{ $qua->valor }}
                            </td>
                            <td>
                              {{ $qua->max_camas }}
                            </td>
                            <?php

                            function CamasReservadas5(){
                              $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
                              $stmt = $conn->prepare("select sum(qntp) from reservas where data_e = CURDATE() and id_quarto = 'S02' and status != 'Check-in' and status != 'Check-out';");
                              $stmt->execute();
                              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                              foreach ($results as $row) {
                                  foreach ($row as $key => $value) {
                                      return $value;
                                  }
                              }
                            }

                            ?>
                            <td>
                                {{ $qua->camas_o }} 
                                (<?php if (CamasReservadas5() == 0)
                                      echo 0;
                                    else 
                                      echo CamasReservadas5() ?>)
                            </td>
                            <td>
                              {{ $qua->max_camas - $qua->camas_o }}
                            </td>
                            <td class="td-actions text-right">
                                <a rel="tooltip" id="btnclick5" class="btn btn-success btn-link">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                </a>
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
<div class="modal fade bd-example-modal-lg" id="modal1" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Editar quarto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button> 
      </div>
      <div class="modal-body">
        @foreach ($quarto1 as $qua)
        <form method="post" action="/quartos/{{$qua->id}}" autocomplete="off" class="form-horizontal">
          @csrf
          <div class="row">
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Código Quarto') }}</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="codquarto" value="{{ $qua->codquarto }}" id="codquarto" type="text" placeholder="" required="true" aria-required="true" disabled/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Máximos camas') }}</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <input class="form-control" name="max_camas" value="{{ $qua->max_camas }}" id="max_camas" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                  <label class="col-sm col-form-label-lg">{{ __('Valor') }}</label>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input class="form-control" name="valor" value="{{ $qua->valor }}" id="valor" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                      </div>
                  </div>
              </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Tipo') }}</label>
                <div class="col-sm-2">
                    <div class="form-group">
                        <select class="custom-select" name="tipo" id="tipo" style="width:150px;">
                            <option @if ($qua->tipo == "Compartilhado") selected @endif value="1">Compartilhado</option>
                            <option @if ($qua->tipo == "Suíte") selected @endif value="2">Suíte</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="modal-footer" style="margin-top: -20px;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal2" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Editar quarto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button> 
      </div>
      <div class="modal-body">
        @foreach ($quarto2 as $qua)
        <form method="post" action="/quartos/{{$qua->id}}" autocomplete="off" class="form-horizontal">
          @csrf
          <div class="row">
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Código Quarto') }}</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="codquarto" value="{{ $qua->codquarto }}" id="codquarto" type="text" placeholder="" required="true" aria-required="true" disabled/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Máximos camas') }}</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <input class="form-control" name="max_camas" value="{{ $qua->max_camas }}" id="max_camas" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                  <label class="col-sm col-form-label-lg">{{ __('Valor') }}</label>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input class="form-control" name="valor" value="{{ $qua->valor }}" id="valor" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                      </div>
                  </div>
              </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Tipo') }}</label>
                <div class="col-sm-2">
                    <div class="form-group">
                        <select class="custom-select" name="tipo" id="tipo" style="width:150px;">
                            <option @if ($qua->tipo == "Compartilhado") selected @endif value="1">Compartilhado</option>
                            <option @if ($qua->tipo == "Suíte") selected @endif value="2">Suíte</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="modal-footer" style="margin-top: -20px;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal3" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Editar quarto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button> 
      </div>
      <div class="modal-body">
        @foreach ($quarto3 as $qua)
        <form method="post" action="/quartos/{{$qua->id}}" autocomplete="off" class="form-horizontal">
          @csrf
          <div class="row">
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Código Quarto') }}</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="codquarto" value="{{ $qua->codquarto }}" id="codquarto" type="text" placeholder="" required="true" aria-required="true" disabled/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Máximos camas') }}</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <input class="form-control" name="max_camas" value="{{ $qua->max_camas }}" id="max_camas" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                  <label class="col-sm col-form-label-lg">{{ __('Valor') }}</label>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input class="form-control" name="valor" value="{{ $qua->valor }}" id="valor" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                      </div>
                  </div>
              </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Tipo') }}</label>
                <div class="col-sm-2">
                    <div class="form-group">
                        <select class="custom-select" name="tipo" id="tipo" style="width:150px;">
                            <option @if ($qua->tipo == "Compartilhado") selected @endif value="1">Compartilhado</option>
                            <option @if ($qua->tipo == "Suíte") selected @endif value="2">Suíte</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="modal-footer" style="margin-top: -20px;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal4" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Editar quarto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button> 
      </div>
      <div class="modal-body">
        @foreach ($quarto4 as $qua)
        <form method="post" action="/quartos/{{$qua->id}}" autocomplete="off" class="form-horizontal">
          @csrf
          <div class="row">
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Código Quarto') }}</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="codquarto" value="{{ $qua->codquarto }}" id="codquarto" type="text" placeholder="" required="true" aria-required="true" disabled/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Máximos camas') }}</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <input class="form-control" name="max_camas" value="{{ $qua->max_camas }}" id="max_camas" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                  <label class="col-sm col-form-label-lg">{{ __('Valor') }}</label>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input class="form-control" name="valor" value="{{ $qua->valor }}" id="valor" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                      </div>
                  </div>
              </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Tipo') }}</label>
                <div class="col-sm-2">
                    <div class="form-group">
                        <select class="custom-select" name="tipo" id="tipo" style="width:150px;">
                            <option @if ($qua->tipo == "Compartilhado") selected @endif value="1">Compartilhado</option>
                            <option @if ($qua->tipo == "Suíte") selected @endif value="2">Suíte</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="modal-footer" style="margin-top: -20px;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal5" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Editar quarto</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button> 
      </div>
      <div class="modal-body">
        @foreach ($quarto5 as $qua)
        <form method="post" action="/quartos/{{$qua->id}}" autocomplete="off" class="form-horizontal">
          @csrf

          <div class="row">
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Código Quarto') }}</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="codquarto" value="{{ $qua->codquarto }}" id="codquarto" type="text" placeholder="" required="true" aria-required="true" disabled/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Máximos camas') }}</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <input class="form-control" name="max_camas" value="{{ $qua->max_camas }}" id="max_camas" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
                  <label class="col-sm col-form-label-lg">{{ __('Valor') }}</label>
                  <div class="col-sm-6">
                      <div class="form-group">
                          <input class="form-control" name="valor" value="{{ $qua->valor }}" id="valor" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                      </div>
                  </div>
              </div>
            <div class="col-sm-6">
                <label class="col-sm col-form-label-lg">{{ __('Tipo') }}</label>
                <div class="col-sm-2">
                    <div class="form-group">
                        <select class="custom-select" name="tipo" id="tipo" style="width:150px;">
                            <option @if ($qua->tipo == "Compartilhado") selected @endif value="1">Compartilhado</option>
                            <option @if ($qua->tipo == "Suíte") selected @endif value="2">Suíte</option>
                          </select>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
      <div class="modal-footer" style="margin-top: -20px;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection

@push('scripts')
    <script>

        $("#btnclick1").click(function(){
            $("#modal1").modal();
        });

        $("#btnclick2").click(function(){
            $("#modal2").modal();
        });

        $("#btnclick3").click(function(){
            $("#modal3").modal();
        });

        $("#btnclick4").click(function(){
            $("#modal4").modal();
        });

        $("#btnclick5").click(function(){
            $("#modal5").modal();
        });

        //$("#valor").mask('000.000.000.000.000,00', {reverse: true});
    </script>
@endpush