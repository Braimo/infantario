@extends('layouts.modal')
@section('head','Novo Momento')
@section('form')


<form action="/momentos" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required />
      </div>
   </div>

   <div class="form-group">
      <div class="col-md-10">
      <textarea class="form-control" name="descricao" id="descricao" placeholder="Decrever o momento"  required/>
      </textarea>
      </div>
   </div>

   
   @section('lbutton','Confirmar')
   @endsection
</form>
