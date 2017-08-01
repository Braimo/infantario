
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
      @foreach($midias as $midia)
    <tr>
        <th> {{ $midia->id}} </th>

        <td> {{ $midia->nome }} </td>

        <td> {{ $midia->tipo }} </td>

    

        <td class="row"> 

            
            {!! Html::linkRoute('educadoras.show','',$midia->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('educadoras.edit','',$midia->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('educadoras.destroy','',$midia->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}
        </td>
    </tr>
      @endforeach
    </tbody>

</table>



   
@stop

