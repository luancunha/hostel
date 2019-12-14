@extends('layouts.app', ['activePage' => 'index_hospede', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center text-white">{{ __('Hóspedes') }}</h4>
                <p class="card-category text-center text-white"> {{ __('Aqui você pode gerenciar seus hóspedes') }}</p>
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
                  <input type="text" id="search" class="form-control" style="width: 400px;" placeholder="Nome do hóspede">
                  <i class="material-icons md-36">search</i>
                </div>

                <div class="table-responsive">
                    <table class="table" id="table">
                      <thead class="text-primary">
                        <th>
                            {{ __('Nome') }}
                        </th>
                        <th>
                          {{ __('Nº do documento') }}
                        </th>
                        <th>
                          {{ __('Tipo do documento') }}
                        </th>
                        <th>
                          {{ __('País') }}
                        </th>
                        
                        <th class="text-right">
                          {{ __('Ações') }}
                        </th>
                      </thead>
                      <tbody id="toddy">
                        @foreach($hospede as $hos)
                          <tr>
                            <td>
                              {{ $hos->nome }}
                            </td>
                            <td>
                              {{ $hos->numdoc }}
                            </td>
                            <td>
                              {{ $hos->tipodoc }}
                            </td>
                            <td>
                              {{ $hos->pais }}
                            </td>
                            
                            <td class="td-actions text-right">
                               
                              <a rel="tooltip" class="btn btn-success btn-link" href="/hospede/editar/{{$hos->id}}" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </a>
                              <a class="btn btn-danger btn-link" id="action" href="/hospede/apagar/{{$hos->id}}" data-original-title="" title="">
                                  <i class="material-icons">delete_forever</i>
                                  <div class="ripple-container" style="padding: 15px !important;"></div>
                              </a>
                              <a class="btn btn-info btn-link" id="action" href="/reserva/{{$hos->id}}" data-original-title="" title="">
                                <i class="material-icons">vpn_key</i>
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
  var r = confirm("Você deseja deletar esse Hóspede?");
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
