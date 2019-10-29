<div class="table-responsive">
    <table class="table" id="fotos-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                        <th>Foto</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fotos as $foto)
            <tr>
                <td><img src="/uploads/fotos/{!! $foto->file !!}" class="img-fluid" width="300px"></td>
                <td>
                    {!! Form::open(['route' => ['fotos.destroy', $pet->id, $foto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
{{--                        <a href="{!! route('fotos.edit', [$foto->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>--}}
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
