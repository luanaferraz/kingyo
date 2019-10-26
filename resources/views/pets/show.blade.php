@extends('layouts.app')

@section('content')
    <div class="content-fluid">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" >
                    @include('pets.show_fields')
{{--                    <a href="{!! route('pets.index') !!}" class="btn btn-default">Back</a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
