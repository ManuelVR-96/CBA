@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form method="POST" action="{{route('valoraciones.store')}}" class="form">       
           
        <div class="form-header"><br>
            <img src="/../img/form.png" class="center">
            <h1 class="form-tittle">{{ __('Registro Valoración') }}</h1>
        </div>

        <div class="card-body">            
            @csrf
            <div class="form-group row">
                <label for="miembro" class="col-md-3 col-form-label text-md-right">{{ __('Miembro') }}</label>
                <div class="col-md-8">
                    <select id="miembro" type="text" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ old('miembro') }}" required autocomplete="miembro" autofocus>
                    <option value="null">--------</option>
                        @foreach($miembros as $miembro)
                        <option value="{{$miembro->id}}">{{$miembro->nombres}}</option>
                        @endforeach()
                        @error('miembro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </select>
                </div>
            </div>

        
            <div class="form-group row">
                <label for="medica" class="col-md-3 col-form-label text-md-right">{{ __('Descripción') }}</label>
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
                <label for="medica" class="col-md-3 col-form-label text-md-right">{{ __('Encargado') }}</label>
                <div class="col-md-8">
                    <input id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="encargado" value="{{ $encargados->nombres }}" placeholder = "{{ $encargados->nombres }}" autofocus readonly="readonly">

                    @error('encargado')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="medica" class="col-md-3 col-form-label text-md-right">{{ __('Especialidad') }}</label>
                <div class="col-md-8">
                    <input id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ $encargados->cargo }}" placeholder = "{{ $encargados->especialidad }}" autofocus readonly="readonly">

                    @error('encargado')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            
            <button type="submit" class="btn-submit">
                {{ __('Guardar') }}
            </button>           

        </div>
    </form>
</div>
@endsection
