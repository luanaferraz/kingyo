<div class="table-responsive">
    <table class="table" id="medicacaos-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Nome</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Pet Id</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicacaos as $medicacao)
            <tr>
                <td>{!! $medicacao->nome !!}</td>
            <td>{!! $medicacao->data !!}</td>
            <td>{!! $medicacao->hora !!}</td>
            <td>{!! $medicacao->pet_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['medicacaos.destroy', $medicacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('medicacaos.edit', [$medicacao->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
