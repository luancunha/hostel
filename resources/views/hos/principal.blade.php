@extends('layouts.app2', ['activePage' => '', 'titlePage' => __('Cadastro')])
<div class="wrapper ">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" style="margin-top: 5px !important;">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                
                <ul class="navbar-nav">
                
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">
                        {{ __('Account') }}
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="{{ route('principal_hos') }}">{{ __('Principal') }}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('hos.editar') }}">{{ __('Perfil') }}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    <div class="main-panel" style="float: none !important; width: 100% !important; padding: 0px 100px 0px 100px;">
        
        
            <div class="content">
                    <div>
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
                    </div>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                              <div class="card-header card-header-primary">
                                <h4 class="card-title text-center text-white">{{ __('Hóspede') }}</h4>
                                <p class="card-category text-center text-white"> {{ __('Aqui você pode atualizar seus dados e realizar sua reserva') }}</p>
                              </div>
                              <div class="card-body">
                                
                
                                <div class="table-responsive">
                                    <table class="table" id="table">
                                      <thead class="text-primary">
                                        <th class="text-center">
                                            {{ __('Nome') }}
                                        </th>
                                        <th class="text-center">
                                          {{ __('Nº do documneto') }}
                                        </th>
                                        <th class="text-center">
                                          {{ __('Tipo do documneto') }}
                                        </th>
                                        <th class="text-center">
                                          {{ __('País') }}
                                        </th>
                                        
                                        <th class="text-right">
                                          {{ __('Ações') }}
                                        </th>
                                      </thead>
                                      <tbody id="toddy">
                                        @foreach($hospede as $hos)
                                          <tr>
                                            <td class="text-center">
                                                {{ $hos->nome }}
                                            </td>
                                            <td class="text-center">
                                                {{ $hos->numdoc }}
                                            </td>
                                            <td class="text-center">
                                                {{ $hos->tipodoc }}
                                            </td>
                                            <td class="text-center">
                                                {{ $hos->pais }}
                                            </td>
                                            
                                            <td class="td-actions text-right">
                                               
                                              <a rel="tooltip" class="btn btn-success btn-link" style="padding: 28px 5px 8px 5px !important;" href="/hospede/editar/hos/{{ $hos->id }}" data-original-title="" title="Editar">
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
                  
    
                  
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                  <div class="card-header card-header-primary">
                                    <h4 class="card-title text-center text-white">{{ __('Reservas') }}</h4>
                                    <p class="card-category text-center text-white"> {{ __('Aqui você pode gerenciar suas reservas') }}</p>
                                  </div>
                                  <div class="card-body">

                                    @foreach($hospede as $hos)
                                    <div class="row" style="justify-content: center;">
                                        <a href="/reserva/hos/{{$hos->id}}" type="button" class="btn btn-info" style="border-radius: 5px;" >Adicionar Reserva</a>      
                                    </div>
                                    @endforeach

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
                                              {{ __('Código do quarto') }}
                                            </th>
                                            <th class="text-center">
                                                {{ __('Quantidade de camas') }}
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
                                                
                                                  <a class="btn btn-dark btn-link" style="padding: 28px 5px 8px 5px !important;" id="action" href="/reserva/apagar/hos/{{$res->idreserva}}" data-original-title="" title="">
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
</div>

@push('scripts')
<script>



</script>

@endpush