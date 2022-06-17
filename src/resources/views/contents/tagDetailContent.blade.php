<main>
    <article class="container">
    

    <section class="card-wrapper " >
        <a name="descripcion"></a>
        <div class="card-header"><h3 class="card-title">{{$tagdata["Name"]}}</h3></div>
        <div class="card-body">
        <p class="card-text">{{$tagdata["Description"]}}</p>
        <p class="card-text"><strong>Vacio:</strong>  
            @if ($tagdata["Empty"] == true)
                true
            @else
                false
            @endif
        </p>
        <p class="card-text"><strong>Category:</strong> {{$tagdata["Category"]}}</p>
        @foreach ($tagdata["Example"] as $item => $valor)
             <p class="card-text"><strong>Ejemplo:</strong> <code>{{$tagdata["Example"][$item]}}</code> </p>
        @endforeach
       
        </div>
        
    </section>
    <hr>
    <section class="card-wrapper " >
        <a name="atributos"></a>

        <div class="card-header"><h3 class="card-title"># Atributos</h3></div>
        <div class="card-body">
        @foreach ($tagdata["Attribute"] as $clave => $valor)
            <h3 class="card-title"><strong>{{$clave}}</strong></h3>
            @foreach ($tagdata["Attribute"][$clave] as $subclave => $subvalor)
            
            @if (is_array($tagdata["Attribute"][$clave][$subclave]))
                <p><strong>Admite:</strong></p>
                @php
                    $i = 0;
                @endphp
                @foreach ($tagdata["Attribute"][$clave][$subclave] as $subclave2 => $subvalor2)
                
                    @if ($tagdata["Attribute"][$clave][$subclave] == $tagdata["Attribute"][$clave]["Example"])
                        
                    <p class="card-text"><strong>Ejemplo:</strong> <code>{{$tagdata["Attribute"][$clave]["Example"][$i++]}}</code> </p>
                    
                    @else
 
                    <ul>
                        <li class="card-text"><strong>{{$subclave2}}</strong>: {{$subvalor2}}</li>
                    </ul>
                    
                    @endif
                
                    @endforeach
                    
            @elseif (is_bool($tagdata["Attribute"][$clave][$subclave]) && true)
                
                <p class="card-text"><strong>Booleano:</strong> true</p>
            
            @elseif (is_bool($tagdata["Attribute"][$clave][$subclave]) && false)
                
                <p class="card-text"><strong>Booleano:</strong> false</p>

            @else
                    <p class="card-text"><strong>{{$subclave}}:</strong> {{$subvalor}}</p>
            @endif
                
            @endforeach
            
        @endforeach
        
        </div>
        
    </section>
    <hr>
    <section class="card-wrapper " >
        <a name="ejemplos"></a>

        <div class="card-header"><h3 class="card-title">Descripcion de ejemplos</h3></div>
        <div class="card-body">
        
        <p class="card-text"></p>
        
        </div>
        
    </section>
        
    </article> 