@extends('layout')

@section('contenido')
    <h3> editar disco</h3>

<form action="{{route('discos.update', $disco->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    
    <label for="artista">Artista</label>
    <input type="text" name="artista" value="{{$disco->artista}}">


    <label for="album">Album</label>
    <input type="text" name="album" value="{{$disco->album}}">

    <label for="anio">Año de Lanazamiento</label>
    <input type="date" name="anio" value="{{$disco->anio}}">

    <label for="genero">Genero</label>
    <input type="text" name="genero" value="{{$disco->genero}}">

    <label for="portada"></label>
    <input type="file" name="portada">

    <label for="enlace">Enlace</label>
    <input type="text" name="enlace" value="{{$disco->enlace}}">
    
    <label for="calificacion">Calificacion</label>
    <input type="text" name="calificaciones" value="{{$disco->calificaciones}}">

    <input type="submit">
</form>     
@endsection