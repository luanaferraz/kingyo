

@extends('layouts.login')
@section('content')

    <div class="login-logo col-md-6 col-12 d-flex mt-5 justify-content-center">
        <a href="{{ url('/home') }}" class=" "><img src="/images/kingyocolorido.png" class=" img-fluid align-self-center bg-transparent" alt="Responsive image"></a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body col-md-4 col-12 pt-5 align-self-center">
                        <h3 class="login-box-msg">Login</h3>

        <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4 mx-3">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                </div>
                <div class="col-xs-4 mx-3">
                    <a href="{{ url('/register') }}" class="btn btn-primary btn-block btn-flat">Cadastre-se</a>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
@endsection
