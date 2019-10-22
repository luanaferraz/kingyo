<div class="table-responsive">
    <table class="table" id="vacinas-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Nome</th>
        <th>Dataaplicacao</th>
        <th>Dataproxima</th>
        <th>Pet Id</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vacinas as $vacina)
            <tr>
                <td>{!! $vacina->nome !!}</td>
            <td>{!! $vacina->dataAplicacao !!}</td>
            <td>{!! $vacina->dataProxima !!}</td>
            <td>{!! $vacina->pet_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['vacinas.destroy', $vacina->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('vacinas.edit', [$vacina->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
