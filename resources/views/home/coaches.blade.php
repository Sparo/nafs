@extends('template')

@section('page_description', 'Spisak trenera u Nacionalnoj Aikido federaciji Srbije')
@section('page_title', 'Spisak trenera')
@section('header_title', 'Lista trenera')
@section('header_subtitle', 'Treneri nacionalne Aikido federacije Srbije (Ukupno: '. count($coaches) . ')')

@section('main')
    <div class="container">
        <div class="row">
            @foreach($coaches as $coach)
                <div class="col-sm-6 col-md-4">
                    <a style="height:150px" href="/treneri/{{ $coach->id }}" title="{{ $coach->coach_first_name }} {{ $coach->coach_last_name }}" class="thumbnail">
                        <div class="caption">
                            <h3>
                                {{ $coach->coach_last_name }}, {{ $coach->coach_first_name }} {{ $coach->coach_level > 0 ? $coach->coach_level . ' DAN' : abs($coach->coach_level) . ' KYU' }} <br />
                                <small>
                                    @if(strlen($coach->coach_title)) {{ $coach->coach_title }} @else - @endif <br />
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


@section('additional_scripts')
    <script>
        $(document).ready(function () {
            $('a.thumbnail').on('click', function (event) {
                event.preventDefault();
            });
        });
    </script>
@endsection
