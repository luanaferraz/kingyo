@extends('layouts.app')

@section('content')
    <section class="content-header d-flex">
        <h1 class="pull-left">Pets</h1>
        <h1 class="ml-auto">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('pets.create') !!}"><i class="fas fa-plus"></i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('pets.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

