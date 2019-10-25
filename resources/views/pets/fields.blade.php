<!-- Especie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especie', 'Espécie:') !!}
    {!! Form::text('especie', null, ['class' => 'form-control']) !!}
</div>

<!-- Porte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porte', 'Porte:') !!}
    {!! Form::text('porte', null, ['class' => 'form-control']) !!}
</div>

<!-- Raca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raca', 'Raça:') !!}
    {!! Form::text('raca', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Idade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idade', 'Idade:') !!}
    {!! Form::text('idade', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->

<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array(1 => 'Ativo', 2 => 'Inativo'),null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tutor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tutor_id', 'Tutor Id:') !!}
    {!! Form::number('tutor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pets.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
