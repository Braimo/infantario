@include('partials._head')
<title>Parente</title>  
@include('partials._nav')

@include('partials._messages')

<div class="row container">
		<div class="col-md-10">

				<table class="table table-hover ">
				    <thead style="background-color: #F0F8FF">
				     
				        <th> Nome </th>

				        <th> Sobrenome</th>

				        <th> Apelido </th>

				        <th> Data de Nascimento </th>

				        <th> Genero</th>

				        <th> Grau de Parentesco</th>

				        <th> Contacto </th>

				        <th> Morada </th>
     
				    </thead>
				  
				  <tbody>
				       
				      <tr>

				        <td> {{ $parente->nome }} </td>

				        <td> {{ $parente->sobrenome }} </td>

				        <td> {{ $parente->apelido }} </td>

				        <td> {{ date('M j, Y h:ia',strtotime($parente->data_nascimento)) }} </td>

				        <td> {{ $parente->genero }} </td>

				        <td> {{ $parente->grau_parentesco }} </td>

			        	<td> {{ $parente->contacto }} </td>

			        	<td> {{ $parente->morada }} </td>

				     </tr>
				      
				  </tbody>

				</table>

		  </div>

	<div class="col-md-2 well" >
	  


			 <ul class="list-group">

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Guardado:</strong><span><span></span></span>   

					  {{ date('M j, Y h:ia',strtotime($parente->created_at)) }}

					</li>

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Editado:</strong>
					  
					  {{ date('M j, Y h:ia',strtotime($parente->updated_at)) }}

					</li>

			  </ul>

			   <hr style="height: 2px; background-color: grey;">
			        
			<div class="row">
					  <div class="col-md-6">

						  {!! Html::linkRoute('parentes.edit','Editar',array($parente->id),array('class' =>'btn btn-primary btn-block')) !!}

					  </div>

					  <div class="col-md-6">

					  {!! Html::linkRoute('parentes.destroy','Remover',array($parente->id),array('class' =>'btn btn-danger btn-block')) !!}
					  </div>
			</div>
	</div>


</div>

@include('partials._javascript')

