<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $vacina->nome !!}</p>
</div>

<!-- Dataaplicacao Field -->
<div class="form-group">
    {!! Form::label('dataAplicacao', 'Dataaplicacao:') !!}
    <p>{!! $vacina->dataAplicacao !!}</p>
</div>

<!-- Dataproxima Field -->
<div class="form-group">
    {!! Form::label('dataProxima', 'Dataproxima:') !!}
    <p>{!! $vacina->dataProxima !!}</p>
</div>

<!-- Pet Id Field -->
<div class="form-group">
    {!! Form::label('pet_id', 'Pet Id:') !!}
    <p>{!! $vacina->pet_id !!}</p>
</div>

