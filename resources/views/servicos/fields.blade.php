<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descrição:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Custo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custo', 'Custo(R$):') !!}
    {!! Form::text('custo', null, ['class' => 'form-control money']) !!}
</div>

<input type="hidden" name="profissional_id" value="{!! $profissional->id !!}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servicos.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
