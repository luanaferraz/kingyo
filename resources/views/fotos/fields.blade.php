<!-- Pet Id Field -->

<div class="form-group col-sm-6">
    <label for="foto" class="control-label">Arquivo:</label>

    <input type="file" name="file" class="form-control" id="foto" onchange="$('#nome_arquivo').val(this.value)" style="display: none">
    <input type="text" name="nome_arquivo" id="nome_arquivo" class="form-control"
           value="<?= isset($foto['file']) ? $foto['file'] : "" ?>" disabled>
    <input type="button" class="btn btn-secondary" value="Selecione um arquivo" onclick="$('#foto').click();">
    <span class="help-block">Tamanho da imagem 1280x720 pixels.</span>
</div>

<input type="hidden" name="pet_id" value="{!! $pet->id !!}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fotos.index',$pet->id) !!}" class="btn btn-secondary">Cancelar</a>
</div>
