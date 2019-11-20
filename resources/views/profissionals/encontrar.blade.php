<div class="table-responsive">
    <table class="table" id="profissionals-table">
        <thead class="bg-gradient-primary text-white">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th colspan="3">Favoritar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profissionais as $profissional)
            <tr>
                <td>{!! $profissional->nome !!} <br> <strong>{!! $profissional->profissao !!}</strong></td>
{{--                <td>{!! $profissional->profissao !!}</td>--}}
                <td>{!! $profissional->rua !!}, nº{!! $profissional->numero !!} {!! $profissional->bairro !!} - {!! $profissional->cidade !!} | {!! $profissional->estado !!}</td>
                <td><a href="tel:{!! $profissional->telefone !!}">{!! $profissional->telefone !!}</a></td>
                <td>
                    {!! Form::open(['route' => ['favoritos.store', $profissional->id, '4'], 'method' => 'post']) !!}
                    <div class='btn-group'>
                        <input type="hidden" name="profissional_id" value="{{$profissional->id}}">
                        <input type="hidden" name="tutor_id" value="4">
{{--                        <a href="{!! route('profissionalFavoritos.edit', [$profissionalFavorito->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>--}}
                        {!! Form::button('<i class="fas fa-heart "></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja adicionar aos favoritos?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
