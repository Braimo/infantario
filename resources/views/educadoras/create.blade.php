@include('partials._head')
@extends('layouts.modal')
@section('title','Registar Educadora')
@section('head','Nova Educadora')
@section('form')

<form action="/educadoras" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}
   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome"  required/>
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="apelido" id="apelido" placeholder="Apelido"  required />
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-10">
         <input type="date" name="data_nascimento" class="form-control" id="data_nascimento"/>
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-10 ">
         <input type="text"  id="morada" name="morada" class="form-control" id="morada" placeholder="Morada" required />
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-10 col-offset-1">
         <input type="text" id="contacto" name="contacto" class="form-control" id="contacto" placeholder="Contacto"  required/>
      </div>
   </div>
   <div class="form-group col-md-10 col-offset-1">
      <label  fo> Selecione o Nivel Academico</label>
      <select name="nivel_academico" class="form-control" id="nivel_academico">
         <option value="medio">Nivel Medio</option>
         <option value="tecnico">Tecnico Medio</option>
         <option value="licenciatura">Licenciatura</option>
         <option value="mestrado">Mestrado</option>
      </select>
   </div>
   <div class="form-group">
      <div class="col-md-10 col-offset-1">
         <input type="text" id="formacao" name="formacao" class="form-control" id="contacto" placeholder="Formacao"  required />
      </div>
   </div>
   @section('lbutton','Confirmar')
   @endsection
</form>
