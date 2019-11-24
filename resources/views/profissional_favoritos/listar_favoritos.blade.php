<div class="table-responsive">
    <table class="table" id="profissionals-table">
        <thead class="bg-gradient-primary text-white">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th colspan="3">Avaliar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($favoritos as $favorito)
            <tr>
                <td>{!! $favorito->profissional->nome !!} <br> <strong>{!! $favorito->profissional->profissao !!}</strong></td>
{{--                <td>{!! $profissional->profissao !!}</td>--}}
                <td>{!! $favorito->profissional->rua !!}, nº{!! $favorito->profissional->numero !!} {!! $favorito->profissional->bairro !!} - {!! $favorito->profissional->cidade !!} | {!! $favorito->profissional->estado !!}</td>
                <td><a href="tel:{!! $favorito->profissional->telefone !!}">{!! $favorito->profissional->telefone !!}</a></td>

                <td>


                    {!! Form::open(['route' => ['avaliacao.update', $favorito->id], 'method' => 'post']) !!}
                    <input type="hidden" name="profissional_id" value="{{$favorito->profissional->id}}">
                    <input type="hidden" name="tutor_id" value="{{$favorito->tutor->id}}">

                    <div class='btn-group'>
                        <div class="rating">
{{--                            <input type="radio"  id="option1" name="status" value="0"   >OFF</label>--}}

{{--                            <input type="radio" name="avaliacao" checked="checked" value="{{$favorito->avaliacao}} >--}}
{{--                            <p><input type="radio" name="tipo" value="CP" {{ $conta->tipo == 'CP' ? 'checked' : '' }}> Conta Poupança</p>--}}


                            <label>
                                <input type="radio" name="avaliacao" value="1" {{ ($favorito->avaliacao == "1")?'checked'  : ""}}/>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="2" {{ ($favorito->avaliacao == "2")?'checked'  : ""}} />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="3" {{ ($favorito->avaliacao == "3")?'checked'  : ""}} />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="4" {{ ($favorito->avaliacao == "4")?'checked'  : ""}}/>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="5" {{ ($favorito->avaliacao == "5")?'checked'  : ""}}/>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
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



