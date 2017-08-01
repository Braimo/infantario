@extends('layouts.modal')
@section('head','Image upload')
@section('form')


<form action="/fotos" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}

   <div class="form-group">
      <div class="col-md-10">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" />
      </div>
   </div>




   <div class="container  col-md-3 well">     

            <div class="box">
               <input type="file" name="picture" id="picture"  data-multiple-caption="{count} files selected" multiple />
             </div>
            <!-- Related demos -->
    </div>




   
   @section('lbutton','Confirmar')
   @endsection
</form>
