@extends('layouts.app')

@section('contenido')
<div class="container is-fluid">
    <div class="row justify-content-center">
        <div class="columns is-centered mt-4">
          <div class="column is-8 tags are-medium" id="contenedorgeneros">
           
                    
          </div>
        </div>
    </div>
    <div class="columns is-multiline ">
        @foreach ($discos as $disco)
        <div class="column is-one-third-desktop is-is-half-tablet">
           
        <div class="card" id="discos">
            <div class="card-image">
              <figure class="image is-4by3">
               <img src="storage/imagenes/{{$disco->portada}}" alt="Placeholder image">
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
                    
                        
                        <button class="button is-link is-outlined is-small"> 
                          <span class="icon p-4">                         
                          <i class="fas fa-download"></i>
                        </span>Descargar</button>
                   
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
<script src="js/discos.js"></script>
@endsection
