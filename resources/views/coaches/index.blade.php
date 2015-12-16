@extends('edit_template')


@section('main')

    <!-- Main Content -->
    <div class="container">
        <br />
        <div class="row">
            <a href="{{ action('CoachesController@create') }}" class="btn btn-success">
                Dodaj <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            </a>
        </div>
        <div class="row">
            <table class="table table-hover" id="data_table">
                <thead>
                    <th>#</th>
                    <th>Naziv</th>
                    <th>Akcije</th>
                </thead>
                <tbody>
                @foreach($coaches as $key => $coach)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $coach->coach_first_name }} {{ $coach->coach_last_name }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="{{ action('CoachesController@edit', ['id' => $coach->id]) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ action('CoachesController@destroy', ['id' => $coach->id]) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('additional_scripts')
    <script src="{{ asset('js/underscore.js') }}"></script>
    <script src="{{ asset('js/backbone.js') }}"></script>
    <script src="{{ asset('js/singlepage.js') }}"></script>
@endsection
