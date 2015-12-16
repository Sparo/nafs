@extends('template')

@section('page_description', $coach->coach_first_name . ' ' . $coach->coach_last_name . ' Aikido trener opis')
@section('page_title', $coach->coach_first_name . ' ' . $coach->coach_last_name . ' Aikido')
@section('header_title', $coach->coach_first_name . ' ' . $coach->coach_last_name)
@section('header_subtitle', ($coach->coach_level > 0 ? $coach->coach_level . ' DAN' : abs($coach->coach_level) . ' KYU') . ' HOMBU DOJO ')


@section('main')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="row">
                    <div class="col-xs-12">
                        <span class="thumbnail">
                            <img src="{{ $coach->coach_img_url or 'http://dummyimage.com/300x300/000/fff.jpg'}}" alt="{{ $coach->coach_first_name }} {{ $coach->coach_first_name }}">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>
                            {{ $coach->coach_first_name }} {{ $coach->coach_last_name }} <br />
                        </h1>
                        <hr />
                        <strong>Zvanje:</strong> {{ $coach->coach_title }} <br />
                        <strong>Pojas:</strong> {{($coach->coach_level > 0 ? $coach->coach_level . ' DAN' : abs($coach->coach_level) . ' KYU') . ' HOMBU DOJO ' }} <br />
                        <strong>Klub:</strong>
                            @if(count($clubs) > 0)
                                @foreach ($clubs as $key => $club)
                                    @if($club->id === $coach->coach_club_id)
                                        <a href="@if(strpos($club->club_url, 'http') !== false){{ $club->club_url }}@else /{{ $club->club_url }}@endif" title="Aikido klub {{ $club->club_name }}" target="_blank">
                                            Aikido klub {{ $club->club_name }}
                                        </a>
                                    @endif
                                @endforeach
                            @endif
                        <br /><br />
                        <div class="description">
                            {!! $coach->coach_cv !!}
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

            var lat = '{{ $coach->coach_lat }}';
            var lon = '{{ $coach->coach_lon }}';

            var map = new GMaps({
                div: '#map',
                zoom: 14,
                lat: lat,
                lng: lon,
            });

            map.addMarker({
                lat: lat,
                lng: lon,
                title: '{{ $coach->coach_name }}',
                infoWindow: {
                    content: '<p>{{ $coach->coach_name }} <br />{{ $coach->coach_address }}</p>'
                }
            });
        });
    </script>
@endsection
