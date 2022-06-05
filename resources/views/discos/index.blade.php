@extends('layout')

@section('contenido')



<div class="container is-fluid">
  <div class="section">
    <h2 class="title">
     Hola de nuevo {{ Auth::user()->name }} !!! 

    </h2>
  </div>
    <div class="columns is-multiline is-mobile">
        @foreach ($discos as $disco)
        <div class="column is-full-mobile is-one-third-desktop is-half-tablet">
           
        <div class="card" id="discos">
            <div class="card-image">
              <figure class="image is-4by3">
               <img src="/storage/imagenes/{{$disco->portada}}" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
               
                <div class="media-content">
                  <p class="title is-4" id="artista">{{$disco->artista}}</p>
                  <p class="subtitle is-6" id="album">{{$disco->album}}</p>
                </div>
              </div>
          
              <div class="content">
                <time id="anio">{{$disco->anio}}</time>  <br>
               <p id="calificacion"> {{ $estrella = $disco->calificaciones}} </p>
                <p class="mb-3 mt-2">
                @for ($i = 0 ; $i < $estrella ; $i++)
                 <i class="fas fa-star estrella"></i>
                @endfor
               </p>
                <div class="botonescard">
                    <div class="">
                        <a  class="tag is-link"  href="#">#{{$disco->genero}}</a>

                    </div>

                    <div>
                    
                        
                        <a target="_blank" href="{{$disco->enlace}}" class="button is-link is-outlined is-small"> 
                          <span class="icon p-4">                         
                          <i class="fas fa-download"></i>
                        </span>Descargar</a>
                   
                      </div>
                     
                </div>   
                <div class="columns">
                
                  <div class="column "> 
                   
                  <form onclick=" return confirm('¿Seguro que quieres eliminar este disco?');" method="POST" action="{{route('discos.destroy', $disco->id)}}">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="button is-link is-outlined is-small"> 
                      <span class="icon p-4">                         
                      <i class="fas fa-trash"></i>
                    </span></button>
                  </form>
                  <a href="{{route('discos.edit', $disco->id)}}" class="button is-link is-outlined is-small"> 
                    <span class="icon p-4">                         
                    <i class="fas fa-pen"></i>
                  </span></a>
                  </div>
                 
                </div>            
              </div>
            </div>
          </div>

        </div>
        @endforeach
    </div>
    <section>
      
        <div class="columns is-mobile mb-5">
          <div class="column is-half-desktop is-full-mobile  is-offset-one-quarter-desktop has-text-centered">
            <a class="button is-link mr-5" href="{{$discos->previousPageUrl()}}">
              <span class="icon mr-1">
                <i class="fas fa-backward"></i>
              </span> Anterior
            </a>
            <a class="button is-link ml-5" href="{{$discos->nextPageUrl()}}">Siguiente 
             <span class="icon ml-1">
              <i class="fas fa-forward"></i>
              </span>   
             </a> 
          </div>
        </div>
      
      
    </section>
</div>

<div>

{{--


<ul>
    <li>{{$disco->artista}}</li>
    <li><a href="{{route('discos.edit', $disco->id)}}"> edit </a></li>
    <form action="{{route('discos.destroy', $disco->id)}}" method="POST">
        @csrf
        @method('DELETE')
    <li> <button type="submit"> eliminar </button></li>
    </form>   
</ul>         --}} 

</div>
@endsection