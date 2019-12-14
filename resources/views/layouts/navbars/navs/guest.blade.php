<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent fixed-top" id="navbar">
  <div class="container">
    <div class="navbar-wrapper">
        <span class="navbar-brand" style="color:#111; font-size: 45px; font-weight: bold; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Hostel</span>
    </div>
    
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item"> 
          <a href="{{ route('inicio') }}" class="nav-link" style="font-size: 14px;">
            {{ __('Início') }}
          </a>
        </li>
        <li class="nav-item">
          <a href="#sobre" class="nav-link" style="font-size: 14px;">
            {{ __('Sobre') }}
          </a>
        </li>
        <li class="nav-item ">
          <a href="#contato" class="nav-link" style="font-size: 14px;">
            {{ __('Contato') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
            <a href="{{ route('login') }}" class="nav-link" style="font-size: 14px;">
              {{ __('Login') }}
            </a>
          </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->