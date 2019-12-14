@extends('layouts.app', ['activePage' => 'index_reserva', 'titlePage' => __('Lista Reservas')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center text-white">{{ __('Reservas') }}</h4>
                <p class="card-category text-center text-white"> {{ __('Aqui você pode gerenciar suas reservas') }}</p>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif

                <div class="row" style="justify-content: center;">
                  <input type="text" id="search" class="form-control" style="width: 400px;" placeholder="ID da reserva">
                  <i class="material-icons md-36">search</i>
                </div>

                <div class="table-responsive">
                    <table class="table" id="table">
                      <thead class="text-primary">
                        <th class="text-center"v>
                          {{ __('ID da reserva') }}
                        </th>
                        <th class="text-center">
                          {{ __('Data de entrada') }}
                        </th>
                        <th class="text-center">
                          {{ __('Data de saída') }}
                        </th>
                        <th class="text-center">
                          Código <br/> do quarto
                        </th>
                        <th class="text-center">
                          Quantidade <br/> de camas
                        </th>
                        <th class="text-center">
                          {{ __('Status') }}
                        </th>
                        <th class="text-center">
                          {{ __('Pagamento') }}
                        </th>
                        <th class="text-center">
                          {{ __('Ações') }}
                        </th>
                      </thead>
                      <tbody id="toddy">
                        @foreach($reserva as $res)
                          <tr>
                            <td class="text-center">
                              {{ $res->idreserva }}
                            </td>
                            <td class="text-center">
                              {{ $res->data_e }}
                            </td>
                            <td class="text-center">
                              {{ $res->data_s }}
                            </td>
                            <td class="text-center">
                              {{ $res->id_quarto }}
                            </td>
                            <td class="text-center">
                                {{ $res->qntp }}
                              </td>
                            <td class="text-center">
                              {{ $res->status }}
                            </td>
                            <td class="text-center">
                              {{ $res->pag }}
                            </td>
                            
                            <td class="td-actions text-center">
                               
                              <a @if ($res->pag == "Realizado") disabled="disabled" @endif rel="tooltip" class="btn btn-warning btn-link" href="/reserva/pag/{{$res->idreserva}}" data-original-title="" title="">
                                <i class="material-icons">monetization_on</i>
                                <div class="ripple-container"></div>
                              </a>
                            <a @if ($res->status == "Check-in" || $res->status == "Check-out" || $res->pag == "Aguardando") disabled="disabled" @endif rel="tooltip" class="btn btn-success btn-link" href="/reserva/checkin/{{$res->idreserva}}/{{$res->id_quarto}}" data-original-title="" title="">
                                <i class="material-icons">check</i>
                                <div class="ripple-container"></div>
                              </a>
                              <a @if ($res->status == "Reservado" || $res->status == "Check-out") disabled="disabled" @endif rel="tooltip" class="btn btn-danger btn-link" href="/reserva/checkout/{{$res->idreserva}}/{{$res->id_quarto}}" data-original-title="" title="">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </a>
                              <a class="btn btn-dark btn-link" id="action" href="/reserva/apagar/{{$res->idreserva}}" data-original-title="" title="">
                                <i class="material-icons" style="color: black;">delete_forever</i>
                                <div class="ripple-container" style="padding: 15px !important;"></div>
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
@endsection

@push('scripts')
<script>

$('#action').click(function () {
  var r = confirm("Você deseja deletar essa Reserva?");
  if(r==true){
    e.parentElement.submit();
  }
  else
    return false;
});

$(function(){
    $("#search").keyup(function(){        
        var index = $(this).parent().index();
        var nth = "#table td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $("#table tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#search").blur(function(){
        $(this).val("");
    }); 
});

</script>

@endpush
