@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form method="POST" action="{{route('programas.store')}}" class="form">        
            
        <div class="form-header"><br>
            <h1 class="form-tittle">{{ __('CREAR PROGRAMA') }}</h1>
        </div>

        <div class="card-body">            
            @csrf                               

            <div class="form-group row">
                <label for="nombre" class="col-md-4 col-form-label">{{ __('Nombre') }}</label>
                <div class="col-md-8">
                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>  

            <div class="form-group row">
                <label for="encargado" class="col-md-4 col-form-label">{{ __('Encargado') }}</label>
                <div class="col-md-8">
                    
                    <select id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="encargado" value="{{ old('encargado') }}" required autocomplete="encargado" autofocus>
                    <option value="null">Seleccione</option>
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
                <label for="descripcion" class="col-md-4 col-form-label">{{ __('Descripción') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus></textarea>

                    @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
            </div>

            <div class="form-group row">
                <label for="encargado" class="col-md-4 col-form-label">{{ __('Especialidad') }}</label>
                <div class="col-md-8">
                    
                    <select id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="especialidad" value="{{ old('encargado') }}" required autocomplete="encargado" autofocus>
                    <option value="null">Seleccione</option>
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
                <label for="agenda" class="col-md-4 col-form-label">{{ __('Agenda') }}</label>
                    <div class="col-md-8">
                        <input class="form-control @error('agenda') is-invalid @enderror" name="agenda" value="{{ old('agenda') }}" type="date">                                        
                    </div>                           
            </div><br>
            
            <button type="submit" class="btn-submit">
                {{ __('Agendar') }}
            </button>           

        </div>
    </form>
</div>
@endsection
