<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a class="simple-text logo-normal">NetBooking.com</a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <!--
      <li class="nav-item{{ $activePage == 'calendario' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('calendario') }}">
          <i class="material-icons">date_range</i>
          <p>{{ __('Principal') }}</p>
        </a>
      </li>
    -->
      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="material-icons">supervisor_account</i>
              <p>{{ __('Gerenciar Usuários') }}</p>
          </a>
      </li>

      <li class="nav-item{{ $activePage == '' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('autorizar') }}">
            <i class="material-icons">monetization_on</i>
              <p>{{ __('Caixa') }}</p>
          </a>
      </li>

      <li class="nav-item{{ $activePage == 'quartos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('quartos') }}">
            <i class="material-icons">local_hotel</i>
              <p>{{ __('Quartos') }}</p>
          </a>
      </li>

      <li class="nav-item{{ $activePage == 'index_hospede' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('index_hospede') }}">
          <i class="material-icons">assignment</i>
            <p>{{ __('Listar Hóspedes') }}</p>
        </a>
      </li>
      <!--
      <li class="nav-item {{ ($activePage == 'hospede' || $activePage == '') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#hospedes" role="button" aria-expanded="true" aria-controls="reservas">
          <i class="material-icons">account_box</i>
          <p>{{ __('Hóspedes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="hospedes">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'hospede' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('hospede') }}">
                <i class="material-icons">assignment_ind</i>
                <span class="sidebar-normal"> {{ __('Novo Hóspede') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'index_hospede' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('index_hospede') }}">
                <i class="material-icons">assignment</i>
                <span class="sidebar-normal"> {{ __('Listar Hóspedes') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    -->
      <li class="nav-item {{ ($activePage == 'reserva' || $activePage == '') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#reservas" role="button" aria-expanded="true" aria-controls="reservas">
          <i class="material-icons">local_offer</i>
          <p>{{ __('Reservas') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="reservas">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'reserva' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('reserva') }}">
                <i class="material-icons">vpn_key</i>
                <span class="sidebar-normal"> {{ __('Nova Reserva') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'index_reserva' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('index_reserva') }}">
                  <i class="material-icons">content_paste</i>
                  <span class="sidebar-normal"> {{ __('Listar Reservas') }} </span>
                </a>
              </li>
          </ul>
        </div>
      </li>
  
    </ul>
  </div>
</div>

@push('scripts')
<script>

$(document).ready(function(){
  $(".collapse").collapse();
});
  
</script>
@endpush