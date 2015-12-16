@extends('edit_template')

@section('add_style')
  <link href="/css/summernote.css" rel="stylesheet" type="text/css">
@endsection

@section('main')

  <div class="container">
    <div class="row">
      <h3>Unesite podatke trenera</h3>
      <div class="panel panel-default">
        <div class="panel-body">
         {!! Form::open(array('action' => 'CoachesController@store', 'files' => true)) !!}

            <div class="form-group">
              <div class="row">
                <div class="col-md-3">
                  <input type="text" class="form-control" id="coach_first_name" name="coach_first_name" placeholder="Ime">
                </div>
                <div class="col-md-3">
                  <input type="text" class="form-control" id="coach_last_name" name="coach_last_name" placeholder="Prezime">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <span class="btn btn-default btn-file">
                    <span class="file-indicator">Dodaj sliku trenera</span>
                    <input type="file" name="coach_img_url">
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="coach_title" name="coach_title" placeholder="Zvanje trenera">
            </div>
            <div class="form-group">
              <select class="form-control" name="coach_level">
                <option value="0">-- Izaberite DAN trenera --</option>
                <option value="9">9 DAN</option>
                <option value="8">8 DAN</option>
                <option value="7">7 DAN</option>
                <option value="6">6 DAN</option>
                <option value="5">5 DAN</option>
                <option value="4">4 DAN</option>
                <option value="3">3 DAN</option>
                <option value="2">2 DAN</option>
                <option value="1">1 DAN</option>
                <option value="-1">1 KYU</option>
                <option value="-2">2 KYU</option>
                <option value="-3">3 KYU</option>
                <option value="-4">4 KYU</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" name="coach_club_id">
                <option value="0">-- Izaberite Klub --</option>
                @foreach($clubs as $club)
                  <option value="{{ $club->id }}">{{ $club->club_name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <textarea name="coach_cv" class="form-control" id="coach_cv" rows="10" placeholder="Biografija trenera" style="width:100%"></textarea>
            </div>
            <div class="form-group">
              <textarea name="coach_note" class="form-control" id="coach_note" rows="10"  placeholder="Napomena ako je potrebno" style="width:100%"></textarea>
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
      $('#coach_cv, #coach_note').summernote({
        height: 300,
      });
    });
  </script>
@endsection
