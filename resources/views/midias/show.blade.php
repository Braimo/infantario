@include('partials._head')

<title>Midia</title>	

@include('partials._nav')

@include('partials._messages')


<div class="row container">

<div class="col-md-8">
  

<table class="table table-hover">

    <thead style="background-color: #F0F8FF">

      <tr>

        <th>Nome</th>

        <th>Data</th>

        <th>Descricao</th>
        
      </tr>

    </thead>

    <tbody>

      <tr>

        <td> <img src="{{ asset('img/' . $midia->midia) }}" alt="Teste" width='200px' height='300px' >  </td>

        <td> jaj </td>

        <td> {{$midia->created_at}} </td>

      </tr>

    </tbody>

  </table>

</div>

<div class="col-md-4 well" >
	


	<ul class="list-group">

		<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;">

      <strong>Guardado:</strong><span><span></span></span> 

			{{ date('M j, Y h:ia',strtotime($midia->created_at)) }}

		</li>

		<li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Editado:</strong>

			{{ date('M j, Y h:ia',strtotime($midia->updated_at)) }}
 
		</li>

	</ul>

   	<hr style="height: 2px; background-color: grey;">
				
<div class="row">

	<div class="col-md-6">

  {!! Html::linkRoute('momentos.edit','Editar',array($midia->id),array('class' =>'btn btn-primary btn-block')) !!}

		</div>

	<div class="col-md-6">

  {!! Html::linkRoute('momentos.destroy','Remover',array($midia->id),array('class' =>'btn btn-danger btn-block')) !!}

	</div>

</div>

</div>

</div>

  @include('partials._javascript')

