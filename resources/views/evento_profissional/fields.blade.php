<!-- Dialivre Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('dialivre', 'Dialivre:') !!}--}}
{{--    {!! Form::date('dialivre', null, ['class' => 'form-control','id'=>'dialivre']) !!}--}}
{{--</div>--}}

{{--@section('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        $('#dialivre').datetimepicker({--}}
{{--            format: 'YYYY-MM-DD HH:mm:ss',--}}
{{--            useCurrent: false--}}
{{--        })--}}
{{--    </script>--}}
{{--@endsection--}}
{{----}}
{{--<!-- Diaocupado Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('diaocupado', 'Diaocupado:') !!}--}}
{{--    {!! Form::date('diaocupado', null, ['class' => 'form-control','id'=>'diaocupado']) !!}--}}
{{--</div>--}}

{{--@section('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        $('#diaocupado').datetimepicker({--}}
{{--            format: 'YYYY-MM-DD HH:mm:ss',--}}
{{--            useCurrent: false--}}
{{--/        })--}}
{{--    </script>--}}
{{--@endsection--}}

<!-- Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data', 'Data:') !!}
    {!! Form::date('data', null, ['class' => 'form-control','id'=>'data']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#data').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horario', 'Horário:') !!}
    {!! Form::text('horario', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo',array('Consulta' => 'Consulta', 'Banho & Tosa' => 'Banho & Tosa','Passeio' => 'Passeio','Outro' => 'Outro'), null, ['class' => 'form-control']) !!}

</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array(1 => 'Ativo', 2 => 'Inativo'),null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descrição:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<input type="hidden" name="profissional_id" value="{!! $profissional->id !!}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eventoProfissional.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
