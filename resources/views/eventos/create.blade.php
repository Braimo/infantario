
@extends('layouts.modal')

@section('head','Novo Evento')

@section('form')

<form action="/eventos" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="local" id="local" placeholder="Local do Evento" required/>
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="date" class="form-control" name="data_publicacao" id="data_publicacao" placeholder="Apelido" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="date" name="data_ocorrencia" class="form-control" id="data_ocorrencia"/>
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10 ">
      <textarea name="descricao" class="form-control" id="descricao" placeholder="Descricao do Evento" required />
      
      </textarea>
      </div>
   </div>

   @section('lbutton','Confirmar')
   @endsection
</form>
