
<div class="table-responsive">
    <table class="table" id="vacinas-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Vacina</th>
        <th>Data da Aplicação</th>
        <th>Próxima Vacina</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vacinas as $vacina)

            <tr>
                <td>{!! $vacina->nome !!}</td>
            <td>{!! $vacina->dataAplicacao !!}</td>
            <td>{!! $vacina->dataProxima !!}</td>

                <td>
                    {!! Form::open(['route' => ['vacinas.destroy',$pet->id, $vacina->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('vacinas.edit',[$pet->id, $vacina->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
