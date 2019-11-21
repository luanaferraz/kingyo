@extends('layouts.profissional')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 d-flex">
                <h1 class="pull-left">Pacientes</h1>

            </section>

            @foreach($tutores as $tutor)
                <div class="col-12  my-2">
                    <h5>{{$tutor->usuario->name}}</h5>
                    <div class="row">

                        @foreach($tutor->pets as $paciente)
                            <div class="col-12 col-md-6 my-2">
                                <div class="col-12 bg-light d-flex py-2">

                                    <div class="px-2 align-self-center">
                                        <img src="{!! !empty($paciente->fotos[0]) ? '/uploads/fotos/'.$paciente->fotos[0]->file: '/images/patinha.png' !!}" class="img-fluid" width="{!! !empty($paciente->fotos[0]) ? '150px': '80px' !!}">
                                    </div>

                                    <div class="px-2">
                                        <h3 class="font-weight-bold">{!! $paciente->nome !!}</h3>
                                        <p class="mb-0">{!! $paciente->raca !!}</p>
                                        <p class="mb-0">{!! $paciente->idade !!}</p>
                                    </div>

                                    <div class="px-2 align-self-center ml-auto">
                                        {!! Form::open(['route' => ['pacientes.destroy', $paciente->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('ficha', [$paciente->id]) !!}" class='btn btn-secondary border-right-dark btn-xs'><i class="fas fa-bars"></i></a>
                                            <a href="{!! route('pets.edit', [$paciente->id]) !!}" class='btn btn-secondary border-right-dark btn-xs'><i class="fas fa-edit"></i></a>
                                            {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
