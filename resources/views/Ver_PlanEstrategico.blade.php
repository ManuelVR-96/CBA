@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
<form method="POST" class="form" action="{{route('estrategico.update', $plan->id)}}">
    @method('PUT')
        <div class="form-header">           
            <h1 class="form-tittle">{{ __('Plan estratégico') }}</h1>
        </div>
      
        <div class="card-body">
            @csrf

            <div class="form-group row">
                <label for="titulo" class="col-md-3 col-form-label">{{ __('Título') }}</label>
                <div class="col-md-8">
                    <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ $plan->titulo }}" required autocomplete = "titulo" autofocus>
                    @error('titulo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="descripcion" class="col-md-3 col-form-label">{{ __('Descripción') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $plan->descripcion }}" required autocompleta = "descripcion" autofocus>{{$plan->descripcion}}</textarea>
                    @error('Descripción')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="titulo" class="col-md-3 col-form-label">{{ __('Creado por') }}</label>
                <div class="col-md-8">
                    <input id="creador" type="text" class="form-control @error('creador') is-invalid @enderror" name="creador" value="{{ $plan->creador_->nombres }} {{$plan->creador_->apellidos}}" required autocomplete = "creador" autofocus readonly="True">
                    @error('creador')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="titulo" class="col-md-3 col-form-label">{{ __('Creado por') }}</label>
                <div class="col-md-8">
                    <input id="creador" type="text" class="form-control @error('creador') is-invalid @enderror" name="creador" value="{{ $plan->creador_->nombres }} {{$plan->creador_->apellidos}}" required autocomplete = "creador" autofocus readonly="True">
                    @error('creador')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn-submit">
                {{ __('Guardar') }}
            </button>

        </div>
    </form>
</div>
@endauth
<div class="gradient"></div>
@endsection