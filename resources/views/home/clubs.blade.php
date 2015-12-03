@extends('template')

@section('page_description', 'Nacionalna Aikido federacija Srbije - Klubovi')
@section('page_title', 'Klubovi ')
@section('header_title', 'Klubovi u Nacionalnoj Aikido federaciji Srbije')
@section('header_subtitle', 'Ima ukupno '. count($clubs) .' clubova iz cele zemlje')

@section('main')
    <div class="container">
        <div class="row">
            @foreach($clubs as $club)
                <div class="col-sm-6 col-md-4">
                    <a href="{{ $club->club_url }}" target="_blank" class="thumbnail" role="button" title="{{ $club->club_name }}">
                        <img src="{{ $club->club_logo_url }}" alt="{{ $club->club_name }} logo">
                        <div class="caption">
                            <h4>{{ $club->club_name }}</h4>
                            <p>
                                <strong>Adresa:</strong> {{ $club->club_address or '-' }} <br />
                                <strong>Email:</strong> {{ $club->club_email or '-' }} <br />
                                <strong>Telefon:</strong> {{ $club->club_phone or '-' }} <br />
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
