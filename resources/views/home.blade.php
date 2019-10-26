@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="col-12 d-flex">
                <h1 class="pull-left">Pets</h1>
                <h1 class="ml-auto">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('pets.create') !!}"><i class="fas fa-plus"></i></a>
                </h1>
            </section>
            @foreach($pets as $pet)
                <div class="col-12 col-md-6 my-2">
                    <div class="col-12 bg-light d-flex py-2">

                        <div class="px-2 ">
                            <img src="/images/patinha.png" class="img-fluid" width="80px">
                        </div>

                        <div class="px-2">
                            <h3 class="font-weight-bold">{!! $pet->nome !!}</h3>
                            <p class="mb-0">{!! $pet->raca !!}</p>
                            <p class="mb-0">{!! $pet->idade !!}</p>
                        </div>

                        <div class="px-2 align-self-center ml-auto">
                            {!! Form::open(['route' => ['pets.destroy', $pet->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{!! route('pets.show', [$pet->id]) !!}" class='btn btn-secondary border-right-dark btn-xs'><i class="fas fa-bars"></i></a>
                                <a href="{!! route('pets.edit', [$pet->id]) !!}" class='btn btn-secondary border-right-dark btn-xs'><i class="fas fa-edit"></i></a>
                                {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                    @endforeach


        </div>
    </div>

@endsection
