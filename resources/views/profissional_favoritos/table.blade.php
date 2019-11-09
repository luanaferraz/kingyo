y<div class="table-responsive">
    <table class="table" id="profissionalFavoritos-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Pet Id</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profissionalFavoritos as $profissionalFavorito)
            <tr>
                <td>{!! $profissionalFavorito->pet_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['profissionalFavoritos.destroy', $profissionalFavorito->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('profissionalFavoritos.edit', [$profissionalFavorito->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
