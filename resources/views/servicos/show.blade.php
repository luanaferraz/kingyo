@extends('layouts.profissional')

@section('content')
    <section class="content-header">
        <h1>
            Serviço
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('servicos.show_fields')
                    <a href="{!! route('servicos.index') !!}" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
