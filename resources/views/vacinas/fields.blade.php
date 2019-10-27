<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Vacina:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Dataaplicacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataAplicacao', 'Data da Aplicação:') !!}
    {!! Form::date('dataAplicacao', null, ['class' => 'form-control','id'=>'dataAplicacao']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#Data Aplicação').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Dataproxima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataProxima', 'Próxima Vacina:') !!}
    {!! Form::date('dataProxima', null, ['class' => 'form-control','id'=>'dataProxima']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dataProxima').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Pet Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('pet_id', 'Pet :') !!}--}}
{{--    {!! Form::number('pet_id', null, ['class' => 'form-control']) !!}--}}

{{--</div>--}}

<input type="hidden" name="pet_id" value="{!! $pet->id !!}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vacinas.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
