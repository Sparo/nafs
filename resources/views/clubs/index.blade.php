@extends('template')

@section('page_description', 'Ovo strana sa klubovima')
@section('page_title', 'Klubovi')
@section('header_title', 'Klubovi')
@section('header_subtitle', 'Ovde možete pogledati klubove')

@section('main')
<div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <a href="http://aikido-centar.org.rs/" target="_blank" class="thumbnail" role="button">
              <img src="{{ asset('img/AikidoCentar.png') }}" alt="Aikido klub Centar">
              <div class="caption">
                <h3>Michele Quaranta</h3>
                <p>
                    Dojo “SEISHIN” Aikido klub <br>
                    OŠ “Branko Ćopić” Vidikovački venac br. 73 <br><br>

                    TAKSA: 30 € /za članove AAS/ 40 € /ostali/
                </p>

              </div>
        </a>
      </div>
    </div>
</div>

@endsection
