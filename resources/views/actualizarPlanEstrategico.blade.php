@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div><br><br>

<div class="container">
    <form method="POST" class="form" action="{{route('estrategico.update', $plan->id)}}">
        
        <div class="form-header">           
            <h1 class="form-tittle">{{ __('ACTUALIZAR PLAN ESTRATÉGICO') }}</h1>
        </div>
      
        <div class="card-body">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="titulo" class="col-md-3 col-form-label">{{ __('Título') }}</label>
                <div class="col-md-9">
                    <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ $plan->titulo }}" required autocompleta = "titulo" autofocus>
                    @error('titulo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-3 col-form-label">{{ __('Descripción') }}</label>
                <div class="col-md-9">
                    <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $plan->descripcion }}" required autocompleta = "descripcion" autofocus></textarea>
                    @error('Descripción')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn-submit">
                {{ __('ACTUALIZAR PLAN') }}
            </button>

        </div>
    </form>
</div>
@endauth

@endsection