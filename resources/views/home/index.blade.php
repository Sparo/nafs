@extends('template')

@section('page_description', 'Ovo je strana sa vestima')
@section('page_title', 'Dogadjaji')
@section('header_title', 'Dogadjaji')
@section('header_subtitle', 'Pratite seminare i novosti u aikido svetu')


@section('main')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      @foreach($events as $event)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img style="width:300px;height:300px" src="{{ $event->event_img_url or 'http://dummyimage.com/300x300/000/fff.jpg'}}" alt="{{ $event->event_title }} {{ $event->evant_address }}">
            <div class="caption">
              <h3>{{ $event->event_title }}</h3>
              <div class="description">
                {!! $event->event_description !!}
              </div>
              <div>
                <a href="{{ $event->event_url }}" target="_blank" class="btn btn-link" role="button">Procitaj vise</a>
              </div>

            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>


@endsection
