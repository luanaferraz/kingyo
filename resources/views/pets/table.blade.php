<div class="table-responsive">
    <table class="table" id="pets-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Espécie</th>
        <th>Porte</th>
        <th>Raça</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Status</th>
        <th>Sexo</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pets as $pet)
            <tr>
                <td>{!! $pet->especie !!}</td>
            <td>{!! $pet->porte !!}</td>
            <td>{!! $pet->raca !!}</td>
            <td>{!! $pet->nome !!}</td>
            <td>{!! $pet->idade !!}</td>
                <td>
                    <span class="badge {{ $pet->status == 1 ? ' badge-success':' badge-warning' }}">{{ $pet->status == 1 ? 'Ativo':'Inativo' }}</span>
                </td>
                <td>{!! $pet->sexo !!}</td>

                <td>
                    {!! Form::open(['route' => ['pets.destroy', $pet->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('pets.edit', [$pet->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
