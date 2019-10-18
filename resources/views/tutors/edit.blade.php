@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tutor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tutor, ['route' => ['tutors.update', $tutor->id], 'method' => 'patch', 'class'=> 'col-lg-12 form-row']) !!}

                        @include('tutors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection