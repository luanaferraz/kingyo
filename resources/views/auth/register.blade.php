{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <title>InfyOm Laravel Generator | Registration Page</title>--}}

{{--    <!-- Tell the browser to be responsive to screen width -->--}}
{{--    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">--}}

{{--    <!-- Bootstrap 3.3.7 -->--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">--}}

{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">--}}

{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">--}}

{{--    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--    <!--[if lt IE 9]>--}}
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <![endif]-->--}}
{{--</head>--}}
{{--<body class="hold-transition register-page">--}}
{{--<div class="register-box">--}}
{{--    <div class="register-logo">--}}
{{--        <a href="{{ url('/home') }}"><b>InfyOm </b>Generator</a>--}}
{{--    </div>--}}

{{--    <div class="register-box-body">--}}
{{--        <p class="login-box-msg">Register a new membership</p>--}}

{{--        <form method="post" action="{{ url('/register') }}">--}}

{{--            {!! csrf_field() !!}--}}

{{--            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">--}}
{{--                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">--}}
{{--                <span class="glyphicon glyphicon-user form-control-feedback"></span>--}}

{{--                @if ($errors->has('name'))--}}
{{--                    <span class="help-block">--}}
{{--                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">--}}
{{--                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}

{{--                @if ($errors->has('email'))--}}
{{--                    <span class="help-block">--}}
{{--                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                <input type="password" class="form-control" name="password" placeholder="Password">--}}
{{--                <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}

{{--                @if ($errors->has('password'))--}}
{{--                    <span class="help-block">--}}
{{--                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
{{--                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">--}}
{{--                <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}

{{--                @if ($errors->has('password_confirmation'))--}}
{{--                    <span class="help-block">--}}
{{--                        <strong>{{ $errors->first('password_confirmation') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-xs-8">--}}
{{--                    <div class="checkbox icheck">--}}
{{--                        <label>--}}
{{--                            <input type="checkbox"> I agree to the <a href="#">terms</a>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--                <div class="col-xs-4">--}}
{{--                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>--}}
{{--    </div>--}}
{{--    <!-- /.form-box -->--}}
{{--</div>--}}
{{--<!-- /.register-box -->--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

{{--<!-- AdminLTE App -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>--}}

{{--<script>--}}
{{--    $(function () {--}}
{{--        $('input').iCheck({--}}
{{--            checkboxClass: 'icheckbox_square-blue',--}}
{{--            radioClass: 'iradio_square-blue',--}}
{{--            increaseArea: '20%' // optional--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}


@extends('layouts.login')
@php
    $title_for_layout = 'Kingyo';
@endphp

@section('content')

     <div class="row">

        <div class="col-12 col-md-10 offset-md-1 pt-3">
            <div class="col-12 title">
                <h3>Cadastro Tutor</h3>
                <span></span>
            </div>
        </div>
        <div class="col-12 col-md-10 offset-md-1">

            {!! Form::open(['class' => 'col-lg-12 form-row', 'id' => 'cadastro', 'name' => 'cadastro']) !!}

            <input type="hidden" id="redirect" value="{{URL::to(Route::getCurrentRoute()->getPrefix())}}">
            <!-- Nome Field -->
            <div class="form-group col-sm-8">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Telefone Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::text('telefone', null, ['class' => 'form-control phone']) !!}
            </div>

            <!-- Rua Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('rua', 'Logradouro:') !!}
                {!! Form::text('rua', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Numero Field -->
            <div class="form-group col-sm-2">
                {!! Form::label('numero', 'Numero:') !!}
                {!! Form::number('numero', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Bairro Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
            </div>


            <!-- Cidade Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Estado Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('estado', 'Estado:') !!}
                {!! Form::select('estado',array('AC' => 'AC', 'AL' => 'AL','AP' => 'AP','AM' => 'AM','BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF','ES' => 'ES', 'GO' => 'GO','MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS','MG' => 'MG', 'PA' => 'PA','PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ'
                => 'RJ', 'RN' => 'RN','RS' => 'RS', 'RO' => 'RO','RR' => 'RR','SC' => 'SC','SP' => 'SP','SE' => 'SE','TO' => 'TO' ), null, ['class' => 'form-control']) !!}
            </div>

            <!-- Email Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('email', 'E-mail:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Email Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('email_confirm', 'Confirmar E-mail:') !!}
                {!! Form::email('email_confirm', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Password Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('password', 'Senha:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <!-- Password Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('password_confirmation', 'Confirmar senha:') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>

            <input type="hidden" id="usuario_id" name="usuario_id" value="null">

            <input type="hidden" id="role_id" name="role_id" value="1">

            {!! Form::close() !!}

        </div>
    </div>

    <div class="col-lg-12 text-center my-4">
        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {{--{!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}--}}
            <input type="button" value="Cadastrar" id="cadastrar" class="btn btn-primary">
            <a href="{!! url('/') !!}" class="btn btn-secondary">Cancelar</a>

        </div>
    </div>

@endsection

