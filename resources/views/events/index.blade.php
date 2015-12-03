@extends('edit_template')


@section('main')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      @foreach($events as $event)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{ $event->event_img_url or 'http://dummyimage.com/300x300/000/fff.jpg'}}" alt="{{ $event->event_title }} {{ $event->evant_address }}">
            <div class="caption">
              <h3>{{ $event->event_title }}</h3>
              {!! $event->event_description !!}
              <p>
                <a href="{{ $event->event_url }}" target="_blank" class="btn btn-link" role="button">Procitaj vise</a>
              </p>

            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>


@endsection
