@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form method="POST" class="form" action="{{route('valoraciones.store')}}">
    @if($encargados->rol=="Operador")
        <div class="form-header">           
        <div class="card-header form-tittle_">Valoración de {{$encargados->especialidad_->Nombre}} para :  {{$miembros->nombres}} {{$miembros->apellidos}}</div>
        </div>
    @else
    <div class="form-header">           
        <div class="card-header form-tittle_">Valoración para :  {{$miembros->nombres}} {{$miembros->apellidos}}</div>
        </div>
    @endif

      
        @csrf
        <div class="form-group row">            
            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $miembros->id }}" placeholder = "{{ $miembros->nombres }}" autofocus readonly="readonly">
        </div>

       
    
        <div class="form-group row">
            <label for="medica" class="col-md-4 col-form-label">{{ __('Descripción') }}</label>
            <div class="col-md-8">
                <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="medica" autofocus></textarea>
                @error('Descripción')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        @if($encargados->rol=="Operador")
            
                    
                    <div class="form-group row">
                        <label for="medica" class="col-md-4 col-form-label">{{ __('Encargado') }}</label>
                        <div class="col-md-8">
                            <input id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="encargado" value="{{ $encargados->nombres }}" placeholder = "{{ $encargados->nombres }}" autofocus readonly="readonly">
                        </div>
                    </div>
                            <div class="form-group row">
                                <label for="especialidad" class="col-md-4 col-form-label">{{ __('Especialidad') }}</label>
                                <div class="col-md-8">
                                    <input id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ $encargados->especialidad_->Nombre }}" placeholder = "{{ $encargados->especialidad }}" autofocus readonly="readonly">
                                    @error('especialidad')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                   
        @else
            <div class="form-group row">
                <label for="especialidad" class="col-md-4 col-form-label">{{ __('Especialidad') }}</label>
                <div class="col-md-8">            
                    <select id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ old('especialidad') }}"  autofocus>
                    <option value="{{ old('especialidad') }}">{{ old('especialidad') }}</option>
                        @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}">{{$especialidad->Nombre}}</option>
                        @endforeach()        
                    </select>

                    @error('cargo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        @endif<br>

        <button type="submit" class="btn-submit">
            {{ __('GUARDAR VALORACIÓN') }}
        </button>
        
    </form>
</div>
@endauth
@endsection
