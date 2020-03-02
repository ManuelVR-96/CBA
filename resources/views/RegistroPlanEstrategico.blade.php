@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div><br>

<div class="container">
    <form method="POST" class="form" action="{{route('estrategico.store')}}">                
        <div class="form-header"><h1 class="form-tittle">{{ __('REGISTRO PLAN ESTRATÉGICO') }}</h1></div><br>
        <div class="card-body">
            @csrf
            <div class="form-group row">
                <label for="titulo" class="col-md-4 col-form-label">{{ __('Título') }}</label>
                <div class="col-md-8">
                    <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete = "titulo" autofocus>
                    @error('titulo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion" class="col-md-4 col-form-label">{{ __('Descripción') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocompleta = "descripcion" autofocus></textarea>
                    @error('Descripción')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div><br>

            <button type="submit" class="btn-submit">
                {{ __('GUARDAR PLAN ESTRATÉGICO') }}
            </button>

        </div>
    </form>
</div>
@endauth
@endsection