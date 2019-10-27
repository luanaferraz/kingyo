<!-- Pet Id Field -->
<div class="form-group">
    {!! Form::label('pet_id', 'Pet Id:') !!}
    <p>{!! $petdoc->pet_id !!}</p>
</div>

<!-- File Field -->
<div class="form-group">
    @foreach( $categories as $category )
        {{ $category->name }}

        <img src="{{ url("categories/{$category->file}") }}" alt="{{ $category->name }}">
    @endforeach
</div>

