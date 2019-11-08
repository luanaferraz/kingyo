<div class="table-responsive">
    <table class="table" id="profissionals-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Nome</th>
        <th>Profissao</th>
        <th>Pais</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Bairro</th>
        <th>Rua</th>
        <th>Numero</th>
        <th>Visualizacao</th>
        <th>Telefone</th>
        <th>Usuario Id</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profissionals as $profissional)
            <tr>
                <td>{!! $profissional->nome !!}</td>
            <td>{!! $profissional->profissao !!}</td>
            <td>{!! $profissional->pais !!}</td>
            <td>{!! $profissional->estado !!}</td>
            <td>{!! $profissional->cidade !!}</td>
            <td>{!! $profissional->bairro !!}</td>
            <td>{!! $profissional->rua !!}</td>
            <td>{!! $profissional->numero !!}</td>
            <td>{!! $profissional->visualizacao !!}</td>
            <td>{!! $profissional->telefone !!}</td>
            <td>{!! $profissional->usuario_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['profissionals.destroy', $profissional->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('profissionals.edit', [$profissional->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
