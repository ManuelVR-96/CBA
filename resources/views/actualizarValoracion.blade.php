@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario  de Valoración')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('valoraciones.update', $valoracion->id)}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">

                                <select id="miembro" type="text" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $valoracion->paciente }}" required autocomplete="miembro" autofocus>
                                <option value="{{$valoracion->paciente}}">{{$valoracion->miembro_->nombres}}</option>
                                  @foreach($miembros as $miembro)
                                    <option value="{{$miembro->id}}">{{$miembro->nombres}} </option>
                                  @endforeach()

                                @error('miembro')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}
                                  </strong>
                                  </span>
                                @enderror
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="encargado" class="col-md-4 col-form-label text-md-right">{{ __('Encargado') }}</label>
                            <div class="col-md-6">

                                <select id="encargado" type="text" class="form-control @error('encargado') is-invalid @enderror" name="encargado" value="{{$valoracion->encargado }}" required autocomplete="encargado" autofocus>
                                <option value="{{$valoracion->encargado}}">{{$valoracion->encargado_->nombres}}</option>
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
                            <label for="especialidad" class="col-md-4 col-form-label text-md-right">{{ __('Especialidad') }}</label>
                            <div class="col-md-6">

                                <select id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ old('especialidad') }}" required autocomplete="especialidad" autofocus>
                                <option value="{{ $valoracion->especialidad }}">{{ $valoracion->especialidad_->Nombre}}</option>
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
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus>{{ $valoracion->descripción }}</textarea>

                                @error('descripción')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
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
