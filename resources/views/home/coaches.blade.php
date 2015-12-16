@extends('template')

@section('page_description', 'Ovde možete videti trenere')
@section('page_title', 'Treneri')
@section('header_title', 'Treneri')
@section('header_subtitle', 'Treneri nacionalne Aikido federacije Srbije')

@section('main')
    <div class="container">
        <div class="row">
            @foreach($coaches as $coach)
                <div class="col-sm-6 col-md-4">
                    <a style="height:130px" href="/treneri/{{ $coach->id }}" title="{{ $coach->coach_first_name }} {{ $coach->coach_last_name }}" class="thumbnail">
                        <div class="caption">
                            <h3>
                                {{ $coach->coach_last_name }}, {{ $coach->coach_first_name }} {{ $coach->coach_level > 0 ? $coach->coach_level . ' DAN' : abs($coach->coach_level) . ' KYU' }} <br />
                                <small>
                                    {{ $coach->coach_title }}
                                    @if(count($clubs) > 0)
                                        @foreach ($clubs as $key => $club)
                                            @if($club->id === $coach->coach_club_id)
                                                {{ $club->club_name }}
                                            @endif
                                        @endforeach
                                    @endif
                                </small>
                            </h3>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>

@endsection
