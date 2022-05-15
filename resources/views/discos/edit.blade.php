@extends('layout')

@section('contenido')
 
<section class="container">
<div class="columns">
    <div class="column is-half is-offset-one-quarter">
        <div class="card" id="formlogin">
                <div class="card-content">
                        <div class="content">
<form action="{{route('discos.update', $disco->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
    <div class="field">
        <div class="control">
            <label class="has-text-white" for="album">Artista</label>
    <input type="text" class="input is-large" placeholder="ARTISTA" name="artista" value="{{$disco->artista}}">
        </div>
    </div>  
    <div class="field">
        <div class="control">
    <label class="has-text-white" for="album">Album</label>
    <input type="text" class="input is-large" name="album" value="{{$disco->album}}">
        </div>
        </div>  
        <div class="field">
            <div class="control">
    <label class="has-text-white" for="anio">Año de Lanazamiento</label>
    <input type="number" class="input is-large" name="anio" value="{{$disco->anio}}">
            </div>
            </div> 
            <div class="field">
                <div class="control">
    <label class="has-text-white" for="genero">Genero</label>
    <input type="text" class="input is-large" name="genero" value="{{$disco->genero}}">
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
    <label class="has-text-white" for="enlace">Enlace</label>
    <input type="text" name="enlace" class="input is-large" value="{{$disco->enlace}}">
                    </div>
                    </div> 
                    <div class="field">
                        <div class="control">
    <label class="has-text-white" for="calificacion">Calificacion</label>
    <input type="number" name="calificaciones" class="input is-large" value="{{$disco->calificaciones}}">
    </div>
    </div> 
    <div class="columns">
        <div class="column">
    <button class="button is-link is-large is-rounded is-fullwidth  mt-2" type="submit"> GUARDAR CAMBIOS </button>
</div>
</div> 
</form>            
                        </div>
                </div>
        </div>
    </div>
</div>
</section>   
@endsection