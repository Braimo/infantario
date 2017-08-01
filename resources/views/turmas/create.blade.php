@extends('layouts.modal')

@section('head','Nova Turma')
@section('form')

<form action="/turmas" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="year" class="form-control" name="ano" id="ano" placeholder="Ano"  />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nivel" id="nivel" placeholder="Nivel"  required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" name="nr_criancas" class="form-control" id="nr_criancas" placeholder="Numero de criancas"/>
      </div>
   </div>


    <div class="form-group">
      <div class="col-md-10">
       <textarea name="descricao" class="form-control" id="descricao" placeholder="Descricao da turma"/>
       </textarea>
      </div>
   </div>
   
  
   @section('lbutton','Confirmar')
   @endsection
</form>
