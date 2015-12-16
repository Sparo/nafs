@extends('template')

@section('page_description', 'Nacionalna Aikido federacija Srbije - Klubovi')
@section('page_title', 'Klubovi ')
@section('header_title', 'Pregled klubova')
@section('header_subtitle', count($clubs) .' klubova iz cele zemlje')

@section('main')
    <div class="container">
        <div class="row">
            @foreach($clubs as $club)
                <div class="col-sm-6 col-md-4">
                    <a href="
                    @if(strpos($club->club_url, 'http') !== false)
                        {{ $club->club_url }}
                    @elseif(strpos($club->club_url, 'http') === false && strpos($club->club_fb_url, 'http') !== false)
                        {{ $club->club_fb_url }}
                    @elseif(strpos($club->club_fb_url, 'http') === false)
                        {{ $club->club_url }}
                    @else
                        #
                    @endif" target="_blank" class="thumbnail" role="button" title="{{ $club->club_name }}">
                        <img style="height:300px" src="{{ $club->club_logo_url }}" alt="{{ $club->club_name }} logo">
                        <div class="caption">
                            <h4>{{ $club->club_name }}</h4>
                            <p>
                                <strong>Web sajt:</strong>
                                    @if($club->club_url && strlen($club->club_url) > 0 && strpos($club->club_url, 'clubs/') === false){{ $club->club_url }}@else-@endif<br />
                                <strong>Adresa:</strong>
                                    @if($club->club_address && strlen($club->club_address) > 0){{ $club->club_address }}@else-@endif<br />
                                <strong>Telefon:</strong>
                                    @if($club->club_phone && strlen($club->club_phone) > 0){{ $club->club_phone }}@else-@endif<br />
                                <strong>Email:</strong>
                                    @if($club->club_email && strlen($club->club_email) > 0){{ $club->club_email }}@else-@endif<br />
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
