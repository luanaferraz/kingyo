{{--<div class="table-responsive">--}}
{{--    <table class="table" id="eventoProfissional-table">--}}
{{--        <thead class="bg-gradient-primary text-white">--}}
{{--            <tr>--}}
{{--                <th>Dialivre</th>--}}
{{--        <th>Diaocupado</th>--}}
{{--        <th>Tipo</th>--}}
{{--        <th>Descricao</th>--}}
{{--        <th>Data</th>--}}
{{--        <th>Status</th>--}}
{{--        <th>Profissional Id</th>--}}
{{--        <th>Horario</th>--}}
{{--                <th colspan="3">Ações</th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($eventoProfissional as $eventoProfissional)--}}
{{--            <tr>--}}
{{--                <td>{!! $eventoProfissional->dialivre !!}</td>--}}
{{--            <td>{!! $eventoProfissional->diaocupado !!}</td>--}}
{{--            <td>{!! $eventoProfissional->tipo !!}</td>--}}
{{--            <td>{!! $eventoProfissional->descricao !!}</td>--}}
{{--            <td>{!! $eventoProfissional->data !!}</td>--}}
{{--            <td>{!! $eventoProfissional->status !!}</td>--}}
{{--            <td>{!! $eventoProfissional->profissional_id !!}</td>--}}
{{--            <td>{!! $eventoProfissional->horario !!}</td>--}}
{{--                <td>--}}
{{--                    {!! Form::open(['route' => ['eventoProfissional.destroy', $eventoProfissional->id], 'method' => 'delete']) !!}--}}
{{--                    <div class='btn-group'>--}}
{{--                        <a href="{!! route('eventoProfissional.edit', [$eventoProfissional->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>--}}
{{--                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}--}}
{{--                    </div>--}}
{{--                    {!! Form::close() !!}--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
{{----}}

<div id='calendar'></div>
