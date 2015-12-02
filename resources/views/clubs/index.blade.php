@extends('template')

@section('page_description', 'Ovo strana sa klubovima')
@section('page_title', 'Klubovi')
@section('header_title', 'Klubovi')
@section('header_subtitle', 'Ovde možete pogledati klubove')

@section('main')
<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p>
        Znam, znam nije idealno, ali cemo da sredimo... <br> :)
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <a href="http://www.aikido.org.rs/" target="_blank" class="thumbnail" role="button">
              <img src="{{ asset('img/srAikidoFederacija.jpg') }}" alt="Aikido klub Centar">
              <div class="caption">
                <p>
                    Srpska Aikido Federacija <br>
                    Hadži-Prodanova 15 , Beograd  <br><br>

                    TRENINZI: <br>
                    Deca: ponedeljak, sreda, petak od 20 - 21<br>
                    Odrasli: ponedeljak, sreda, petak od 21
                </p>
              </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="http://www.aikikai.org.rs/" target="_blank" class="thumbnail" role="button">
              <img src="{{ asset('img/aikidoAsSrbije.jpg') }}" alt="Aikido Asocijacija Srbije">
              <div class="caption">
                <p>
                    Aikido Asocijacija Srbije <br>
                    Vidikovački Venac 73 O.Š. Branko Ćopić<br><br>

                    TRENINZI: <br>
                    Deca: ponedeljak, petak 19:15 - 20:30<br>
                    Odrasli: ponedeljak, sreda, petak 20:30 - 22:00<br>

                </p>
              </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="http://aikido-centar.org.rs/" target="_blank" class="thumbnail" role="button">
              <img src="{{ asset('img/AikidoCentar.png') }}" alt="Aikido klub Centar">
              <div class="caption">
                <p>
                    Aikido klub Centar <br>
                    SC Vračar, Sjenička 1, 11000 Beograd<br><br>

                    TRENINZI: <br>
                    utorak, četvrtak 20h - 21h <br>
                    nedelja 11h
                </p>
              </div>
        </a>
      </div>
    </div>
</div>

@endsection
