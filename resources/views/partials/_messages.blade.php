
@if (Session::has('message'))

    <div class="alert alert-success alert-dismissable col-md-10">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong> {{ Session::get('message')}}
       </strong> 
   </div>

@endif

@if (count($errors) > 0)

<div class="alert alert-danger alert-dismissable col-md-8 container" role="alert">
<strong> Errors</strong>
<ul>
	@foreach ($errors->all() as $error)
	<li> {{ $error }} </li>
	@endforeach
</ul>
</div>
<br/>

@endif