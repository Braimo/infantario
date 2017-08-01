@extends('layouts.modal')
@section('form')
@section('head','Nova Avaliacao')

<form action="/avaliacaos" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo de Avaliacao"  required/>
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="trimestre" id="trimestre" placeholder="Trimestre" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" name="disciplina" class="form-control" id="disciplina" placeholder="Disciplina"/>
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10 ">
         <label for="data">Data da Realizacao</label>
         <input type="date"  id="data" name="data" class="form-control" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10 col-offset-1">
         <textarea type="text" id="descricao" name="descricao" class="form-control" placeholder="Decricao da Avaliacao" required>
         </textarea>
      </div>
   </div>

   @section('lbutton','Confirmar')
   @endsection
</form>
