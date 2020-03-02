@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form method="POST" class="form" action="{{route('valoraciones.update', $valoracion->id)}}">
        <div class="form-header"><h1 class="form-tittle">{{ __('EDITAR REGISTRO VALORACIÓN') }}</div>
        <div class="card-body">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="miembro" class="col-md-4 col-form-label">{{ __('Miembro') }}</label>
                <div class="col-md-8">
                <input id="miembro" type="text" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $valoracion->miembro_->nombres }}" autofocus readonly="readonly">
                @error('Miembro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
                    
            <div class="form-group row">
                <label for="descripcion" class="col-md-4 col-form-label">{{ __('Descripción') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="medica" autofocus></textarea>
                    @error('Descripción')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="encargado" class="col-md-4 col-form-label">{{ __('Realizada por: ') }}</label>
                <div class="col-md-8">
                    <input id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="encargado" value="{{ $valoracion->encargado_->nombres }}" autofocus readonly="readonly">
                    @error('encargado')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="especialidad" class="col-md-4 col-form-label">{{ __('Especialidad') }}</label>
                <div class="col-md-8">
                    <input id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ $valoracion->especialidad_->Nombre }}"  autofocus readonly="readonly">
                    @error('encargado')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="actualizado" class="col-md-4 col-form-label">{{ __('Actualizada por: ') }}</label>
                <div class="col-md-8">
                    <input id="actualizado" type="text" class="form-control @error('actualizado') is-invalid @enderror" name="actualizado" value="{{ $encargados->nombres }}" autofocus readonly="readonly">
                    @error('encargado')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div><br>

            <div class="form-group row mb-0">                
                <button type="submit" class="btn-submit">
                    {{ __('GUARDAR VALORACIÓN') }}
                </button>                
            </div>

        </div>
    </form>
</div>
@endsection
