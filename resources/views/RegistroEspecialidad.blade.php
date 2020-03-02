@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div><br>

<div class="container">
    <form method="POST" class="form" action="{{route('especialidad.store')}}">
        
        <div class="form-header">           
            <h1 class="form-tittle">{{ __('REGISTRO DE ESPECIALIDADES') }}</h1>
        </div>
      
        <div class="card-body">
            @csrf

            <div class="form-group row">
                <label for="medica" class="col-md-3 col-form-label">{{ __('Nombre de la especialidad') }}</label>
                <div class="col-md-9">
                    <input id="Nombre" type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" value="{{ old('Nombre') }}" required autocomplete="Nombre" autofocus>
                    @error('Nombre')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <button type="submit" class="btn-submit">
                {{ __('GUARDAR') }}
            </button>

        </div>
    </form>
</div>
@endauth
@endsection