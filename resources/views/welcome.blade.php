@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<div class="wrapper wrapper-full-page" id="inicio">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('material') }}/img/wp-copacabana.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="green">
    <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    <div class="container" style="height: auto;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <h1 class="text-white text-center" style="font-size: 50px;">{{ __('Bem-vindo ao CopaVilla Hostel') }}</h1>
            </div>
        </div>
      </div>
  </div>
</div>
<div class="main">
    <div class="section text-center" id="sobre">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto">
            <br/>
            <h2 class="title">Sobre nós</h2>
            <h5 class="description" style="text-align: justify !important;">
              <p> 
                A apenas 3 minutos a pé do Posto 5, na Praia de Copacabana, o Copa Villa Hostel oferece acomodações no Rio de Janeiro. Para sua comodidade, o Wi-Fi gratuito está disponível.
              </p>
              <p>
                Todos os quartos dispõem de ar-condicionado e roupa de cama.
              </p>
              <p>
                O Hostel Copa Villa dispõe de recepção 24 horas. Outras comodidades incluem lounge compartilhado e balcão de turismo.
              </p>
              <p>
                O albergue fica a 1 minuto a pé da Estação de Metrô General Osório e a 1,3 km do Forte de Copacabana. Já o Aeroporto Internacional do Rio de Janeiro/Galeão fica a 23 km de distância.
              </p>
              <p>
                Copacabana é uma ótima escolha para viajantes interessados em caminhadas na praia, praias com faixa de areia e calçadões.
              </p>
              <p>
                Esta é a parte de Rio de Janeiro de que os nossos hóspedes mais gostam, de acordo com avaliações independentes.
              </p>
              <p>
                Nós falamos a sua língua!
              </p>
             
            </h5>
            <br/>
            <a href="#" class="btn btn-outline-success btn-lg">Saber mais</a>
          </div>
        </div>
        <br/>
      </div>
    </div>

    <div class="section bg-dark text-center">
      <div class="container">
        <br/>
        <h2 class="title text-white">Quem somos?</h2>
        <div class="row">
          <div class="col-lg">
            <div class="card card-profile card-plain bg-dark" style="border: none !important;">
              <div class="card-avatar">
                  <img src="{{ asset('material') }}/img/thiago.jpg" alt="...">
              </div>
              <div class="card-body">
                  <div class="author">
                    <h4 class="card-title text-white">Thiago Pani</h4>
                    <h6 class="card-category text-muted">Sócio Proprietário</h6>
                  </div>
                
              </div>
              <div class="card-footer text-center" style="display: block; margin-left: auto; margin-right: auto;">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-lg" style="margin: 0 30px;"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-lg" style="margin: 0 30px;"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-lg" style="margin: 0 30px;"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="card card-profile card-plain bg-dark" style="border: none !important;">
              <div class="card-avatar">
                  <img src="{{ asset('material') }}/img/celio.jpg" alt="...">
              </div>
              <div class="card-body">
                  <div class="author">
                    <h4 class="card-title text-white">Célio Magno Morais</h4>
                    <h6 class="card-category text-muted">Sócio Proprietário</h6>
                  </div>
                
              </div>
              <div class="card-footer text-center" style="display: block; margin-left: auto; margin-right: auto;">
                <a href="#pablo" class="btn btn-link btn-just-icon btn-lg" style="margin: 0 30px;"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-lg" style="margin: 0 30px;"><i class="fa fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-link btn-just-icon btn-lg" style="margin: 0 30px;"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section landing-section" id="contato">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <br/>
              <h2 class="text-center">Contato</h2>
              <form class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <label class="text-dark">Nome</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="text-dark">E-mail</label>
                    <div class="input-group">
                      <input type="email" class="form-control" placeholder="">
                    </div>
                  </div>
                </div>
                <label class="text-dark">Messagem</label>
                <textarea class="form-control" rows="3" placeholder=""></textarea>
                <div class="row">
                  <div class="col-md-2 ml-auto mr-auto">
                    <button class="btn btn-outline-success btn-md">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>

@include('layouts.footers.guest')

@endsection

@push('scripts')

<script>
            
      $('nav a[href^="#"]').on('click', function (e) {
          //Previnir que desça de forma brusca
          e.preventDefault();
          //Recebe #sobre
          var id = $(this).attr('href'),
          targetOffSet = $(id).offset().top; //Calcula a distância
          //Animação de descer suave
          $('html, body').animate({
              scrollTop: targetOffSet - 65
        }, 800);
    });

    // Transition effect for navbar 
    $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 600) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });

</script>

@endpush
