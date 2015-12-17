@extends('edit_template')


@section('main')

    <!-- Main Content -->
    <div class="container">
        <br />
        <div class="row">
            <a href="{{ action('EventsController@create') }}" class="btn btn-success">
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
                <input type="hidden" id="csrf" value="{{ csrf_token() }}">
                @foreach($events as $key => $event)
                    <tr id="row{{ $key+1 }}" class="row-data-view">
                        <td>{{ $key+1 }}</td>
                        <td>{{ $event->event_title }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="#edit" id="edit" class="btn btn-warning j-edit">Edit</a>
                                <a href="#delete" id="delete" class="btn btn-danger j-delete">Delete</a>
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
