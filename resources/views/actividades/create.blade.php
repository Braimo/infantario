@include('partials._head')
@extends('layouts.modal')
@section('title','Registar Actividade')
@section('head','Nova Actividade')
@section('form')

<form action="/actividades" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <label for="data"> Data da Actividade</label>
         <input type="date" class="form-control" name="data" id="data" required/>
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <textarea class="form-control" name="descricao" id="descricao" 
         placeholder="Descricao da Actividade" required>
         </textarea>   
      </div>
   </div>

   
   @section('lbutton','Confirmar')
   @endsection
</form>
