

    <!-- Nome Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Profissao Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('profissao', 'Profissao:') !!}
        {!! Form::text('profissao', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Pais Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('pais', 'Pais:') !!}
        {!! Form::text('pais', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Estado Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('estado', 'Estado:') !!}
        {!! Form::text('estado', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Cidade Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cidade', 'Cidade:') !!}
        {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Bairro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Rua Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('rua', 'Rua:') !!}
        {!! Form::text('rua', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Numero Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('numero', 'Número:') !!}
        {!! Form::text('numero', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Visualizacao Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('visualizacao', 'Visualizacao:') !!}
        {!! Form::text('visualizacao', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Telefone Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Usuario Id Field -->
    {{--<div class="form-group col-sm-6">--}}
    {{--    {!! Form::label('usuario_id', 'Usuario Id:') !!}--}}
    {{--    {!! Form::number('usuario_id', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}

    <input type="hidden" id="usuario_id" name="usuario_id" value="null">

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email_confirm', 'Confirmar E-mail:') !!}
        {!! Form::email('email_confirm', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Password Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('password', 'Senha:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <!-- Password Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('password_confirmation', 'Confirmar senha:') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary text-center my-4']) !!}
    <a href="{!! route('profissionals.index') !!}" class="btn btn-secondary">Cancelar</a>
</div>
