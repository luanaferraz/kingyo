<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $medicacao->nome !!}</p>
</div>

<!-- Data Field -->
<div class="form-group">
    {!! Form::label('data', 'Data:') !!}
    <p>{!! $medicacao->data !!}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    <p>{!! $medicacao->hora !!}</p>
</div>

<!-- Pet Id Field -->
<div class="form-group">
    {!! Form::label('pet_id', 'Pet Id:') !!}
    <p>{!! $medicacao->pet_id !!}</p>
</div>

