@extends('layout')

@section('contenido')
<section class="container">

    <div class="columns">

        <div class="column is-half is-offset-one-quarter">
            <div class="card" id="formlogin">
                <div class="card-content">
                    <div class="content">
                        <form action="{{route('discos.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                    
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input is-large" name="artista" placeholder="Nombre de Artista" required>

                                </div>
                            </div>
                           
                            <div class="field">
                             <div class="control">
                            
                            <input type="text" class="input is-large" name="album" placeholder="Nombre del Album"  required>
                              </div>
                             </div>
                            <div class="field">
                            <div class="control">
                                <select class="input is-large mb-2" name="anio">
                                    <option selected value="{{date('Y')}}"> Año de Lanzamiento del Disco</option>
                                {{$anios = 1950}}
                            @while ($anios <= 2025)
                            {{$anios = $anios + 1}}
                            <option value="{{$anios}}">{{$anios}}</option>
                            @endwhile($anios)                          
                        </select>                   
                            
                           </div>
                            </div>
                            <div class="field">
                              <div class="control">
                            <input type="text" class="input is-large" name="genero" placeholder="Genero Musical" required>
                                 </div>
                                 </div>   
                                 <div class="field">
                                    <div class="control">
                            <div class="file has-name is-fullwidth">

                                <label class="file-label">
                                    <input type="file" class="file-input" name="portada"  placeholder="Subir Portada" required>

                                    <span class="file-cta">
                                      <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                      </span>
                                      <span class="file-label">
                                        Subir Portada de Disco
                                      </span>
                                    </span>
                                    <span class="file-name">
                                     Formatos de imagen PNG, JPEG, JPG 
                                    </span>
                                  </label>

                            </div>
                        </div>
                    </div> 
                        
                    <div class="field">
                        <div class="control">
                            <input type="text" class="input is-large mt-3" name="enlace" placeholder="Link de Descarga del Disco" required>
                        </div>
                    </div> 
                    <div class="field">
                        <div class="control">
                            <select  class="input is-large mb-4" name="calificaciones" required>
                                <option value="1" selected>Calificación del Disco</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                        </div>
                    </div>
                    <div class="field">
                        <button type="submit" class="button is-light is-large is-rounded is-fullwidth  mt-2">
                          Publicar Disco
                        </button>
                    </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
   
   

</section>
@endsection