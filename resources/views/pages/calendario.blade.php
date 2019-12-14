@extends('layouts.app', ['activePage' => 'calendario', 'titlePage' => __('Calendario')])

@section('content')
<div class="content">
  <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title text-center text-white">{{ __('Gerência de Reservas') }}</h3>
                </div>
              </div>
          </div>
        </div>
    <div id='calendar'></div>
  </div>
</div>
@endsection

@push('scripts')
<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
    themeSystem: 'bootstrap',
    defaultView: 'dayGridWeek',
    locale: 'pt-br',
    height: 400,
    header: {
        left: 'prev,next today',
        center: 'title',
        right: ''
      },
      editable: true,
      events: [
        {
          title: 'Reserva 01',
          start: '2019-12-08',
          end: '2019-12-11',
          textColor: 'white',
          color: 'green',
        },
        {
          title: 'Reserva 02',
          start: '2019-12-11',
          end: '2019-12-14',
          textColor: 'black',
          color: 'yellow',
        },
        {
          title: 'Reserva 03',
          start: '2019-12-10',
          end: '2019-12-13',
          textColor: 'white',
          color: 'red',
        },
        {
          title: 'Reserva 04',
          start: '2019-12-09',
          end: '2019-12-12',
          textColor: 'black',
          color: 'orange',
        },
        {
          title: 'Reserva 05',
          start: '2019-12-14',
          end: '2019-12-15',
          textColor: 'black',
          color: 'pink',
        },
        {
          title: 'Reserva 06',
          start: '2019-12-11',
          end: '2019-12-12',
          textColor: 'white',
          color: 'gray',
        },
        {
          title: 'Reserva 07',
          start: '2019-12-11',
          end: '2019-12-15',
          textColor: 'white',
          color: 'blue',
        }
      ]
  });

  calendar.render();
});

</script>
@endpush