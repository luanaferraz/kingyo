<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Custo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custo', 'Custo:') !!}
    {!! Form::number('custo', null, ['class' => 'form-control']) !!}
</div>

<!-- Profissional Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profissional_id', 'Profissional Id:') !!}
    {!! Form::number('profissional_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servicos.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
