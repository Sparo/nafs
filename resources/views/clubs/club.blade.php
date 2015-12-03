@extends('template')

@section('page_description', $club->club_name . ' ' . $club->club_address)
@section('page_title', $club->club_name)
@section('header_title', $club->club_name)
@section('header_subtitle', $club->club_address)


@section('main')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="row">
                    <div class="col-xs-12">
                        <span class="thumbnail">
                            <img src="{{ $club->club_logo_url }}" alt="{{ $club->club_name }} {{ $club->club_address }}">
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
                            {{ $club->club_name }} <br />
                        </h1>
                        <hr />
                        <address>
                        	<small>
	                        	<strong>Adresa:</strong> {{ $club->club_address }} <br />
	                        	<strong>Email:</strong> <a href="emailto:{{ $club->club_email }}">{{ $club->club_email }}</a> <br />
	                        	<strong>Telefon:</strong> <a href="tel:{{ $club->club_phone }}">{{ $club->club_phone }}</a> <br />
                        	</small>
                        </address>
                        <div class="description">
                            {!! $club->club_note !!}
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

            var lat = '{{ $club->club_lat }}';
            var lon = '{{ $club->club_lon }}';

            var map = new GMaps({
                div: '#map',
                zoom: 14,
                lat: lat,
                lng: lon,
            });

            map.addMarker({
                lat: lat,
                lng: lon,
                title: '{{ $club->club_name }}',
                infoWindow: {
                    content: '<p>{{ $club->club_name }} <br />{{ $club->club_address }}</p>'
                }
            });
        });
    </script>
@endsection
