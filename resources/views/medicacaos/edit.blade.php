@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Medicamentos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($medicacao, ['route' => ['medicacaos.update', $pet->id, $medicacao->id], 'method' => 'patch', 'class'=> 'col-lg-12 form-row']) !!}

                        @include('medicacaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
