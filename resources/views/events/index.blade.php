@extends('edit_template')


@section('main')

    <!-- Main Content -->
    <div class="container">
        <br />
        <div class="row">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Naziv</th>
                    <th>Akcije</th>
                </thead>
                <tbody>
                @foreach($events as $key => $event)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $event->event_title }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="{{ action('EventsController@edit', ['id' => $event->id]) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ action('EventsController@destroy', ['id' => $event->id]) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
