
@extends('layouts.index')
@section('title','Educadora')
@section('heading','Educadoras')
@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>Apelido</th>

        <th>Morada</th>

        <th>Contacto</th>

         <th>Nivel Academico</th>

        <th>Formacao</th>

        <th><center>Accao</center></th>
    </thead>

    <tbody>
      @foreach($educadoras as $educadora)
    <tr>
        <th> {{ $educadora->id}} </th>

        <td> {{ $educadora->nome }} </td>

        <td> {{ $educadora->apelido }} </td>

        <td> {{ $educadora->morada }} </td>

        <td> {{ $educadora->contacto }} </td>

        <td> {{ $educadora->nivel_academico }} </td>

        <td> {{ $educadora->formacao }} </td>

        <td class="row"> 

            
            {!! Html::linkRoute('educadoras.show','',$educadora->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('educadoras.edit','',$educadora->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('educadoras.destroy','',$educadora->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}
        </td>
    </tr>
      @endforeach
    </tbody>

</table>

 <div class="text-center" style="backgground-color:green; color:red;">  {!! $educadoras->links() !!} </div>

   
@stop

