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
            <td>{!! $medicacao->data->format('d/m/y') !!}</td>
                <td>{!! $medicacao->hora !!}</td>
            <td>{!! $medicacao->pet_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['medicacaos.destroy', $pet->id, $medicacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('medicacaos.edit', [$pet->id, $medicacao->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        <a href="{!! route('medicacaos.ativar', [$pet->id,$medicacao->id]) !!}" class='btn btn-primary btn-xs'><i class="fas fa-check"></i></a>
                        <a href="{!! route('medicacaos.inativar', [$pet->id,$medicacao->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-ban"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
