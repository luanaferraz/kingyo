@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Foto
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => ['fotos.store', $pet->id],'class'=> 'col-lg-12 form-row', 'enctype' => "multipart/form-data"]) !!}

                        @include('fotos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
