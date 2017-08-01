
@extends('layouts.index')
@section('title','Parentes')
@section('heading','Parentes')
@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>Apelido</th>

        <th>Grau de Parentesco</th>

        <th>Contacto</th>

        <th>Morada</th>

        <th><center>Accao</center></th>
    </thead>

    <tbody>
      @foreach($parentes as $parente)
    <tr>
        <th> {{ $parente->id}} </th>

        <td> {{ $parente->nome }} </td>

        <td> {{ $parente->apelido }} </td>

        <td> {{ $parente->grau_parentesco }} </td>

        <td> {{ $parente->contacto }} </td>

        <td> {{ $parente->morada }} </td>

        <td class="row"> 

            
            {!! Html::linkRoute('parentes.show','',$parente->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('parentes.edit','',$parente->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('parentes.destroy','',$parente->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}

        </td>

    </tr>

      @endforeach

    </tbody>

</table>
@stop
