@include('partials._head')
<title>Avaliacao</title>  
@include('partials._nav')

@include('partials._messages')

<div class="row container">
<div class="col-md-8">

<table class="table table-hover ">
    <thead style="background-color: #F0F8FF">
     
        <th> Nome </th>

        <th> Tipo </th>

        <th> Trimestre </th>

        <th> Disciplina </th>

        <th> Data de Realizacao </th>

        <th> Descricao</th>

    </thead>
  
  <tbody>
       
      <tr>

        <td> {{ $avaliacao->nome }} </td>

        <td> {{ $avaliacao->tipo }} </td>

        <td> {{ $avaliacao->trimestre }} </td>

        <td> {{ $avaliacao->educadoras->nome }} </td>

        <td> {{ date('M j, Y h:ia',strtotime($avaliacao->data)) }} </td>

        <td>
            {{ substr(( $avaliacao->educadoras->contacto ),0,15 ) }} 
        </td>

   
     </tr>
      
    </tbody>

  </table>

  </div>

  <div class="col-md-4 well" >
  


	 <ul class="list-group">

			<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Guardado:</strong><span><span></span></span>   

			  {{ date('M j, Y h:ia',strtotime($avaliacao->created_at)) }}

			</li>

			<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Editado:</strong>
			  
			  {{ date('M j, Y h:ia',strtotime($avaliacao->updated_at)) }}

			</li>

	  </ul>

	   <hr style="height: 2px; background-color: grey;">
	        
	<div class="row">
			  <div class="col-md-6">

				  {!! Html::linkRoute('avaliacaos.edit','Editar',array($avaliacao->id),array('class' =>'btn btn-primary btn-block')) !!}

			  </div>

			  <div class="col-md-6">

			  {!! Html::linkRoute('avaliacaos.destroy','Remover',array($avaliacao->id),array('class' =>'btn btn-danger btn-block')) !!}
			  </div>
	</div>
</div>


</div>
  @include('partials._javascript')



   




