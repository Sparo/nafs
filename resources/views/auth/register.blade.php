@extends('edit_template')


@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div>
            <br /><br />
                <form method="POST" action="/auth/register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ime">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password Confirmation">
                    </div>
                    <button type="submit" class="btn btn-default">Registracija</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
