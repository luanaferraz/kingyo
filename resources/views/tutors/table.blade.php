<div class="table-responsive">
    <table class="table" id="tutors-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Usuario Id</th>
        <th>Pais</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Bairro</th>
        <th>Rua</th>
        <th>Numero</th>
        <th>Telefone</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tutors as $tutor)
            <tr>
                <td>{!! $tutor->usuario_id !!}</td>
            <td>{!! $tutor->pais !!}</td>
            <td>{!! $tutor->estado !!}</td>
            <td>{!! $tutor->cidade !!}</td>
            <td>{!! $tutor->bairro !!}</td>
            <td>{!! $tutor->rua !!}</td>
            <td>{!! $tutor->numero !!}</td>
            <td>{!! $tutor->telefone !!}</td>
                <td>
                    {!! Form::open(['route' => ['tutors.destroy', $tutor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('tutors.edit', [$tutor->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
