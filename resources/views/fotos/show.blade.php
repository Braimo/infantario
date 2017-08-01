@include('partials._head')
<title>Perfil</title>  
<body class="container well">
@include('partials._nav')

<div class="row container">

	<div class="col-md-12">


	<div class="row">
	    @yield('perfil')

  </div>     
				   				 
		<div class="row" style=" font-size: 20px; color:purple;">

			 
			   	<ul class=" tab lead nav nav-tabs">
				<li role="presentation" class=" tablinks " onclick="openTab(event,'Sobre')"><a href="#">Sobre</a></li>

				<li role="presentation" class="tablinks " onclick="openTab(event,'Momentos')"><a href="#">Momentos</a>
				</li>
				
             <li role="presentation" class=" tablinks " onclick="openTab(event,'Actividades')"><a href="#">Actividades</a>
				</li>

				<li role="presentation" class=" tablinks " onclick="openTab(event,'Caderneta')"><a href="#">Caderneta</a>
				</li>

				<li role="presentation" class=" tablinks " onclick="openTab(event,'Registo_Medico')"><a href="#">Registo Medico</a>
				</li>


			<li role="presentation" class=" tablinks " onclick="openTab(event,'Historico')"><a href="#">Historico</a>
				</li>
                   

			    </ul>
			
           <div id="Sobre" class="tabcontent">
           
           @yield('sobre')


          </div>

          <div id="Momentos" class="tabcontent">
            @yield('momentos')

          </div>


          <div id="Actividades" class="tabcontent">
            @yield('actividades')

          </div>

          <div id="Caderneta" class="tabcontent">
             @yield('caderneta')

          </div>

          <div id="Registo_Medico" class="tabcontent">
             @yield('registo_medico')

          </div>

          <div id="Historico" class="tabcontent">
            @yield('historico')

          </div>

         </div>

       <script>
           function openTab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


       </script>
	
		  </div>

		</body>



</div>

@include('partials._javascript')



   