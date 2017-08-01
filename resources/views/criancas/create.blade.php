@extends('layouts.modal')
<link rel="stylesheet" href="stylesheet-pure-css.css">
@section('head','Registar Crianca')
@section('form')
<form action="/criancas" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control has-success" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="apelido" id="apelido" placeholder="Apelido" required />
      </div>
   </div>


    <div class="form-group">
      <div class="col-md-10">
         <label for="data"> Data de Nascimento</label>
         <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" />
      </div>
   </div>


 <div class="example form-group">
      <div>
        <input id="genero" type="radio" name="genero" value="Masculino" checked="checked">
        <label for="masculino"><span><span></span></span>Masculino</label>
      </div>

      <div>
        <input id="genero" type="radio" name="genero" value="Feminino">
        <label for="radio2"><span><span></span></span>Feminino</label>
      </div>
      
  </div>

    

   <div class="form-group">
      <div class="col-md-10">
      <input type="text" name="nivel" class="form-control" id="nivel" placeholder="Nivel" />
      </div>
   </div>



   <div class="container  col-md-3 well">     

            <div class="box">
               <input type="file" name="foto" id="foto"  data-multiple-caption="{count} files selected" multiple />
             </div>
            <!-- Related demos -->
    </div>




   
   @section('lbutton','Confirmar')
   @endsection
</form>


