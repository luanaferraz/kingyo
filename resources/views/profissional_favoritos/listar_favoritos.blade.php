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
                    {!! Form::open(['route' => ['profissionals.destroy', $favorito->profissional->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
{{--                        <a href="{!! route('profissionalFavoritos.create') !!}" class='btn btn-secondary btn-xs alert-danger'><i class="fas fa-heart "></i></a>--}}
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>
                    {!! Form::open(['route' => ['avaliacao.update', $favorito->id,  '4'], 'method' => 'post']) !!}
                    <input type="hidden" name="id" value="{{$favorito->id}}">

                    <div class='btn-group'>
                        <div class="rating">

                            <label>
                                <input type="radio" name="avaliacao" value="1" />
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="2" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="3" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="4" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="avaliacao" value="5" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                        </div>

                        {!! Form::button('<i class="fas fa-paw "></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja avaliar este profissional?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>



