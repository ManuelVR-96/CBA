@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" action="{{ route('password.email') }}" class="form">       
            
        <div class="form-header"><br>
            <img src="/img/LogoInicio.png" style="width:150px; height:130px;" class="center">
            <h1 class="form-tittle">{{ __('Restablecer Contraseña') }}</h1>
        </div>

        <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif            
            
            @csrf            

            <div class="form-group row">
                <label for="email" class="col-md-5 col-form-label">{{ __('Dirección de Correo Electrónico') }}</label>
                <div class="col-md-7">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>           
               
            <button type="submit" class="btn-submit">
                {{ __('ENVIAR ENLACE DE RESTABLECIMIENTO') }}
            </button>                   
            
        </div>            
    </form>    
</div>
<div class="gradient"></div>
@endsection
