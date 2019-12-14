@extends('layouts.app', ['activePage' => 'caixa', 'titlePage' => __('Abrir Caixa')])

@section('content')
<div class="content">
    <div class="container-fluid">
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
        <div class="row">
        <div class="col-md-12" style="display: flex; justify-content: center; margin-bottom: 120px;">
        <form method="POST" action="/caixa/autoriza" autocomplete="off" class="form-horizontal">
            @csrf

            <div class="card" style="width: 900px;">
                <div class="card-header card-header-primary">
                <h4 class="card-title text-center text-white">{{ __('Autorizar Caixa') }}</h4>
                <p class="card-category"></p>
                </div>

            <div class="card-body text-center" style="margin-left: 163px;">

            <div class="row" style="margin-left: 110px;">
                <div class="col-6">
                    <label class="col-sm col-form-label-lg">{{ __('Usuário') }}</label>
                    <div class="col">
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-auto">
                    <label class="col-sm col-form-label-lg">{{ __('Senha') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="senha" id="senha" type="password" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <label class="col-sm col-form-label-lg">{{ __('Valor inicial') }}</label>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" name="valor" id="valor" type="text" placeholder="" min="1900-01-01" max="2019-01-01" required="true" aria-required="true"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                <div class="card-footer ml-auto mr-auto" style="justify-content: center;">
                    <button type="cancel" class="btn btn-danger" style="margin-right: 50px;">{{ __('Cancelar') }}</button>
                    <button type="submit" class="btn btn-info">{{ __('Autorizar') }}</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>

@endsection