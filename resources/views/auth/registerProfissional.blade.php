
@extends('layouts.login')
@php
    $title_for_layout = 'Cadastre-se - CuidaPet';
@endphp

@section('content')

     <div class="row">

        <div class="col-12 col-md-10 offset-md-1 pt-3">
            <div class="col-12 title">
                <h3>CADASTRE-SE</h3>
                <span></span>
            </div>
        </div>
        <div class="col-12 col-md-10 offset-md-1">



            {!! Form::open(['route' => 'registerProfissional', 'class' => 'col-lg-12 form-row', 'id' => 'cadastroProfissional', 'name' => 'cadastroProfissional']) !!}

            <input type="hidden" id="redirect" value="{{URL::to(Route::getCurrentRoute()->getPrefix())}}">
            <!-- Nome Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Profissao Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('profissao', 'Profissao:') !!}
                {!! Form::text('profissao', null, ['class' => 'form-control']) !!}

            </div>

            <!-- Pais Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('pais', 'Pais:') !!}
                {!! Form::text('pais', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Estado Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('estado', 'Estado:') !!}
                {!! Form::select('estado',array('AC' => 'AC', 'AL' => 'AL','AP' => 'AP','AM' => 'AM','BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF','ES' => 'ES', 'GO' => 'GO','MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS','MG' => 'MG', 'PA' => 'PA','PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ'
                => 'RJ', 'RN' => 'RN','RS' => 'RS', 'RO' => 'RO','RR' => 'RR','SC' => 'SC','SP' => 'SP','SE' => 'SE','TO' => 'TO' ), null, ['class' => 'form-control']) !!}
            </div>

            <!-- Cidade Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('cidade', 'Cidade:') !!}
                {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Bairro Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('bairro', 'Bairro:') !!}
                {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Rua Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('rua', 'Rua:') !!}
                {!! Form::text('rua', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Numero Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('numero', 'Numero:') !!}
                {!! Form::text('numero', null, ['class' => 'form-control']) !!}
            </div>


            <!-- Telefone Field -->
            <div class="form-group col-sm-6">

                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::text('telefone', null, ['class' => 'form-control phone']) !!}
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
            <input type="hidden" id="role_id" name="role_id" value="2">

            <input type="hidden" id="usuario_id" name="usuario_id" value="null">

                <div class="col-lg-12 text-center my-4">
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        {{--{!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}--}}

                        <input type="button" value="CADASTRAR" id="cadastrar" class="btn btn-primary">
                    </div>
                </div>

            {!! Form::close() !!}

        </div>
    </div>



@endsection

