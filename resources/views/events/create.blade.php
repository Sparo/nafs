@extends('edit_template')

@section('add_style')
	<link href="/css/summernote.css" rel="stylesheet" type="text/css">
@endsection

@section('main')

	<div class="container">
		<div class="row">
			<h3>Enter data for event</h3>
			<div class="panel panel-default">
				<div class="panel-body">

					{!! Form::open(array('action' => 'EventsController@store', 'files' => true)) !!}

						<div class="form-group">
							<input type="text" class="form-control" id="event_title" name="event_title" placeholder="Naziv dogadjaja">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="event_type" name="event_type" placeholder="Tip dogadjaja (vikend seminar, yudansha seminar) ...">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="event_url" id="event_url" placeholder="Url za dogadjaj, FB stranica, ili neki drugi url (ukoliko ostane prazno bice generisan url na ovom sajtu)">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<span class="btn btn-default btn-file">
										<span class="file-indicator">Upload Image for event</span>
										<input type="file" name="event_img_url">
									</span>
								</div>
								<div class="col-sm-6">
									<div class="dropdown">
										<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											Slike sa Prethodnih seminara
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											@foreach($events as $event)
												<li>
													<a href="#"><img style="width:50px;height:50px;" src="{{ $event->event_img_url }}" alt="{{ $event->event_title }}">{{ $event->event_title }}</a>
												</li>
											@endforeach
										</ul>
									</div>
								</div>

							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" name="event_address" id="address" placeholder="Adresa - ako postoji">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6">
												<input readonly="readonly" type="text" class="form-control col-xs-6" name="event_lat" id="lat" placeholder="lat">
											</div>
											<div class="col-xs-6">
												<input readonly="readonly" type="text" class="form-control col-xs-6" name="event_lon" id="lon" placeholder="lon">
											</div>
										</div>
									</div>
									<div class="form-group">
											<div class="row">
												<div class="col-xs-6">
													<div class='input-group date' id="event_start_time">
														<input type="text" class="form-control" name="event_start_time" placeholder="Od">
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
												</div>
												<div class="col-xs-6">
													<div class='input-group date' id="event_end_time">
														<input type="text" class="form-control" name="event_end_time" placeholder="Do">
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div id="map"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="event_description" class="form-control" id="event_description" rows="10" placeholder="Opis dogadjaja" style="width:100%">Opis Dogadjaja</textarea>
						</div>
						<div class="form-group">
							<textarea name="event_note" class="form-control" id="event_note" rows="10"  placeholder="Napomena ako je potrebno" style="width:100%"></textarea>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection

@section('additional_scripts')
	<script src="/js/maps-custom.js"></script>
	<script src="/js/summernote.js"></script>
	<script>
		$(document).ready(function() {
			/*************************************
			 * Sumernote
			 *************************************/
			$('#event_description, #event_note').summernote({
				height: 300,
			});
		});
	</script>
@endsection
