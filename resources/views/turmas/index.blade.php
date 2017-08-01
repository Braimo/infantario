
@extends('layouts.index')
@section('title','turmas')
@section('heading','turmas')
@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>Ano</th>

        <th>Nivel</th>

        <th>Numero de Alunos</th>

        <th><center>Accao</center></th>
    </thead>

    <tbody>
      @foreach($turmas as $turma)
    <tr>
        <th> {{ $turma->id}} </th>

        <td> {{ $turma->nome }} </td>

        <td> {{ $turma->ano }} </td>

        <td> {{ $turma->nivel }} </td>

        <td> {{ $turma->qtd_criancas }} </td>

        <td class="row"> 

            
            {!! Html::linkRoute('turmas.show','',$turma->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('turmas.edit','',$turma->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('turmas.destroy','',$turma->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}
        </td>
    </tr>
      @endforeach
    </tbody>

</table>
@stop
