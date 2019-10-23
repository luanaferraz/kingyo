<div class="table-responsive">
    <table class="table" id="eventoPets-table">
        <thead class="bg-gradient-primary text-white">
        <tr>
            <th>Data</th>
            <th>Pet</th>
            <th>Tipo</th>
            <th>Descrição</th>
            <th>Status</th>
            <th colspan="3">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($eventoPets as $eventoPet)
            <tr>
                <td>{!! $eventoPet->data !!}</td>
                <td>{!! $eventoPet->pet->nome !!}</td>
                <td>{!! $eventoPet->tipo !!}</td>
                <td>{!! $eventoPet->descricao !!}</td>
                <td>
                    <span class="badge {{ $eventoPet->status == 1 ? ' badge-success':' badge-warning' }}">{{ $eventoPet->status == 1 ? 'Ativo':'Inativo' }}</span>
                    </td>

                <td>
                    {!! Form::open(['route' => ['eventoPets.destroy', $eventoPet->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('eventoPets.edit', [$eventoPet->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
