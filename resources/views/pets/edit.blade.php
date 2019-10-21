@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pet
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pet, ['route' => ['pets.update', $pet->id], 'method' => 'patch', 'class'=> 'col-lg-12 form-row']) !!}

                        @include('pets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection