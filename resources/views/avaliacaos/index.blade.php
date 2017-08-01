
@extends('layouts.index')
@section('title','Avaliacoes')
@section('heading','Avaliacoes')
@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>Tipo</th>

        <th>Trimestre</th>

        <th>Disciplina</th>

        <th>Data</th>

        <th>Descricao</th>

        <th><center>Accao</center></th>
    </thead>

    <tbody>
      @foreach($avaliacaos as $avaliacao)
    <tr>
        <th> {{ $avaliacao->id}} </th>
        
        <td> {{ $avaliacao->nome }} </td>

        <td> {{ $avaliacao->tipo }} </td>

        <td> {{ $avaliacao->trimestre }} </td>

        <td> {{ $avaliacao->data }} </td>

        <td> {{ $avaliacao->descricao }} </td>

        <td class="row"> 

            
            {!! Html::linkRoute('avaliacaos.show','',$avaliacao->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('avaliacaos.edit','',$avaliacao->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('avaliacaos.destroy','',$avaliacao->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}
        </td>
    </tr>
      @endforeach
    </tbody>

</table>
@endsection

