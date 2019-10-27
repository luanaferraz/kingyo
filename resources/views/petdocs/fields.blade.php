
<!-- Pet Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pet_id', 'Pet Id:') !!}
    {!! Form::number('pet_id', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->


    <input type="file" name="image">



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('petdocs.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
