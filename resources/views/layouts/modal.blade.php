 
   @include('partials._head')
  
   <body>
      <!-- Button trigger modal -->
      <a  data-toggle="modal" data-target="#myModalHorizontal">
      Registar Educadora
      </a>
      <br/>
      @include('partials._messages')
      <!-- Modal -->
      <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header" style="background-color:#48D1CC;">
                  <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                  </button>
                  <h3 class="modal-title" id="myModalLabel" >
                     @yield('head')

                  </h3>
               </div>
               <!-- Modal Body -->
               <div class="modal-body" sytle=" background-color:#8B0000; margin:auto;">
                  @yield('form')
                  <hr class="col-md-8 col-md-offset-1"/>
    <div class="form-group">
         <div class="col-md-8 col-md-offset-2">
            <button type="submit" id="registar_educadora" class="btn btn-default  btn-lg btn-block" value="Registar" style="background-color: #48D1CC">@yield('lbutton')
            </button>
        </div>
    </div>
               </div>
            </div>
         </div>
      </div>
      @include('partials._javascript')

   </body>
