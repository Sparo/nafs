@extends('template')

@section('page_description', 'Ovo je strana sa vestima')
@section('page_title', 'Dogadjaji')
@section('header_title', 'Dogadjaji')
@section('header_subtitle', 'Pratite seminare i novosti u aikido svetu')


@section('main')

	<!-- Main Content -->
	<div class="container">
		<div class="row">
			@foreach($events as $event)
				<div class="col-sm-6 col-md-4">
					<a href="{{ $event->event_url }}" class="thumbnail" title="{{ $event->event_title }} {{ $event->event_type }} {{ $event->event_address }}">
						<img style="width:300px;height:300px" src="{{ $event->event_img_url or 'http://dummyimage.com/300x300/000/fff.jpg'}}" alt="{{ $event->event_title }} {{ $event->evant_address }}">
						<div class="caption">
							<h3>
								{{ $event->event_title }} <br />
								<small>{{ $event->event_type }}</small> <br />
								<small>{{ date('d. m. Y', strtotime($event->event_start_time)) . ' - ' . date('d. m. Y', strtotime($event->event_end_time)) }}</small>
							</h3>
							<div>
								{{ $event->event_address }}
							</div>

						</div>
					</a>
				</div>
			@endforeach

		</div>
	</div>


@endsection
