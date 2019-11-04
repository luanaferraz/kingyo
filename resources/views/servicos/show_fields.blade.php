<!-- Descricao Field -->
<div class="form-group">
    {!! Form::label('descricao', 'Descricao:') !!}
    <p>{!! $servico->descricao !!}</p>
</div>

<!-- Custo Field -->
<div class="form-group">
    {!! Form::label('custo', 'Custo:') !!}
    <p>{!! $servico->custo !!}</p>
</div>

<!-- Profissional Id Field -->
<div class="form-group">
    {!! Form::label('profissional_id', 'Profissional Id:') !!}
    <p>{!! $servico->profissional_id !!}</p>
</div>

