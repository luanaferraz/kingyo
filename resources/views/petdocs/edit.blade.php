@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Documentos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($petdoc, ['route' => ['petdocs.update', $pet->id, $petdoc->id], 'method' => 'patch', 'class'=> 'col-lg-12 form-row']) !!}

                        @include('petdocs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
