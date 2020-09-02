@extends('layouts.bodylogin')

@section('body')

<div class="wrapper-page">
<div class="card">
<div class="card-body">
                    <h3 class="text-center mt-0">
                        <a href="index.html" class="logo logo-admin"><img src="{{asset('assets/images/logo.png')}}" height="100" alt="Yo lo reservo"></a>
                    </h3>

                    <h6 class="text-center">Crear Cuenta</h6>

                    <div class="p-3">
                        
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre Completo</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Clave</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Repetir clave</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>

                            <div class="form-group m-t-10 mb-0 row">


                                <div class="col-sm-7 m-t-20">
                               
    @if (Route::has('password.request')) <a class="btn btn-link" href="{{ route('password.request') }}">                   
        Olvidaste la contraseña ?</a> @endif  
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> No tienes cuenta ?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
          </div>
         </div>
    @endsection
