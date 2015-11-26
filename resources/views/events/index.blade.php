@extends('template')

@section('page_description', 'Ovo je strana sa vestima')
@section('page_title', 'Dogadjaji')
@section('header_title', 'Dogadjaji')
@section('header_subtitle', 'Pratite seminare i novosti u aikido svetu')


@section('main')

<!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('img/miquele.jpg') }}" alt="Seminar">
          <div class="caption">
            <h3>Michele Quaranta</h3>
            <p>
                Dojo “SEISHIN” Aikido klub <br>
                OŠ “Branko Ćopić” Vidikovački venac br. 73 <br><br>

                TAKSA: 30 € /za članove AAS/ 40 € /ostali/
            </p>

            <p>
                <a href="https://www.facebook.com/events/1026310160722509/" target="_blank" class="btn btn-link" role="button">procitaj vise</a>
            </p>

          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('img/miquele.jpg') }}" alt="Seminar">
          <div class="caption">
            <h3>Michele Quaranta</h3>
            <p>
                Dojo “SEISHIN” Aikido klub <br>
                OŠ “Branko Ćopić” Vidikovački venac br. 73 <br><br>

                TAKSA: 30 € /za članove AAS/ 40 € /ostali/
            </p>

            <p>
                <a href="https://www.facebook.com/events/1026310160722509/" target="_blank" class="btn btn-link" role="button">procitaj vise</a>
            </p>

          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('img/miquele.jpg') }}" alt="Seminar">
          <div class="caption">
            <h3>Michele Quaranta</h3>
            <p>
                Dojo “SEISHIN” Aikido klub <br>
                OŠ “Branko Ćopić” Vidikovački venac br. 73 <br><br>

                TAKSA: 30 € /za članove AAS/ 40 € /ostali/
            </p>

            <p>
                <a href="https://www.facebook.com/events/1026310160722509/" target="_blank" class="btn btn-link" role="button">procitaj vise</a>
            </p>

          </div>
        </div>
      </div>
    </div>
</div>


@endsection
