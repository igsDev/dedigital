@extends('templates.d&digital')

@section('content')
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-3 col-md-4 col-sm-6 ml-auto mr-auto align-self-center">
                <div class="card">
                    <div class="card-header text-center">Registrazione</div>
                    <div class="card-body">
                        <form class="" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group text-center{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Nome</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group text-center{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Cognome</label>
                                <input id="name" type="text" class="form-control" name="surname"
                                       value="{{ old('surname') }}"
                                       required autofocus>
                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group text-center{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Indirizzo email</label>
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group text-center{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group text-center">
                                <label for="password-confirm" class="control-label">Conferma Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Registrati
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
