@extends('layouts.profissional')

@section('content')
    <section class="content-header">
        <h1>
            Serviço
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'servicos.store','class'=> 'col-lg-12 form-row']) !!}

                        @include('servicos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
