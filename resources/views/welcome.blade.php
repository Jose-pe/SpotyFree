@extends('layout')

@section('contenido')

<div class="container">
    @guest 
    @if (Route::has('login'))
    <div id="contenedorlogin">
        <div id="">
             
            
            <a class="button is-rounded is-large" href="{{ route('login') }}">{{ __('Login') }}</a>
         
           
        </div>
    </div>
    @endif
   
        
    @endguest

       
</div>

<div>
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

   
</div>
@endsection


                 

    
