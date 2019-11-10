@extends('layouts.app')

@section('content')
    <section class="content-header d-flex">
        <h1 class="pull-left">Profissionais</h1>
        <h1 class="ml-auto">
{{--           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('profissionals.create') !!}"><i class="fas fa-plus"></i></a>--}}
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="col-12 ">
            {!! Form::open(['class' => 'row', 'method' => 'GET', 'route' => 'search']) !!}

            <div class="form-group pt-2 col-md-5">
                <label for="exampleFormControlInput1">NOME</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite aqui">
            </div>


            <div class="form-group pt-2 col-md-5">
                <label for="exampleFormControlInput1">CIDADE</label>
                <select class="form-control bg-light" id="cidades" name="cidades[]" multiple="multiple"></select>
                <div id="cidades-container"></div>
            </div>

            <div class="form-group pt-4 col-md-2 ">
            <button type="submit" class="btn btn-primary bg-green">Buscar</button>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('profissionals.encontrar')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

