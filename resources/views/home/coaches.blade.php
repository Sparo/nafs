@extends('template')

@section('page_description', 'Ovde možete videti trenere')
@section('page_title', 'Treneri')
@section('header_title', 'Treneri')
@section('header_subtitle', 'Treneri nacionalne Aikido federacije Srbije')

@section('main')
    <div class="container">
        <div class="row">
            <div class="list-group">
            @foreach($coaches as $coach)
                    <a href="{{ action('CoachesController@show', ['id' => $coach->id]) }}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{ $coach->coach_first_name }} {{ $coach->coach_last_name }} {{ $coach->coach_level > 0 ? $coach->coach_level . ' DAN' : abs($coach->coach_level) . ' KYU' }}</h4>
                        <p class="list-group-item-text">
                            <strong>Klub:</strong> {{ $clubs[$coach->id]->club_name }}
                        </p>
                    </a>
            @endforeach
            </div>
        </div>
    </div>

@endsection
