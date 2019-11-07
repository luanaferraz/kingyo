@extends('layouts.login')
@php
    $title_for_layout = 'Cadastre-se - CuidaPet';
@endphp

@section('content')
    <div class="col-12 col-md-10 offset-md-1 pt-3">
        <div class="col-12 title">
            <h3>CADASTRE-SE</h3>
            <span></span>
        </div>
    </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1">
                    {!! Form::open(['route' => 'registerProfissional','class'=> 'col-lg-12 form-row']) !!}

                        @include('profissionals.fields')

                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
