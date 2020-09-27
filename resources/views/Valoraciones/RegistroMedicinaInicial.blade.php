@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('medica_inicial.store')}}">
        <div class="card-header form-tittle_">Registro Evaluación Médica de:  {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
        <div class="card-body">
            @csrf
            <div class="form-group row">              
                <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
            </div>
            
            <div class="form-group row">
                <label for="antecedentes_patologicos" class="col-md-6 col-form-label ">{{ __('Antecedentes patológicos') }}</label>
                <div class="col-md-6">
                    <Textarea id="antecedentes_patologicas" type="text" class="form-control @error('antecedentes_patologicos') is-invalid @enderror" name="antecedentes_patologicos" value="{{ old('antecedentes_patologicos') }}"></textarea>
                    @error('antecedentes_patologicos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="morbilidad_actual" class="col-md-6 col-form-label ">{{ __('Morbilidad Actual') }}</label>
                <div class="col-md-6">
                    <Textarea id="morbilidad_actual" type="text" class="form-control @error('morbilidad_actual') is-invalid @enderror" name="morbilidad_actual" value="{{ old('morbilidad_actual') }}"></textarea>
                    @error('morbilidad_actual')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="consumo_medicinas" class="col-md-6 col-form-label ">{{ __('Consumo actual de medicinas') }}</label>
                <div class="col-md-6">
                    <Textarea id="consumo_medicinas" type="text" class="form-control @error('consumo_medicinas') is-invalid @enderror" name="consumo_medicinas" value="{{ old('consumo_medicinas') }}"></textarea>
                    @error('consumo_medicinas')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="signos_vitales" class="col-md-6 col-form-label ">{{ __('Signos vitales: (TA, FC, SpO2, Talla, Peso)') }}</label>
                <div class="col-md-6">
                    <Textarea id="signos_vitales" type="text" class="form-control @error('signos_vitales') is-invalid @enderror" name="signos_vitales" value="{{ old('signos_vitales') }}"></textarea>
                    @error('signos_vitales')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="resumen_fisico" class="col-md-6 col-form-label ">{{ __('Resumen del examen físico') }}</label>
                <div class="col-md-6">
                    <Textarea id="resumen_fisico" type="text" class="form-control @error('resumen_fisico') is-invalid @enderror" name="resumen_fisico" value="{{ old('resumen_fisico') }}"></textarea>
                    @error('resumen_fisico')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="diagnostico" class="col-md-6 col-form-label ">{{ __('Diagnóstico') }}</label>
                <div class="col-md-6">
                    <Textarea id="diagnostico" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico" value="{{ old('diagnostico') }}"></textarea>
                    @error('diagnostico')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="conducta" class="col-md-6 col-form-label ">{{ __('Conducta') }}</label>
                <div class="col-md-6">
                    <Textarea id="conducta" type="text" class="form-control @error('conducta') is-invalid @enderror" name="conducta" value="{{ old('conducta') }}"></textarea>
                    @error('conducta')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <button type="submit" class="btn-submit">
                {{ __('GUARDAR Y AGREGAR VALORACIÓN') }}
            </button>

        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection
