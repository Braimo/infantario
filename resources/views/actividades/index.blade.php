
@extends('layouts.index')
@section('title','Actividades')
@section('heading','Actividades')
@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>Data</th>

        <th>Tipo</th>

        <th>Descricao</th>
        <th><center>Accao</center></th>
    </thead>

    <tbody>
      @foreach($actividades as $actividade)
    <tr>
        <th> {{ $actividade->id}} </th>
        
        <td> {{ $actividade->nome }} </td>

        <td> {{ $actividade->created_at }} </td>

        <td> {{ $actividade->tipo }} </td>

        <td> {{ $actividade->descricao }} </td>

        <td class="row"> 

            {!! Html::linkRoute('actividades.show','',$actividade->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('actividades.edit','',$actividade->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('actividades.destroy','',$actividade->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}

        </td>
    </tr>
      @endforeach
    </tbody>

</table>
@stop
