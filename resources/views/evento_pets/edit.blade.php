@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Evento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($eventoPet, ['route' => ['eventoPets.update', $eventoPet->id], 'method' => 'patch', 'class'=> 'col-lg-12 form-row']) !!}

                        @include('evento_pets.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection