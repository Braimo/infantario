

  
@extends('fotos.show')

@section('perfil')
 <div class="col-md-4 col-md-offset-4" >
	     <a href="#" class="thumbnail " >
	      <img src="{{ asset('img/' . $crianca->foto) }}" alt="Teste" >
	     </a>

	     	      <center><strong> {{ $crianca->nome . ' ' . $crianca->apelido }} </strong> </center>
</div>

@endsection


@section('sobre')
<div class="row container">
		
@include('criancas.sobre')


</div>

@endsection

@section('momentos')
@include('criancas.momentos')
@endsection

@section('actividades')
@include('criancas.actividades')
@endsection

@section('caderneta')
@include('criancas.caderneta')
@endsection

@section('registo_medico')
<p> Registo Medico</p>
@endsection

@section('historico')
<p> Historico</p>
@endsection




