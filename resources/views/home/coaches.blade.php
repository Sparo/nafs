@extends('template')

@section('page_description', 'Ovde možete videti trenere')
@section('page_title', 'Treneri')
@section('header_title', 'Treneri')
@section('header_subtitle', 'Treneri nacionalne Aikido federacije Srbije')

@section('main')

    <div class="container">
        <div class="row">
            <p>Ovde sad poredjamo po DAN-ovima i azbučnom redu ljude ili možda po nekom drugom redosledu - to je do vas</p>
        </div>
        <div class="row">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="{{ asset('img/vesa.jpg') }}" alt="Velibor Vesovic">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Velibor Vesović</h4>
                    <p>
                        I sad ovde mogu da idu osnovni podaci o treneru:
                        <br><strong>DAN:</strong>
                        <br><strong>KLUB:</strong>
                        <br><strong>Kratka biografija:</strong>
                        <br>Mislim da bi bilo dobro da se napise nesto kao kratka biografija
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="{{ asset('img/vesa.jpg') }}" alt="Velibor Vesovic">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Velibor Vesović</h4>
                    <p>
                        I sad ovde mogu da idu osnovni podaci o treneru:
                        <br><strong>DAN:</strong>
                        <br><strong>KLUB:</strong>
                        <br><strong>Kratka biografija:</strong>
                        <br>Mislim da bi bilo dobro da se napise nesto kao kratka biografija
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="{{ asset('img/vesa.jpg') }}" alt="Velibor Vesovic">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Velibor Vesović</h4>
                    <p>
                        I sad ovde mogu da idu osnovni podaci o treneru:
                        <br><strong>DAN:</strong>
                        <br><strong>KLUB:</strong>
                        <br><strong>Kratka biografija:</strong>
                        <br>Mislim da bi bilo dobro da se napise nesto kao kratka biografija
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection
