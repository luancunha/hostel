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
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    <div class="main-panel" style="float: none !important; width: 100% !important; padding: 0px 100px 0px 100px;">

            <div class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12" style="display: flex; justify-content: center; margin-bottom: 120px;">
                        <form method="POST" action="/reserva/novo" autocomplete="off" class="form-horizontal">
                            @csrf
                            @method('post')
                
                            <div class="card" style="width: 900px;">
                              <div class="card-header card-header-primary">
                                <h4 class="card-title text-center text-white">{{ __('Adicionar Reserva') }}</h4>
                                <p class="card-category"></p>
                              </div>
                
                            <div class="card-body text-center">
                
                            <div class="row">
                                <div class="col-sm-6" style="padding: 0px 100px 0px 100px;">
                                    <label class="col-sm col-form-label-lg">{{ __('Quantidade de camas') }}</label>
                                    <div class="col-sm-8" style="margin-left: 40px;">
                                        <div class="form-group">
                                            <input class="form-control" name="qntp" id="qntp" type="text" placeholder="" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6" style="padding: 0px 100px 0px 100px;">
                                    <label class="col-sm col-form-label-lg">{{ __('Tipo de quarto') }}</label>
                                    <div class="col-sm-8" style="margin-left: 30px;">
                                        <div class="form-group">
                                            <select class="custom-select" name="tipo" id="tipo" style="width:150px;">
                                                <option value="Suite">Suíte</option>
                                                <option value="Compartilhado">Compartilhado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="row">
                                <div class="col-sm-6" style="padding: 0px 100px 0px 100px;">
                                    <label class="col-sm col-form-label-lg">{{ __('Data de entrada') }}</label>
                                    <div class="col-sm-10" style="margin-left: 20px;">
                                        <div class="form-group">
                                            <input class="form-control" name="data_e" id="data_e" type="date" placeholder="" min="<?php echo date("Y-m-d"); ?>" max="2022-01-01" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6" style="padding: 0px 100px 0px 100px;">
                                    <label class="col-sm col-form-label-lg">{{ __('Data de saída') }}</label>
                                    <div class="col-sm-10" style="margin-left: 20px;">
                                        <div class="form-group">
                                            <input class="form-control" name="data_s" id="data_s" type="date" placeholder="" min="<?php echo date("Y-m-d"); ?>" max="2022-01-01" required="true" aria-required="true"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <input class="form-control" name="cod_hospede" id="cod_hospede" type="hidden" value="{{$hos->id}}"/>
                               
                              <div class="card-footer ml-auto mr-auto" style="justify-content: center;">
                                <button type="cancel" class="btn btn-danger" style="margin-right: 50px;">{{ __('Cancelar') }}</button>
                                <button type="submit" class="btn btn-success">{{ __('Confirmar') }}</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

    </div>
</div>