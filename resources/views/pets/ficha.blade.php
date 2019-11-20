@extends('layouts.profissional')

@section('content')
    <div class="content-fluid">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" >
                    <div class="col-12 bg-gradient-primary text-white d-flex py-2">

                        <div class="px-2 align-self-center">
                            <img src="{!! !empty($pet->fotos[0]) ? '/uploads/fotos/'.$pet->fotos[0]->file: '/images/patinha.png' !!}" class="img-fluid" width="{!! !empty($pet->fotos[0]) ? '150px': '80px' !!}">
                        </div>

                        <div class="px-2 align-self-center">
                            <h3 class="font-weight-bold mb-0">{!! $pet->nome !!}</h3>
                            <p class="mb-0">{!! $pet->raca !!}</p>
                            <p class="mb-0">{!! $pet->especie !!} - {!! $pet->sexo !!}</p>
                            <p class="mb-0">{!! $pet->idade !!}</p>
                        </div>

                    </div>

                    <div class="col-12 pt-4 d-flex">
                        <i class="fas fa-syringe fa-2x pb-2"></i>
                        <h5>Carteira de vacinação</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="vacinas-table">
                            <thead class="bg-light">
                            <tr>
                                <th>Vacina</th>
                                <th>Data da Aplicação</th>
                                <th>Próxima Vacina</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pet->vacinas as $vacina)

                                <tr>
                                    <td>{!! $vacina->nome !!}</td>
                                    <td>{!! $vacina->dataAplicacao !!}</td>
                                    <td>{!! $vacina->dataProxima !!}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 py-2 pt-4 d-flex">
                        <i class="fas fa-capsules fa-2x pb-2"></i>
                        <h5>Medicamentos</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="medicacaos-table">
                            <thead class="bg-light ">
                            <tr>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pet->medicacaos as $medicacao)
                                <tr>
                                    <td>{!! $medicacao->nome !!}</td>
                                    <td>{!! $medicacao->data !!}</td>
                                    <td>{!! $medicacao->hora !!}h</td>
                                    <td><span class="badge {{ $medicacao->status == 1 ? ' badge-success':' badge-warning' }}"> {{ $medicacao->status == 1 ? 'Ativo':'Inativo' }}</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 pt-4 d-flex">
                        <i class="fas fa-calendar-alt fa-2x pb-2"></i>
                        <h5>Eventos</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="eventoPets-table">
                            <thead class="bg-light">
                            <tr>
                                <th>Data</th>
{{--                                <th>Pet</th>--}}
                                <th>Tipo</th>
                                <th>Descrição</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pet->eventoPets as $eventoPet)
                                <tr>
                                    <td>{!!$eventoPet->data !!}</td>
{{--                                    <td>{!! $eventoPet->pet_id !!}</td>--}}
                                    <td>{!! $eventoPet->tipo !!}</td>
                                    <td>{!! $eventoPet->descricao !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
