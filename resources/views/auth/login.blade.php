@extends('templates.d&digital')

@section('content')
    <div class="container-fluid h-100">
        <div class="row h-75">
            <div class="col-lg-3 col-md-4 col-sm-6 ml-auto mr-auto align-self-center">
                <div class="card">
                    <div class="card-header text-center">Accesso</div>
                    <div class="card-body">
                        <form class="" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group text-center {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Indirizzo e-mail</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                       required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group text-center {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {{--<div class="form-group">

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                                        Me
                                    </label>
                                </div>

                            </div>--}}

                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <small>Password dimenticata?</small>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
