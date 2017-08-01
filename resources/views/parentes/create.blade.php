@extends('layouts.modal')

@section('head','Dados do Encarregado')
@section('form')

<form action="/parentes" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome"  />
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

    <div class="example form-group">
      <div>
        <input id="genero" type="radio" name="genero" value="M" checked="checked">
        <label for="masculino"><span><span></span></span>Masculino</label>
      </div>

      <div>
        <input id="genero" type="radio" name="genero" value="F">
        <label for="radio2"><span><span></span></span>Feminino</label>
      </div>
      
  </div>

    <div class="form-group">
         <div class="col-md-10 ">
            <input type="text"  id="grau_parentesco" name="grau_parentesco" class="form-control"  placeholder="Grau de parentesco" required />
         </div>
   </div>


   <div class="form-group">
      <div class="col-md-10 col-offset-1">
         <input type="text" id="contacto" name="contacto" class="form-control" placeholder="Contacto"  required/>
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10 ">
         <input type="text"  id="morada" name="morada" class="form-control" placeholder="Morada" required />
      </div>
   </div>

   
  
   @section('lbutton','Confirmar')
   @endsection
</form>
