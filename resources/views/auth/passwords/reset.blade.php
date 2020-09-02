@extends('layouts.bodylogin')

@section('body')
<div class="wrapper-page">
<div class="card">
<div class="card-body">
                    <h3 class="text-center mt-0">
                        <a href="index.html" class="logo logo-admin"><img src="{{asset('assets/images/logo.png')}}" height="100" alt="Yo lo reservo"></a>
                    </h3>

                    <h6 class="text-center">{{ __('Register') }}</h6>

                    <div class="p-3">
                        
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Usuario" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                @enderror
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Entrar</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">


                                <div class="col-sm-7 m-t-20">
                               
    @if (Route::has('password.request')) <a class="btn btn-link" href="{{ route('password.request') }}">                   
        {{ __('Forgot Your Password?') }}</a> @endif  
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
