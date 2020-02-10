@extends('layouts.app')

@section('content')
@auth
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EVALUACIÓN CENTRADA EN LA PEROSNA Y SEGUIMIENTO DEL ADULTO MAYOR') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('valoraciones.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="paciente" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="paciente" type="hidden" class="form-control @error('paciente') is-invalid @enderror" name="paciente" value="{{ $miembros->id }}" placeholder = "{{ $miembros->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $miembros->nombres }}" placeholder = "{{ $miembros->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <label for="perfil_medico" class="col-md-4 col-form-label text-md-right">{{ __('Perfil médico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="perfil_medico" type="text" class="form-control @error('perfil_medico') is-invalid @enderror" name="perfil_medico" value="{{ old('perfil_medico') }}" required autocomplete="perfil_medico" autofocus></textarea>
                                @error('perfil_medico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diagnostico_medico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico médico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="diagnostico_medico" type="text" class="form-control @error('diagnostico_medico') is-invalid @enderror" name="diagnostico_medico" value="{{ old('diagnostico_medico') }}" required autocomplete="medica" autofocus></textarea>
                                @error('diagnostico_medico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pronostico_medico" class="col-md-4 col-form-label text-md-right">{{ __('Pronóstico médico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="pronostico_medico" type="text" class="form-control @error('pronostico_medico') is-invalid @enderror" name="pronostico_medico" value="{{ old('pronostico_medico') }}" required autocomplete="pronostico_medico" autofocus></textarea>
                                @error('pronostico_medico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_medico" class="col-md-4 col-form-label text-md-right">{{ __('Objetivos médicos') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_medico" type="text" class="form-control @error('objetivos_medico') is-invalid @enderror" name="objetivos_medico" value="{{ old('objetivos_medico') }}" required autocomplete="objetivos_medico" autofocus></textarea>
                                @error('objetivos_medico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividades_medico" class="col-md-4 col-form-label text-md-right">{{ __('Actividades médico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_medico" type="text" class="form-control @error('actividades_medico') is-invalid @enderror" name="actividades_medico" value="{{ old('actividades_medico') }}" required autocomplete="actividades_medico" autofocus></textarea>
                                @error('actividades_medico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_medico" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones médico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion" type="text" class="form-control @error('observaciones_medico') is-invalid @enderror" name="observaciones_medico" value="{{ old('observaciones_medico') }}" required autocomplete="observaciones_medico" autofocus></textarea>
                                @error('observaciones_medico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_medico" class="col-md-4 col-form-label text-md-right">{{ __('Indicadores de evaluación nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_medico" type="text" class="form-control @error('ind_evaluacion_medico') is-invalid @enderror" name="ind_evaluacion_medico" value="{{ old('ind_evaluacion_medico') }}" required autocomplete="ind_evaluacion_medico" autofocus></textarea>
                                @error('ind_evaluacion_medico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perfil_nutricionista" class="col-md-4 col-form-label text-md-right">{{ __('Perfil nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="perfil_nutricionista" type="text" class="form-control @error('perfil_nutricionista') is-invalid @enderror" name="perfil_nutricionista" value="{{ old('perfil_nutricionista') }}" required autocomplete="perfil_nutricionista" autofocus></textarea>
                                @error('perfil_nutricionista')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diagnostico_nutricionista" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="diagnostico_nutricionista" type="text" class="form-control @error('diagnostico_nutricionista') is-invalid @enderror" name="diagnostico_nutricionista" value="{{ old('diagnostico_nutricionista') }}" required autocomplete="diagnostico_nutricionista" autofocus></textarea>
                                @error('diagnostico_nutricionista')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pronostico_nutricionista" class="col-md-4 col-form-label text-md-right">{{ __('Pronóstico nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="pronostico_nutricionista" type="text" class="form-control @error('pronostico_nutricionista') is-invalid @enderror" name="pronostico_nutricionista" value="{{ old('pronostico_nutricionista') }}" required autocomplete="pronostico_nutricionista" autofocus></textarea>
                                @error('pronostico_nutricionista')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_nutricionista" class="col-md-4 col-form-label text-md-right">{{ __('Objetivos nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_nutricionista" type="text" class="form-control @error('objetivos_nutricionista') is-invalid @enderror" name="descripcion" value="{{ old('objetivos_nutricionista') }}" required autocomplete="objetivos_nutricionista" autofocus></textarea>
                                @error('objetivos_nutricionista')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividades_nutricionista" class="col-md-4 col-form-label text-md-right">{{ __('Actividades nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_nutricionista" type="text" class="form-control @error('actividades_nutricionista') is-invalid @enderror" name="actividades_nutricionista" value="{{ old('actividades_nutricionista') }}" required autocomplete="actividades_nutricionista" autofocus></textarea>
                                @error('actividades_nutricionista')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_nutricionista" class="col-md-4 col-form-label text-md-right">{{ __('Indicadores de evaluación nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_nutricionista" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="ind_evaluacion_nutricionista" value="{{ old('ind_evaluacion_nutricionista') }}" required autocomplete="ind_evaluacion_nutricionista" autofocus></textarea>
                                @error('ind_evaluacion_nutricionista')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_nutricionista" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones nutricionista') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_nutricionista" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="observaciones_nutricionista" value="{{ old('observaciones_nutricionista') }}" required autocomplete="observaciones_nutricionista" autofocus></textarea>
                                @error('observaciones_nutricionista')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perfil_fisioterapeuta" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="perfil_fisioterapeuta" type="text" class="form-control @error('perfil_fisioterapeuta') is-invalid @enderror" name="perfil_fisioterapeuta" value="{{ old('perfil_fisioterapeuta') }}" required autocomplete="perfil_fisioterapeuta" autofocus></textarea>
                                @error('perfil_fisioterapeuta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diagnostico_fisioterapeuta" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="diagnostico_fisioterapeuta" type="text" class="form-control @error('diagnostico_fisioterapeuta') is-invalid @enderror" name="diagnostico_fisioterapeuta" value="{{ old('diagnostico_fisioterapeuta') }}" required autocomplete="diagnostico_fisioterapeuta" autofocus></textarea>
                                @error('diagnostico_fisioterapeuta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pronostico_fisioterapeuta" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="pronostico_fisioterapeuta" type="text" class="form-control @error('pronostico_fisioterapeuta') is-invalid @enderror" name="pronostico_fisioterapeuta" value="{{ old('pronostico_fisioterapeuta') }}" required autocomplete="pronostico_fisioterapeuta" autofocus></textarea>
                                @error('pronostico_fisioterapeuta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_fisioterapeuta" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_fisioterapeuta" type="text" class="form-control @error('objetivos_fisioterapeuta') is-invalid @enderror" name="objetivos_fisioterapeuta" value="{{ old('objetivos_fisioterapeuta') }}" required autocomplete="objetivos_fisioterapeuta" autofocus></textarea>
                                @error('objetivos_fisioterapeuta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="medica" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_fisioterapeuta" type="text" class="form-control @error('actividades_fisioterapeuta') is-invalid @enderror" name="actividades_fisioterapeuta" value="{{ old('actividades_fisioterapeuta') }}" required autocomplete="actividades_fisioterapeuta" autofocus></textarea>
                                @error('actividades_fisioterapeuta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_fisioterapeuta" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_fisioterapeuta" type="text" class="form-control @error('ind_evaluacion_fisioterapeuta') is-invalid @enderror" name="ind_evaluacion_fisioterapeuta" value="{{ old('ind_evaluacion_fisioterapeuta') }}" required autocomplete="ind_evaluacion_fisioterapeuta" autofocus></textarea>
                                @error('ind_evaluacion_fisioterapeuta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_fisioterapeuta" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_fisioterapeuta" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="observaciones_fisioterapeuta" value="{{ old('observaciones_fisioterapeuta') }}" required autocomplete="observaciones_fisioterapeuta" autofocus></textarea>
                                @error('observaciones_fisioterapeuta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perfil_psicologico" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="perfil_psicologico" type="text" class="form-control @error('perfil_psicologico') is-invalid @enderror" name="perfil_psicologico" value="{{ old('perfil_psicologico') }}" required autocomplete="perfil_psicologico" autofocus></textarea>
                                @error('perfil_psicologico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diagnostico_psicologico" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="diagnostico_psicologico" type="text" class="form-control @error('diagnostico_psicologico') is-invalid @enderror" name="descripcion" value="{{ old('diagnostico_psicologico') }}" required autocomplete="diagnostico_psicologico" autofocus></textarea>
                                @error('diagnostico_psicologico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pronostico_psicologico" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="pronostico_psicologico" type="text" class="form-control @error('pronostico_psicologico') is-invalid @enderror" name="pronostico_psicologico" value="{{ old('pronostico_psicologico') }}" required autocomplete="pronostico_psicologico" autofocus></textarea>
                                @error('pronostico_psicologico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_psicologico" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_psicologico" type="text" class="form-control @error('objetivos_psicologico') is-invalid @enderror" name="objetivos_psicologico" value="{{ old('objetivos_psicologico') }}" required autocomplete="objetivos_psicologico" autofocus></textarea>
                                @error('objetivos_psicologico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividades_psicologico" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_psicologico" type="text" class="form-control @error('actividades_psicologico') is-invalid @enderror" name="actividades_psicologico" value="{{ old('actividades_psicologico') }}" required autocomplete="actividades_psicologico" autofocus></textarea>
                                @error('actividades_psicologico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_psicologico" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_psicologico" type="text" class="form-control @error('ind_evaluacion_psicologico') is-invalid @enderror" name="ind_evaluacion_psicologico" value="{{ old('ind_evaluacion_psicologico') }}" required autocomplete="ind_evaluacion_psicologico" autofocus></textarea>
                                @error('ind_evaluacion_psicologico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_psicologico" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_psicologico" type="text" class="form-control @error('observaciones_psicologico') is-invalid @enderror" name="observaciones_psicologico" value="{{ old('observaciones_psicologico') }}" required autocomplete="observaciones_psicologico" autofocus></textarea>
                                @error('observaciones_psicologico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perfil_gerontologo" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="perfil_gerontologo" type="text" class="form-control @error('perfil_gerontologo') is-invalid @enderror" name="perfil_gerontologo" value="{{ old('perfil_gerontologo') }}" required autocomplete="perfil_gerontologo" autofocus></textarea>
                                @error('perfil_gerontologo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_gerontologo" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_gerontologo" type="text" class="form-control @error('objetivos_gerontologo') is-invalid @enderror" name="descripcion" value="{{ old('objetivos_gerontologo') }}" required autocomplete="objetivos_gerontologo" autofocus></textarea>
                                @error('objetivos_gerontologo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividades_gerontologo" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_gerontologo" type="text" class="form-control @error('actividades_gerontologo') is-invalid @enderror" name="actividades_gerontologo" value="{{ old('actividades_gerontologo') }}" required autocomplete="actividades_gerontologo" autofocus></textarea>
                                @error('actividades_gerontologo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_gerontologo" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_gerontologo" type="text" class="form-control @error('ind_evaluacion_gerontologo') is-invalid @enderror" name="ind_evaluacion_gerontologo" value="{{ old('ind_evaluacion_gerontologo') }}" required autocomplete="ind_evaluacion_gerontologo" autofocus></textarea>
                                @error('ind_evaluacion_gerontologo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_gerontologo" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_gerontologo" type="text" class="form-control @error('observaciones_gerontologo') is-invalid @enderror" name="observaciones_gerontologo" value="{{ old('observaciones_gerontologo') }}" required autocomplete="observaciones_gerontologo" autofocus></textarea>
                                @error('observaciones_gerontologo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perfil_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="perfil_recreacion" type="text" class="form-control @error('perfil_recreacion') is-invalid @enderror" name="perfil_recreacion" value="{{ old('perfil_recreacion') }}" required autocomplete="perfil_recreacion" autofocus></textarea>
                                @error('perfil_recreacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_recreacion" type="text" class="form-control @error('objetivos_recreacion') is-invalid @enderror" name="objetivos_recreacion" value="{{ old('objetivos_recreacion') }}" required autocomplete="objetivos_recreacion" autofocus></textarea>
                                @error('objetivos_recreacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividades_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_recreacion" type="text" class="form-control @error('actividades_recreacion') is-invalid @enderror" name="actividades_recreacion" value="{{ old('actividades_recreacion') }}" required autocomplete="actividades_recreacion" autofocus></textarea>
                                @error('actividades_recreacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_recreacion" type="text" class="form-control @error('ind_evaluacion_recreacion') is-invalid @enderror" name="ind_evaluacion_recreacion" value="{{ old('ind_evaluacion_recreacion') }}" required autocomplete="ind_evaluacion_recreacion" autofocus></textarea>
                                @error('ind_evaluacion_recreacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_recreacion" type="text" class="form-control @error('observaciones_recreacion') is-invalid @enderror" name="observaciones_recreacion" value="{{ old('observaciones_recreacion') }}" required autocomplete="observaciones_recreacion" autofocus></textarea>
                                @error('observaciones_recreacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_recreacion" type="text" class="form-control @error('observaciones_recreacion') is-invalid @enderror" name="observaciones_recreacion" value="{{ old('observaciones_recreacion') }}" required autocomplete="medica" autofocus></textarea>
                                @error('Descripción')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_religioso" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_religioso" type="text" class="form-control @error('objetivos_religioso') is-invalid @enderror" name="objetivos_religioso" value="{{ old('objetivos_religioso') }}" required autocomplete="objetivos_religioso" autofocus></textarea>
                                @error('objetivos_religioso')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividades_religioso" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_religioso" type="text" class="form-control @error('actividades_religioso') is-invalid @enderror" name="actividades_religioso" value="{{ old('actividades_religioso') }}" required autocomplete="actividades_religioso" autofocus></textarea>
                                @error('actividades_religioso')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_religioso" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_religioso" type="text" class="form-control @error('ind_evaluacion_religioso') is-invalid @enderror" name="ind_evaluacion_religioso" value="{{ old('ind_evaluacion_religioso') }}" required autocomplete="ind_evaluacion_religioso" autofocus></textarea>
                                @error('ind_evaluacion_religioso')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_religioso" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_religioso" type="text" class="form-control @error('observaciones_religioso') is-invalid @enderror" name="observaciones_religioso" value="{{ old('observaciones_religioso') }}" required autocomplete="observaciones_religioso" autofocus></textarea>
                                @error('Descripción')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perfil_enfermera" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="perfil_enfermera" type="text" class="form-control @error('perfil_enfermera') is-invalid @enderror" name="perfil_enfermera" value="{{ old('perfil_enfermera') }}" required autocomplete="perfil_enfermera" autofocus></textarea>
                                @error('perfil_enfermera')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="objetivos_enfermera" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="objetivos_enfermera" type="text" class="form-control @error('objetivos_enfermera') is-invalid @enderror" name="objetivos_enfermera" value="{{ old('objetivos_enfermera') }}" required autocomplete="objetivos_enfermera" autofocus></textarea>
                                @error('objetivos_enfermera')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="actividades_enfermera" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="actividades_enfermera" type="text" class="form-control @error('actividades_enfermera') is-invalid @enderror" name="actividades_enfermera" value="{{ old('actividades_enfermera') }}" required autocomplete="actividades_enfermera" autofocus></textarea>
                                @error('actividades_enfermera')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ind_evaluacion_enfermera" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="ind_evaluacion_enfermera" type="text" class="form-control @error('ind_evaluacion_enfermera') is-invalid @enderror" name="ind_evaluacion_enfermera" value="{{ old('ind_evaluacion_enfermera') }}" required autocomplete="ind_evaluacion_enfermera" autofocus></textarea>
                                @error('ind_evaluacion_enfermera')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones_enfermera" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="observaciones_enfermera" type="text" class="form-control @error('observaciones_enfermera') is-invalid @enderror" name="observaciones_enfermera" value="{{ old('observaciones_enfermera') }}" required autocomplete="observaciones_enfermera" autofocus></textarea>
                                @error('observaciones_enfermera')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    
                      


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection
