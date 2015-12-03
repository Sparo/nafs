@extends('template')

@section('page_description', "$event->event_title . ' ' . $event->event_address")
@section('page_title', "$event->event_title")
@section('header_title', $event->event_title)
@section('header_subtitle', $event->event_address . ' ' . date('d. m. Y', strtotime($event->event_start_time)) . ' - ' . date('d. m. Y', strtotime($event->event_end_time)))


@section('main')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="row">
                    <div class="col-xs-12">
                        <span class="thumbnail">
                            <img src="{{ $event->event_img_url or 'http://dummyimage.com/300x300/000/fff.jpg'}}" alt="{{ $event->event_title }} {{ $event->evant_address }}">
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <span class="thumbnail">
                            <div id="map"></div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>
                            {{ $event->event_title }} <br />
                            <small>
                                {{ $event->event_address }} <br />
                                {{ date('d. m. Y h:i', strtotime($event->event_start_time)) . ' - ' . date('d. m. Y  h:i', strtotime($event->event_end_time)) }}
                            </small>
                        </h1>
                        <hr />
                        <div class="description">
                            {!! $event->event_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('additional_scripts')
    <script>
        $(document).ready(function () {

            var lat = '{{ $event->event_lat }}';
            var lon = '{{ $event->event_lon }}';

            var map = new GMaps({
                div: '#map',
                zoom: 14,
                lat: lat,
                lng: lon,
            });

            map.addMarker({
                lat: lat,
                lng: lon,
                title: '{{ $event->event_title }}',
                infoWindow: {
                    content: '<p>{{ $event->event_title }} <br />{{ $event->event_address }}</p>'
                }
            });
        });
    </script>
@endsection
