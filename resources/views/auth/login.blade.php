@extends('layout')

@section('contenido')
<div class="container">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="card" id="formlogin">
                

                <div class="card-content">
                    <div class="content">                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field mt-2">
                            <p class="control has-icons-left">
                                <input id="email" type="email" class="input is-large @error('email') is-invalid @enderror" placeholder="Ingrese su e-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                  </span>
                            </p>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     

                        <div class="field mt-3">
                            <p class="control has-icons-left">
                                <input id="password" type="password" class="input is-large @error('password') is-invalid @enderror"  placeholder="Ingrese su contraseña"  name="password" required autocomplete="current-password">

                                <span class="icon is-small is-left">
                                    <i class="fas fa-key"></i>
                                  </span>
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </p>                   
                        </div>
                        <div class="field mt-2">
                                    
                            <button type="submit" class="button is-light is-large is-rounded is-fullwidth">
                                {{ __('Login') }}
                            </button>
                       

                       </div>
                        
                        <div class="columns">
                            <div class="column has-text-centered">
                               
                                    <div class="field mt-2">
                                        <label class="checkbox" for="remember" id="remember">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                            {{ __('Recordar mis datos') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="column has-text-centered">
                                    <div class="field mt-3">
                                        @if (Route::has('password.request'))
                                            <a class="is-link" href="{{ route('password.request') }}">
                                                {{ __('Olvidaste tu contraseña?') }}
                                            </a>
                                         @endif
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                        
                    </form>
                </div>
                </div>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection
