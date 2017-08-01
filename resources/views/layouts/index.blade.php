
<title>@yield('title')
</title>
@include('partials._head')
<body>
<div class="col-md-10 col-md-offset-1"> 
@include('partials._nav')

<div class="row" style="margin:auto">
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-4">
            <h2>@yield('heading')</h2>
     </div>
     





   
</div>

</div>

<div class="col-md-4">
  <form class="navbar-form navbar-left">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
          <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
      </div>
    </form>
  </div>

</div>

<hr style="height:4px; background-color:purple; margin-top:-10px col">
 

  @yield('tabela')
<hr>



</div>

@include('partials._javascript')
</body>
