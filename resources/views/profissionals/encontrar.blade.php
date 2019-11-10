<div class="table-responsive">
    <table class="table" id="profissionals-table">
        <thead class="bg-gradient-primary text-white">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th colspan="3">Ações</th>
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
                    {!! Form::open(['route' => ['profissionals.destroy', $profissional->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('profissionals.index') !!}" class='btn btn-secondary btn-xs'><i class="fas fa-heart"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
