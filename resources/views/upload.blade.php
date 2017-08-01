@include('partials._head')

<body class="container">
  @include('partials._nav')

 <div class="row ">

  <div class="col-md-4 col-md-offset-4">
      <center><a href="/img/logo.jpg" class="thumbnail" style="width:250px; height:200px">
    <img src="/img/logo.jpg" alt="..." > </a>
    <h3>Amade Antonio</h3>

    </center>
  </div>
   
 </div>


<div class="row">

<div class="tab nav nav-tabs lead">
  <button role="presentation" class="tablinks" onclick="openCity(event, 'Sobre')">Sobre</button>
  <button role="presentation" class="tablinks" onclick="openCity(event, 'Momentos')">Momentos</button>
  <button role="presentation" class="tablinks" onclick="openCity(event, 'Actividades')">Actividades</button>
  <button role="presentation" class="tablinks" onclick="openCity(event, 'Caderneta')">Caderneta</button>
  <button role="presentation" class="tablinks" onclick="openCity(event, 'Registo_Medico')">Registo Medico</button>
  <button role="presentation" class="tablinks" onclick="openCity(event, 'Historico')">Historico</button>
</div>

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


function openCity(evt, cityName) {
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
===============================================================

<style>
@import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


body, html{
  height: 100%;
  padding: 0;
  margin: 0;
  font-family: 'Sniglet', cursive;
}
h1{
  font-weight: normal;
  font-size: 4em;
  font-family: 'Raleway', sans-serif;
  margin: 0 auto;
  margin-top: 30px;
  width: 500px;
  color: #F90;
  text-align: center;

}

/* Animation webkit */
@-webkit-keyframes myfirst
{
  0% {margin-left: -235px}
  90% {margin-left: 100%;}
  100% {margin-left: 100%;}
}

/* Animation */
@keyframes myfirst
{
  0% {margin-left: -235px}
  70% {margin-left: 100%;}
  100% {margin-left: 100%;}
}

.fish{
  background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
  width: 235px;
  height: 104px;
  margin-left: -235px;
  position: absolute; 
  animation: myfirst 24s;
  -webkit-animation: myfirst 24s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-timing-function: linear;
}

#fish{
  top: 120px;
}

#fish2{
  top: 260px;
  animation-delay: 12s;
  -webkit-animation-delay: 12s;
}


header{
  height: 160px;
  background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
}

#form{
  height: 100%; 
  background-color: #98d4f3;
  overflow: hidden;
  position: relative;
  
}
form{
  margin: 0 auto;
  width: 500px;
  padding-top: 40px;
  color: white;
  position: relative;
  
  
}
label, input, textarea{
  display: block; 
}
input, textarea{
  width: 500px; 
  border: none;
  border-radius: 20px;
  outline: none;
  padding: 10px;
  font-family: 'Sniglet', cursive;
  font-size: 1em;
  color: #676767;
  transition: border 0.5s;
  -webkit-transition: border 0.5s;
  -moz-transition: border 0.5s;
  -o-transition: border 0.5s;
  border: solid 3px #98d4f3;  
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
  
}
input:focus, textarea:focus{
  border: solid 3px #77bde0;  
}

textarea{
  height: 100px;  
  resize: none; 
  overflow: auto;
}
input[type="submit"]{
  background-color: #F90;
  color: white;
  height: 50px;
  cursor: pointer;
  margin-top: 30px;
  font-size: 1.29em;
  font-family: 'Sniglet', cursive;
  -webkit-transition: background-color 0.5s;
  -moz-transition: background-color 0.5s;
  -o-transition: background-color 0.5s;
  transition: background-color 0.5s;
}
input[type="submit"]:hover{
  background-color: #e58f0e;
  
}
label{
  font-size: 1.5em;
  margin-top: 20px;
  padding-left: 20px;
}
.formgroup, .formgroup-active, .formgroup-error{
  background-repeat: no-repeat;
  background-position: right bottom;
  background-size: 10.5%;
  transition: background-image 0.7s;
  -webkit-transition: background-image 0.7s;
  -moz-transition: background-image 0.7s;
  -o-transition: background-image 0.7s;
  width: 566px;
  padding-top: 2px;
}

.formgroup{
  background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif'); 
}
.formgroup-active{
  background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
}
.formgroup-error{
  background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
  color: red;
}
</style>
<div class="selecionar">
    <img src="/img/foto_icon.jpeg" /> 
    <input type="checkbox" class="checkbox" id="check1" />
</div>
<div class="selecionar">
    <img src="/img/audio_icon.jpeg" />
    <input type="checkbox"  class="checkbox" id="check2" />
</div>


<style> 
.selecionar { position: relative; width: 100px; height: 100px; float: left; margin-left: 10px; }
.checkbox { position: absolute; bottom: 0px; right: 0px; }

</style>


  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="col-md-5">
  <textarea rows="5" placeholder="Texto">Next, get a free TinyMCE Cloud API key!</textarea>
</div>

=====================

<div class="container col-md-8" id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform" method="post">

<div class="formgroup" id="name-form">
    <label for="name">Your name*</label>
    <input type="text" id="name" name="name" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">Your e-mail*</label>
    <input type="email" id="email" name="email" />
</div>

<div class="formgroup" id="message-form">
    <label for="message">Your message</label>
    <textarea id="message" name="message"></textarea>
</div>

  <input type="submit"  class="btn btn-success" value="Send your message!" />
</form>
</div>


<script>
$('document').ready(function(){
  $('input[type="text"], input[type="email"], textarea').focus(function(){
    var background = $(this).attr('id');
    $('#' + background + '-form').addClass('formgroup-active');
    $('#' + background + '-form').removeClass('formgroup-error');
  });
  $('input[type="text"], input[type="email"], textarea').blur(function(){
    var background = $(this).attr('id');
    $('#' + background + '-form').removeClass('formgroup-active');
  });

function errorfield(field){
  $(field).addClass('formgroup-error');
  console.log(field); 
}

$("#waterform").submit(function() {
  var stopsubmit = false;

if($('#name').val() == "") {
  errorfield('#name-form');
  stopsubmit=true;
}
if($('#email').val() == "") {
  errorfield('#email-form');
  stopsubmit=true;
}
  if(stopsubmit) return false;
});
    
});
</script>


@include('partials._javascript')
</body>



