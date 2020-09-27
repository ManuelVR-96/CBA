@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form method="POST" class="form" action="{{route('programas.update', $programa->id)}}">      
        <div class="form-header"><h1 class="form-tittle">{{ __('EDITAR PROGRAMA AGENDADO') }}</div>
        <div class="card-body">
            @csrf
            @method('PUT')                               

            <div class="form-group row">
                <label for="nombre" class="col-md-5 col-form-label">{{ __('Nombre') }}</label>
                <div class="col-md-7">
                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $programa->nombre }}" required autocomplete="nombre" autofocus>

                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  

            <div class="form-group row">
                <label for="encargado" class="col-md-5 col-form-label">{{ __('Encargado') }}</label>
                <div class="col-md-7">                    
                    <select id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="encargado" value="{{ $programa->encargado }}" required autocomplete="encargado" autofocus>
                        <option value="{{$programa->encargado}}">{{$programa->encargado_->nombres}}</option>
                        @foreach($encargados as $encargado)
                        <option value="{{$encargado->id}}">{{$encargado->nombres}}</option>
                        @endforeach()
                        
                        @error('encargado')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </select>
                </div>
            </div>                       

            <div class="form-group row">
                <label for="descripcion" class="col-md-5 col-form-label">{{ __('Descripción') }}</label>
                <div class="col-md-7">
                    <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $programa->descripcion }}" required autocomplete="descripcion" autofocus>{{ $programa->descripcion }}</textarea>

                    @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                </div>
            </div>

            <div class="form-group row">
                <label for="especialidad" class="col-md-5 col-form-label">{{ __('Especialidad') }}</label>
                <div class="col-md-7">                    
                    <select id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ old('especialidad') }}" required autocomplete="especialidad" autofocus>
                        <option value="{{ $programa->especialidad }}">{{ $programa->especialidad_->Nombre}}</option>
                        @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}">{{$especialidad->Nombre}}</option>
                        @endforeach()

                        @error('especialidad')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </select>
                </div>
            </div>

            <div class="form-group row">                            
                <label for="agenda" class="col-md-5 col-form-label">{{ __('Agenda') }}</label>
                <div class="col-md-7">
                    <input class="form-control @error('agenda') is-invalid @enderror" name="agenda" value="{{ $programa->agenda }}" type="date">                                        
                </div>                           
            </div><br>

            <div class="form-group row mb-0">               
                <button type="submit" class="btn-submit">
                    {{ __('ACTUALIZAR PROGRAMA') }}
                </button>               
            </div>

        </div>
    </form>
</div>
@endsection
