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
							<input type="text" class="form-control" id="event_title" name="event_title" placeholder="Event Title">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="event_url" id="event_url" placeholder="Url za dogadjaj, FB stranica, ili neki drugi url (ukoliko ostane prazno bice generisan url na ovom sajtu)">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<span class="btn btn-default btn-file">
										Upload Image for event
										<input type="file">
									</span>
								</div>
								<div class="col-sm-6">
									<img src="http://dummyimage.com/340x240/422d42/ffffff.jpg" alt="DummyImage" class="img-thumbnail">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" name="event_address" id="event_address" placeholder="Adresa - ako postoji">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6">
												<input readonly="readonly" type="text" class="form-control col-xs-6" name="event_lat" id="event_lat" placeholder="lat">
											</div>
											<div class="col-xs-6">
												<input readonly="readonly" type="text" class="form-control col-xs-6" name="event_lon" id="event_lon" placeholder="lon">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class='input-group date' id="event_time">
											<input type="text" class="form-control" name="event_time" placeholder="Time">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div id="map"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="event_description" class="form-control" id="event_description" rows="10" placeholder="Opis dogadjaja" style="width:100%"></textarea>
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
@endsection
