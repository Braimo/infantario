<style> li{display:inline;}
        .imagem a:link {
                
                        text-decoration: none;
                } 

.imagem a:visited {
    color: pink;
    background-color: transparent;
    text-decoration: none;
}

.imagem a:hover {
    color: purple;
    background-color: transparent;
    text-decoration: underline;
}



         </style>

        



      <div class="row">   

    <ul class="imagem">

     

            
         
                 
                @foreach($turma->criancas as $crianca)
                
                <li>
                
                 
                <center>

                 
                <img src= "{{ asset('img/' . $crianca->foto) }}" class="img_size img-responsive img-thumbnail" alt="Responsive image">
                <figcaption>  

                    <span class="lead">{{ $crianca->nome }} </span>

                    <div class="checkbox">
                <label onclick="presentes({{$crianca}})" name="presentes[]" value="{{$crianca->id}}"><input type="checkbox" style="color:green; background-color:green" value="{{ $crianca->id }} " id="presentes">Presente</label>
                </div>

                  <div class="checkbox">
                <label><input type="checkbox" value="">Entregue</label>
                </div>
            </figcaption>
            
           
                </center>
                
                
            </li>

             @endforeach

        </ul>


</div>

    
