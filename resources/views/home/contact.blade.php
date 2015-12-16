@extends('template')

@section('page_description', 'Kontakt strana')
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
								<div id="map"></div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
@endsection
