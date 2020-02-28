@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    
<form method="POST" class="form">
        <div class="form-header"> 
                  
            <h1 class="form-tittle">{{ __('Solicitud de revisión para') }}</h1>
        </div>
      
        <div class="card-body">
            @csrf
 
            <div class="form-group row">
                <label for="especialidad" class="col-md-3 col-form-label">{{ __('Especialidad') }}</label>
                <div class="col-md-8">            
                    <input id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ $notificacion->especialidad_->Nombre }}"  autofocus readonly>
                       
                </div>
            </div>


            <div class="form-group row">
                <label for="medica" class="col-md-3 col-form-label">{{ __('Descripción de la solicitud') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $notificacion->descripcion }}"  autofocus readonly>{{$notificacion->descripción}}</textarea>
                    @error('Descripción')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    

        </div>
    </form>
</div>
@endauth
<div class="gradient"></div>
@endsection