<div class="table-responsive">
    <table class="table" id="servicos-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Tipo de serviço</th>
        <th>Custo</th>
        <th>Profissional Id</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicos as $servico)
            <tr>
                <td>{!! $servico->descricao !!}</td>
            <td>{!! $servico->custo !!}</td>
            <td>{!! $servico->profissional_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['servicos.destroy', $servico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('servicos.edit', [$servico->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
