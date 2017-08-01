
<div class="col-md-10">

				<table class="table table-hover ">
				    <thead>
				     
				        <th> Nome </th>

				        <th> Sobrenome</th>

				        <th> Apelido </th>

				        <th> Data de Nascimento </th>

				        <th>Genero</th>

				        <th>Nivel</th>

				    </thead>
				  
				  <tbody>
				       
				      <tr>

				        <td> {{ $crianca->turmas }} </td>

				        <td> {{ $crianca->sobrenome }} </td>

				        <td> {{ $crianca->apelido }} </td>

				        <td> {{ date('M j, Y h:ia',strtotime($crianca->data_nascimento)) }} </td>

				        <td>{{ $crianca->genero }} </td>

				        <td>{{  $crianca->educadoras->nivel_academico }} </td>

				     </tr>
				      
				  </tbody>

				</table>


		  </div>
