
@extends('layouts.index')
@section('title','criancas')
@section('heading','criancas')
@section('tabela')

<table class=" table table-hover table-responsive">

    <thead style="background-color: #F0F8FF">
        <th>#</th>

        <th>Nome</th>

        <th>SobreNome</th>

        <th>Apelido</th>

        <th>Data de Nascimento</th>

        <th>Genero</th>

   
        <th><center>Accao</center></th>
    </thead>

    <tbody>
      @foreach($criancas as $crianca)
    <tr>
        <th> {{ $crianca->id}} </th>

        <td> {{ $crianca->nome }} </td>

        <td> {{ $crianca->sobrenome }} </td>

        <td> {{ $crianca->apelido }} </td>

        <td> {{ $crianca->data_nascimento}} </td>

        <td> {{ $crianca->genero }} </td>

     
        <td class="row"> 

           
            {!! Html::linkRoute('criancas.show','',$crianca->id, array('class' => 'col-md-4 glyphicon glyphicon-eye-open')) !!}

            {!! Html::linkRoute('criancas.edit','',$crianca->id,array('class' => 'col-md-4 glyphicon glyphicon-edit')) !!}

            {!! Html::linkRoute('criancas.destroy','',$crianca->id,array('class' => 'col-md-4 glyphicon glyphicon-trash')) !!}        </td>
    </tr>
      @endforeach
    </tbody>

</table>

 <div class="text-center" style="backgground-color:green; color:red;">  {!! $criancas->links() !!} </div>

   
@stop
