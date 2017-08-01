@extends('layouts.principal')

@section('title','Turma')
@section('content')


<form  action="{{ url('/momentos')}}" class="form-horizontal" role="form" method="post">

	{{ csrf_field() }}

 @include('partials._imagem')




	<center>


	 <div class="row">

	 	<button data-toggle="modal" data-target="#myModal" class=" btn btn-md btn-success"> +Momentos</button>

	 	<button  class=" btn btn-md btn-primary">Terminar a aula</button>
	 </div>

   
   </center>


  </form>

  <div class="col-md-8 col-md-offset-4" style="padding-left: 0px;">
                
  <ul class="pager">
    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>
</div>


@endsection

<script type="text/javascript">

function presentes(crianca){
  var selecteds [] = crianca.id;
  alert(selecteds);

	document.getElementById("presentes_ids").value = selecteds;
  //alert(crianca.id);
}
</script>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Registar Momento</h4>
      </div>
      <div class="modal-body">
<form action="{{ url('/teste') }}" class="form-horizontal" role="form" method="post">
   {{ csrf_field() }}

   <input type="hidden" name="presentes_ids[]" id="presentes_ids"></input>

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


   <div class="form-group">     

            <div class="box">
               <input type="file" name="foto" id="foto"  data-multiple-caption="{count} files selected" multiple />
             </div>
            <!-- Related demos -->
    </div>

 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

</form>      </div>
         </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



