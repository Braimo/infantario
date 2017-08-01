
<div class="col-md-10">

				<table class="table table-hover table-responsive">
				    <thead>
				     
				        <th> Nome </th>

				        <th> Data</th>

				        <th> Educadora responsavel </th>

				        <th> Descricao do Momento </th>

				        <th>Accao</th>

				    </thead>
				  
				  <tbody>
				       
				      <tr>

				        <td> {{ $crianca->momentos->nome }} </td>

				        <td> {{ date('M j, Y h:ia',strtotime($crianca->momentos->created_at)) }} </td>

				        <td> {{ $crianca->educadoras->nome . '' . $crianca->educadoras->apelido }} </td>

				        <td> {{ $crianca->momentos->descricao }} </td>

				        <td>{{  $crianca->educadoras->nivel_academico }} </td>

				     </tr>
				      
				  </tbody>

				</table>


		  </div>
