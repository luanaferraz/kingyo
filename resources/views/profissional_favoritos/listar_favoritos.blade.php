<div class="table-responsive">
    <table class="table" id="profissionals-table">
        <thead class="bg-gradient-primary text-white">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Avaliação</th>
            <th colspan="3">Avaliar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($favoritos as $favorito)
            <tr>
                <td>{!! $favorito->nome !!} <br> <strong>{!! $favorito->profissao !!}</strong></td>
                <td>{!! $favorito->rua !!}, nº{!! $favorito->numero !!} {!! $favorito->bairro !!} <br> {!! $favorito->cidade !!} | {!! $favorito->estado !!}</td>
                <td><a href="tel:{!! $favorito->telefone !!}">{!! $favorito->telefone !!}</a></td>
                <td>
                    @if( $favorito->nota != null && $favorito->nota != 0 )
                        @for($i =1; $i <=  $favorito->nota ; $i++)
                            <i class="fa fa-star star"></i>
                        @endfor
                        <p class="mb-0">Nota {!! $favorito->nota !!} de 5</p>
                    @else
                        <p>Nenhuma avaliação</p>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route' => ['avaliacao.update', $favorito->idfavorito ], 'method' => 'post']) !!}
                    <input type="hidden" name="profissional_id" value="{{$favorito->profissional_id}}">
                    <input type="hidden" name="tutor_id" value="{{$favorito->tutor_id}}">

                    <div class='btn-group'>
                        <div class="rating">

                            <label>
                                <input type="radio" name="avaliacao" value="1" {{ ($favorito->avaliacao == "1")?'checked'  : ""}}/>
                                <span class="icon fa fa-star"></span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="2" {{ ($favorito->avaliacao == "2")?'checked'  : ""}} />
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="3" {{ ($favorito->avaliacao == "3")?'checked'  : ""}} />
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="4" {{ ($favorito->avaliacao == "4")?'checked'  : ""}}/>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="5" {{ ($favorito->avaliacao == "5")?'checked'  : ""}}/>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                                <span class="icon fa fa-star"></span>
                            </label>
                        </div>

                        {!! Form::button('<i class="fas fa-check "></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-sm', 'onclick' => "return confirm('Deseja avaliar este profissional?')"]) !!}
                    </div>
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>



