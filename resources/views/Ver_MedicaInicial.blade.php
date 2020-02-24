@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Test Delta de {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
                <div class="card-header">Realizado por {{$medica_inicial->encargado_->nombres}} {{$medica_inicial->encargado_->apellidos }} </div>
                
                <div class="card-body">
                    <form method="POST" action="{{route('medica_inicial.store')}}">
                    <fieldset disabled>
                        @csrf
                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $nuevoCliente->nombres }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>
                    
                        <h4> Evaluación médica</h4>

                        <div class="form-group row">
                            <label for="antecedentes_patologicos" class="col-md-4 col-form-label text-md-right">{{ __('Antecedentes patológicos') }}</label>
                            <div class="col-md-6">
                                <Textarea id="antecedentes_patologicas" type="text" class="form-control @error('antecedentes_patologicos') is-invalid @enderror" name="antecedentes_patologicos" value="{{ old('antecedentes_patologicos') }}">{{$medica_inicial->antecedentes_patologicos}}</textarea>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="morbilidad_actual" class="col-md-4 col-form-label text-md-right">{{ __('Morbilidad Actual') }}</label>
                            <div class="col-md-6">
                                <Textarea id="morbilidad_actual" type="text" class="form-control @error('morbilidad_actual') is-invalid @enderror" name="morbilidad_actual" value="{{ old('morbilidad_actual') }}">{{$medica_inicial->morbilidad_actual}}</textarea>
                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="consumo_medicinas" class="col-md-4 col-form-label text-md-right">{{ __('Consumo actual de medicinas') }}</label>
                            <div class="col-md-6">
                                <Textarea id="consumo_medicinas" type="text" class="form-control @error('consumo_medicinas') is-invalid @enderror" name="consumo_medicinas" value="{{ old('consumo_medicinas') }}">{{$medica_inicial->consumo_medicinas}}</textarea>
                                @error('consumo_medicinas')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="signos_vitales" class="col-md-4 col-form-label text-md-right">{{ __('Signos vitales: (TA, FC, SpO2, Talla, Peso)') }}</label>
                            <div class="col-md-6">
                                <Textarea id="signos_vitales" type="text" class="form-control @error('signos_vitales') is-invalid @enderror" name="signos_vitales" value="{{ old('signos_vitales') }}">{{$medica_inicial->signos_vitales}}</textarea>
                                @error('signos_vitales')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="resumen_fisico" class="col-md-4 col-form-label text-md-right">{{ __('Resumen del examen físico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="resumen_fisico" type="text" class="form-control @error('resumen_fisico') is-invalid @enderror" name="resumen_fisico" value="{{ old('resumen_fisico') }}">{{$medica_inicial->resumen_fisico}}</textarea>
                                @error('resumen_fisico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="diagnostico" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico" value="{{ old('diagnostico') }}">{{$medica_inicial->diagnostico}}</textarea>
                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="conducta" class="col-md-4 col-form-label text-md-right">{{ __('Conducta') }}</label>
                            <div class="col-md-6">
                                <Textarea id="conducta" type="text" class="form-control @error('conducta') is-invalid @enderror" name="conducta" value="{{ old('conducta') }}">{{$medica_inicial->conducta}}</textarea>
                                @error('conducta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

         
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
