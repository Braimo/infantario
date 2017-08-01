
@extends('layouts.index')
@section('title','Eventos')
@section('heading','Eventos')
@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>Local</th>

        <th>Data de Publicacao</th>

        <th>Data de Ocorrencia</th>


        <th><center>Accao</center></th>
    </thead>

    <tbody>
      @foreach($eventos as $evento)
    <tr>
        <th> {{ $evento->id}} </th>

        <td> {{ $evento->nome }} </td>

        <td> {{ $evento->local }} </td>

        <td> {{ $evento->data_publicacao }} </td>

        <td> {{ $evento->data_ocorrencia }} </td>

        <td class="row"> 


            {!! Html::linkRoute('eventos.show','',$evento->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('eventos.edit','',$evento->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('eventos.destroy','',$evento->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}
        </td>
    </tr>
      @endforeach
    </tbody>

</table>
@stop
