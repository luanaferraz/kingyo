@extends('layouts.app')

@section('content')
    <section class="content-header d-flex">
        <div>
            <p class="pull-left">{!! $pet->nome !!}
        </div>
        <h1 class="pull-left">Vacinas</h1>

        <h1 class="ml-auto">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('vacinas.create', [$pet->id]) !!}"><i class="fas fa-plus"></i></a>
        </h1>
    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('vacinas.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

