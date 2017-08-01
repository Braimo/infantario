


@extends('layouts.index')

@section('title','Momentos')

@section('heading','Momentos')




@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>Data</th>

        <th>Descricao</th> 

        <th><center>Accao</center></th>

    </thead>

    <tbody>
      @foreach($momentos as $momento)
    <tr>
        <th> {{ $momento->id}} </th>

        <td> {{ $momento->nome }} </td>

        <td> {{ $momento->midia }} </td>

        <td> sss </td>

        <td class="row"> 

             {!! Html::linkRoute('momentos.show','',array($momento->id),array('class' =>'col-md-4 glyphicon glyphicon-eye-open')) !!}

             {!! Html::linkRoute('momentos.edit','',array($momento->id),array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

             {!! Html::linkRoute('momentos.destroy','',array($momento->id),array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}

        </td>

    </tr>

      @endforeach

    </tbody>

</table>

@stop

 <!-- Trigger the modal with a button -->



