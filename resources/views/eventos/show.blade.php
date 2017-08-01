@include('partials._head')
<title>Evento</title>  
@include('partials._nav')

@include('partials._messages')

<div class="row container">
		<div class="col-md-8">

				<table class="table table-hover ">
				    <thead style="background-color: #F0F8FF">
				     
				        <th> Nome </th>

				        <th> Local</th>

				        <th> Data de Publicacao </th>

				        <th> Data de Ocorrencia </th>

				        <th> Descricao</th>
     
				    </thead>
				  
				  <tbody>
				       
				      <tr>

				        <td> {{ $evento->nome }} </td>

				        <td> {{ $evento->local }} </td>

				        <td> {{ date('M j, Y h:ia',strtotime($evento->data_publicacao)) }} </td>

				        <td> {{ date('M j, Y h:ia',strtotime($evento->data_ocorrencia)) }} </td>

				        <td>{{ $evento->descricao }} </td>

				     </tr>
				      
				  </tbody>

				</table>

		  </div>

	<div class="col-md-4 well" >
	  


			 <ul class="list-group">

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Guardado:</strong><span><span></span></span>   

					  {{ date('M j, Y h:ia',strtotime($evento->created_at)) }}

					</li>

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Editado:</strong>
					  
					  {{ date('M j, Y h:ia',strtotime($evento->updated_at)) }}

					</li>

			  </ul>

			   <hr style="height: 2px; background-color: grey;">
			        
			<div class="row">
					  <div class="col-md-6">

						  {!! Html::linkRoute('eventos.edit','Editar',array($evento->id),array('class' =>'btn btn-primary btn-block')) !!}

					  </div>

					  <div class="col-md-6">

					  {!! Html::linkRoute('eventos.destroy','Remover',array($evento->id),array('class' =>'btn btn-danger btn-block')) !!}
					  </div>
			</div>
	</div>


</div>

@include('partials._javascript')



   




