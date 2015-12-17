@extends('template')

@section('page_description', 'Kontaktirajte nas ili potražite klub koji vas interesuje')
@section('page_title', 'Kontaktirajte nas')
@section('header_title', 'Kontaktirajte nas')
@section('header_subtitle', 'Pitajte sve sto vas interesuje')


@section('main')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
				<h3>Kontakt</h3><hr>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">
									<h4>Velibor Vesović <small>predsednik</small></h4>
									<p>
										<strong>Telefon:</strong> <a href="tel:+381643499932">0643499932</a> <br />
										<strong>Email:</strong> <a href="mailto:vesovicv@eunet.rs">vesovicv@eunet.rs</a>
									</p>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
									<h4>Boško Jelić <small>generalni sekretar</small></h4>
									<p>
										<strong>Telefon:</strong> <a href="tel:+381641365050">0641365050</a> <br />
										<strong>Email:</strong> <a href="mailto:office@aikidosrbije.org.rs">office@aikidosrbije.org.rs</a>
									</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Lokacije svih klubova u Srbiji</h3>
							</div>
							<div class="panel-body">
								<div id="map" style="height:600px"></div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script>
        $(document).ready(function () {

            var map = new GMaps({
                div: '#map',
                zoom: 7,
                lat: 44.012793, //lokacija Kragujevac
                lng: 20.911423,
            });

        	$.get('/contact/clubs', function (clubs, err) {
        		$.each(clubs, function(index, club) {
		            map.addMarker({
		                lat: club.club_lat,
		                lng: club.club_lon,
		                title: 'Aikido klub ' + club.club_name,
		                infoWindow: {
		                    content: '<h3>Aikido klub '+ club.club_name +'</h3><h5>Website: <a href="'+ club.club_url +'" target="_blank">Aikido klub ' + club.club_name + ' websajt</a></h5><h5>Email: <a href="mailto:' + club.club_email + '" target="_blank">' + club.club_email + '</a></h5><h5>Tel: <a href="tel:' + club.club_phone + '" target="_blank">' + club.club_phone + '</a></h5>'
		                }
		            });
        		});
        	});
        });
    </script>
@endsection
