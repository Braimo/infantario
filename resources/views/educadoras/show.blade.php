@include('partials._head')
<title>Educadora</title>  
@include('partials._nav')

@include('partials._messages')

<div class="row container">
		<div class="col-md-8">

				<table class="table table-hover ">
				    <thead style="background-color: #F0F8FF">
				     
				        <th> Nome </th>

				        <th> Sobrenome</th>

				        <th> Apelido </th>

				        <th> Data de Nascimento </th>

				        <th>Morada</th>

				        <th>Contacto</th>

				        <th>Nivel</th>

				        <th>Formacao</th>

				    </thead>
				  
				  <tbody>
				       
				      <tr>

				        <td> {{ $educadora->nome }} </td>

				        <td> {{ $educadora->sobrenome }} </td>

				        <td> {{ $educadora->apelido }} </td>

				        <td> {{ date('M j, Y h:ia',strtotime($educadora->data_nascimento)) }} </td>

				        <td>{{ $educadora->morada }} </td>

				        <td> {{ $educadora->contacto }} </td>

				        <td> {{ $educadora->nivel_academico }} </td>

				        <td> {{ $educadora->formacao }} </td>

				     </tr>
				      
				  </tbody>

				</table>

		  </div>

	<div class="col-md-4 well" >
	  


			 <ul class="list-group">

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Guardado:</strong><span><span></span></span>   

					  {{ date('M j, Y h:ia',strtotime($educadora->created_at)) }}

					</li>

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Editado:</strong>
					  
					  {{ date('M j, Y h:ia',strtotime($educadora->updated_at)) }}

					</li>

			  </ul>

			   <hr style="height: 2px; background-color: grey;">
			        
			<div class="row">
					  <div class="col-md-6">

						  {!! Html::linkRoute('educadoras.edit','Editar',array($educadora->id),array('class' =>'btn btn-primary btn-block')) !!}

					  </div>

					  <div class="col-md-6">

					  {!! Html::linkRoute('educadoras.destroy','Remover',array($educadora->id),array('class' =>'btn btn-danger btn-block')) !!}
					  </div>
			</div>
	</div>


</div>

@include('partials._javascript')



   




