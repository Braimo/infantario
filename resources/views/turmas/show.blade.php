@include('partials._head')
<title>Turma</title>  
@include('partials._nav')

@include('partials._messages')

<div class="row container">
		<div class="col-md-8">

				<table class="table table-hover ">
				    <thead style="background-color: #F0F8FF">
				     
				        <th> Nome </th>

				        <th>Ano</th>

				        <th> Nivel </th>

				        <th> Numero de Alunos </th>

				        <th>  Descricao</th>     
     
				    </thead>
				  
				  <tbody>
				       
				      <tr>

				        <td> {{ $turma->nome }} </td>

				        <td> {{ $turma->ano }} </td>

				        <td> {{ $turma->nivel }} </td>

				        <td> {{ $turma->qtd_criancas }} </td>

				        <td> {{ $turma->descricao }} </td>

				     </tr>
				      
				  </tbody>

				</table>

		  </div>

	<div class="col-md-4 well" >
	  


			 <ul class="list-group">

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Guardado:</strong><span><span></span></span>   

					  {{ date('M j, Y h:ia',strtotime($turma->created_at)) }}

					</li>

					<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Editado:</strong>
					  
					  {{ date('M j, Y h:ia',strtotime($turma->updated_at)) }}

					</li>

			  </ul>

			   <hr style="height: 2px; background-color: grey;">
			        
			<div class="row">
					  <div class="col-md-6">

						  {!! Html::linkRoute('turmas.edit','Editar',array($turma->id),array('class' =>'btn btn-primary btn-block')) !!}

					  </div>

					  <div class="col-md-6">

					  {!! Html::linkRoute('turmas.destroy','Remover',array($turma->id),array('class' =>'btn btn-danger btn-block')) !!}
					  </div>
			</div>
	</div>


</div>

@include('partials._javascript')

