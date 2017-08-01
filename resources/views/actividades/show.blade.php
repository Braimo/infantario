@include('partials._head')
<title>Actividade</title>  
@include('partials._nav')

@include('partials._messages')

<div class="row container">
<div class="col-md-8">
<table class="table table-hover ">
    <thead style="background-color: #F0F8FF">
      <tr>
        
        <th>Nome</th>
        <th>Data</th>
        <th>Tipo</th>
        <th>Descricao</th>

      </tr>
    </thead>
  
  <tbody>
      
 
        
      <tr>

        <td>
          {{$actividade->nome}} 
        </td>
        <td>
            {{  date('M j, Y h:ia',strtotime($actividade->created_at)) }} 
        </td>
        <td>
            {{$actividade->tipo}} 
        </td>

        <td>
            {{$actividade->educadoras->nome }} 
        </td>

   
     </tr>
          
    
      
      
    </tbody>
  </table>

  </div>

  <div class="col-md-4 well" >
  


  <ul class="list-group">
    <li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Guardado:</strong><span><span></span></span>   
      {{ date('M j, Y h:ia',strtotime($actividade->created_at)) }}
    </li>

    <li class="list-group-item" style="background-color:transparent; border: 1px solid transparent;"><strong>Editado:</strong>
      {{ date('M j, Y h:ia',strtotime($actividade->updated_at)) }}
 
    </li>
  </ul>

    <hr style="height: 2px; background-color: grey;">
        
<div class="row">
  <div class="col-md-6">

  {!! Html::linkRoute('momentos.edit','Editar',array($actividade->id),array('class' =>'btn btn-primary btn-block')) !!}

    </div>

  <div class="col-md-6">

  {!! Html::linkRoute('momentos.destroy','Remover',array($actividade->id),array('class' =>'btn btn-danger btn-block')) !!}
  </div>
</div>
</div>


</div>
  @include('partials._javascript')



   
