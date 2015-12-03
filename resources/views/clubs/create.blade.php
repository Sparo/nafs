@extends('edit_template')

@section('add_style')
	<link href="/css/summernote.css" rel="stylesheet" type="text/css">
@endsection

@section('main')

	<div class="container">
		<div class="row">
			<h1>Unesite podatke za klub</h1>
			<div class="panel panel-default">
				<div class="panel-body">
					{!! Form::open(array('action' => 'ClubsController@store', 'files' => true)) !!}

						<div class="form-group">
							<input type="text" class="form-control" id="club_name" name="club_name" placeholder="Naziv kluba">
						</div>
						<div class="form-group">
							<select class="form-control" name="club_coach_id">
								<option value="">Izaberite trenera kluba</option>
								<option value="1">Rade Janković</option>
								<option value="2">Velibor Vesović</option>
								<option value="3">Boško Jelić</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="club_url" id="club_url" placeholder="Link do sajta kluba">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="club_fb_url" id="club_fb_url" placeholder="Link do Facebook stranice">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<span class="btn btn-default btn-file">
										<span class="file-indicator">Dodajte logo kluba</span>
										<input type="file" name="club_logo_url">
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="club_email" id="club_email" placeholder="Email kluba">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="club_phone" id="club_phone" placeholder="Telefon kluba">
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control" name="club_address" id="address" placeholder="Adresa kluba">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6">
												<input readonly="readonly" type="text" class="form-control col-xs-6" name="club_lat" id="lat" placeholder="lat">
											</div>
											<div class="col-xs-6">
												<input readonly="readonly" type="text" class="form-control col-xs-6" name="club_lon" id="lon" placeholder="lon">
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
							<textarea name="club_note" class="form-control" id="club_note" rows="10"  placeholder="Napomena ako je potrebno" style="width:100%"></textarea>
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
			$('#club_note').summernote({
				height: 300,
			});
		});
	</script>
@endsection
