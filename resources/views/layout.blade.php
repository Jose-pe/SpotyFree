<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bulma/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/mymain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Spotyfree</title>

</head>


<body>
    <header>
        <nav class="navbar" role="navigation" >
            
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ route('discos.index') }}">
                 <img src="/imagenes/applogo.png" alt="spotyfree" width="142" height="auto">
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    @guest     
                    @if (Route::has('login'))
                    @endif
                    @else
                    <div class="buttons ml-5">
                    <a  class="button is-link ml-3" href="{{route('discos.index')}}">
                        <span class="icon mr-1">

                            <i class="fas fa-compact-disc"></i>
                            
                          </span>
                           Listar Discos
                        </a> 
                    <a class="button is-link ml-5" href="{{route('discos.create')}}">
                        <span class="icon mr-1">

                            <i class="far fa-plus-square p-4"> </i>
                            
                          </span> Crear Disco</a> 
                    </div>   
                    @endguest
                </div>

                <div class="navbar-end">

                    @guest
                    @if (Route::has('register'))
                    @endif
                    @else                   
                    <div class="navbar-item">
                        <p class="control has-icons-left">
                            <input class="input is-rounded" type="text" placeholder="Buscar Discos">
    
                            <span class="icon is-small is-left">
                                <i class="fas fa-search"></i>   
                            </span>
                        </p>
    
                    </div>           
                    @endguest
                    <div class="navbar-item">
                        <div class="buttons">
                            @guest  
                            @if (Route::has('login'))
                            @endif

                            @if (Route::has('register'))
                            @endif

                            @else
                               

                            <a class="button is-link " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                             <span class="icon p-5">

                               <i class="fas fa-sign-out-alt"></i>
                                    
                            

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </span>Salir
                               
                                </a>  
                        @endguest
                        </div>
                    </div>
                </div>
            </div>           
        </nav>
        
    </header>
<section>
    
    @yield('contenido')       

</section>


<footer>
    <small> <i class="fab fa-creative-commons-sampling"></i> Spotyfree {{date('Y')}}</small>
</footer>

</body>


</html>