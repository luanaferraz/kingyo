<!-- Especie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especie', 'Espécie:') !!}
    {!! Form::select('especie',array('Cão' => 'Cão', 'Gato' => 'Gato','Pássaro' => 'Pássaro','Peixe' => 'Peixe', 'Réptil' => 'Réptil', 'Roedor' => 'Roedor', 'Outro' => 'Outro'), null, ['class' => 'form-control']) !!}
</div>

<!-- Porte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porte', 'Porte:') !!}
    {!! Form::select('porte',array('Pequeno' => 'Pequeno', 'Médio' => 'Médio','Grande' => 'Grande'), null, ['class' => 'form-control']) !!}
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
    {!! Form::select('sexo',array('Macho' => 'Macho', 'Fêmea' => 'Fêmea','Não definido' => 'Não definido'), null, ['class' => 'form-control']) !!}

</div>

<!-- Tutor Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('tutor_id', 'Tutor Id:') !!}--}}
{{--    {!! Form::number('tutor_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<input type="hidden" name="tutor_id" value="{{$tutor->id  }}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pets.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
