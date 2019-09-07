@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('programas.update', $programa->id)}}">
                        @csrf
                        @method('PUT')                               

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $programa->nombre }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="encargado" class="col-md-4 col-form-label text-md-right">{{ __('Encargado') }}</label>
                            <div class="col-md-6">
                                
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
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $programa->descripcion }}" required autocomplete="descripcion" autofocus>{{ $programa->descripcion }}</textarea>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidad" class="col-md-4 col-form-label text-md-right">{{ __('Especialidad') }}</label>
                            <div class="col-md-6">
                                
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
                            <label for="agenda" class="col-md-4 col-form-label text-md-right">{{ __('Agenda') }}</label>
                                <div class="col-md-6">
                                    <input class="form-control @error('agenda') is-invalid @enderror" name="agenda" value="{{ $programa->agenda }}" type="date">                                        
                                </div>                           
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
