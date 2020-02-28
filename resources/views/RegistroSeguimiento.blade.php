@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('seguimiento.update', $miembro->id)}}">
        <div class="card-header form-tittle_">{{ __('EVALUACIÓN CENTRADA EN LA PERSONA Y SEGUIMIENTO DEL ADULTO MAYOR') }}</div><br>
        <div class="card-body">
            @csrf
            <div>
                @method('PUT')                
                <input id="paciente" type="hidden" class="form-control @error('paciente') is-invalid @enderror" name="paciente" value="{{ $miembro->id }}" placeholder = "{{ $miembro->nombres }}" autofocus readonly="readonly">
            </div>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN MÉDICA') }}</h1></div><br>
                <div class="form-group row">
                    <label for="perfil_medico" class="col-md-5 col-form-label">{{ __('Perfil médico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_medico" type="text" class="form-control @error('perfil_medico') is-invalid @enderror" name="perfil_medico" value="{{ $Seguimiento->perfil_medico }}" autofocus>{{ $Seguimiento->perfil_medico }}</textarea>
                        @error('perfil_medico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diagnostico_medico" class="col-md-5 col-form-label">{{ __('Diagnóstico médico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="diagnostico_medico" type="text" class="form-control @error('diagnostico_medico') is-invalid @enderror" name="diagnostico_medico" value="{{ $Seguimiento->diagnostico_medico }}"  autofocus>{{ $Seguimiento->diagnostico_medico }}</textarea>
                        @error('diagnostico_medico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronostico_medico" class="col-md-5 col-form-label">{{ __('Pronóstico médico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="pronostico_medico" type="text" class="form-control @error('pronostico_medico') is-invalid @enderror" name="pronostico_medico" value="{{ $Seguimiento->pronostico_medico }}" autofocus>{{ $Seguimiento->pronostico_medico }}</textarea>
                        @error('pronostico_medico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="objetivos_medico" class="col-md-5 col-form-label">{{ __('Objetivos médicos') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_medico" type="text" class="form-control @error('objetivos_medico') is-invalid @enderror" name="objetivos_medico" value="{{ $Seguimiento->objetivos_medico }}"  autofocus>{{ $Seguimiento->objetivos_medico }}</textarea>
                        @error('objetivos_medico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="actividades_medico" class="col-md-5 col-form-label">{{ __('Actividades médico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_medico" type="text" class="form-control @error('actividades_medico') is-invalid @enderror" name="actividades_medico" value="{{ $Seguimiento->actividades_medico }}" autofocus>{{ $Seguimiento->actividades_medico }}</textarea>
                        @error('actividades_medico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_medico" class="col-md-5 col-form-label">{{ __('Observaciones médico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="descripcion" type="text" class="form-control @error('observaciones_medico') is-invalid @enderror" name="observaciones_medico" value="{{ $Seguimiento->observaciones_medico }}"  autofocus>{{ $Seguimiento->observaciones_medico }}</textarea>
                        @error('observaciones_medico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_medico" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación médica') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_medico" type="text" class="form-control @error('ind_evaluacion_medico') is-invalid @enderror" name="ind_evaluacion_medico" value="{{ $Seguimiento->ind_evaluacion_medico }}"  autofocus>{{ $Seguimiento->ind_evaluacion_medico }}</textarea>
                        @error('ind_evaluacion_medico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div><br><br>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN NUTRICIONAL') }}</h1></div><br>
                <div class="form-group row">
                    <label for="perfil_nutricionista" class="col-md-5 col-form-label">{{ __('Perfil nutricionista') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_nutricionista" type="text" class="form-control @error('perfil_nutricionista') is-invalid @enderror" name="perfil_nutricionista" value="{{ $Seguimiento->perfil_nutricionista }}"  autofocus>{{ $Seguimiento->perfil_nutricionista }}</textarea>
                        @error('perfil_nutricionista')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diagnostico_nutricionista" class="col-md-5 col-form-label">{{ __('Diagnóstico nutricionista') }}</label>
                    <div class="col-md-7">
                        <Textarea id="diagnostico_nutricionista" type="text" class="form-control @error('diagnostico_nutricionista') is-invalid @enderror" name="diagnostico_nutricionista" value="{{ $Seguimiento->diagnostico_nutricionista }}"  autofocus>{{ $Seguimiento->diagnostico_nutricionista }}</textarea>
                        @error('diagnostico_nutricionista')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronostico_nutricionista" class="col-md-5 col-form-label">{{ __('Pronóstico nutricionista') }}</label>
                    <div class="col-md-7">
                        <Textarea id="pronostico_nutricionista" type="text" class="form-control @error('pronostico_nutricionista') is-invalid @enderror" name="pronostico_nutricionista" value="{{ $Seguimiento->pronostico_nutricionista }}" autofocus>{{ $Seguimiento->pronostico_nutricionista }}</textarea>
                        @error('pronostico_nutricionista')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="objetivos_nutricionista" class="col-md-5 col-form-label">{{ __('Objetivos nutricionista') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_nutricionista" type="text" class="form-control @error('objetivos_nutricionista') is-invalid @enderror" name="objetivos_nutricionista" value="{{ $Seguimiento->objetivos_nutricionista }}" autofocus>{{ $Seguimiento->objetivos_nutricionista }}</textarea>
                        @error('objetivos_nutricionista')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="actividades_nutricionista" class="col-md-5 col-form-label">{{ __('Actividades nutricionista') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_nutricionista" type="text" class="form-control @error('actividades_nutricionista') is-invalid @enderror" name="actividades_nutricionista" value="{{ $Seguimiento->actividades_nutricionista }}" autofocus>{{ $Seguimiento->actividades_nutricionista }}</textarea>
                        @error('actividades_nutricionista')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_nutricionista" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación nutricionista') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_nutricionista" type="text" class="form-control @error('ind_evaluacion_nutricionista') is-invalid @enderror" name="ind_evaluacion_nutricionista" value="{{ $Seguimiento->ind_evaluacion_nutricionista }}"  autofocus>{{ $Seguimiento->ind_evaluacion_nutricionista }}</textarea>
                        @error('ind_evaluacion_nutricionista')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_nutricionista" class="col-md-5 col-form-label">{{ __('Observaciones nutricionista') }}</label>
                    <div class="col-md-7">
                        <Textarea id="observaciones_nutricionista" type="text" class="form-control @error('observaciones_nutricionista') is-invalid @enderror" name="observaciones_nutricionista" value="{{ $Seguimiento->observaciones_nutricionista }}" autofocus>{{ $Seguimiento->observaciones_nutricionista }}</textarea>
                        @error('observaciones_nutricionista')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div><br><br>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN FISIOTERAPIA') }}</h1></div><br>        
                <div class="form-group row">
                    <label for="perfil_fisioterapeuta" class="col-md-5 col-form-label">{{ __('Perfil fisioterapeuta') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_fisioterapeuta" type="text" class="form-control @error('perfil_fisioterapeuta') is-invalid @enderror" name="perfil_fisioterapeuta" value="{{ $Seguimiento->perfil_fisioterapeuta }}" autofocus>{{ $Seguimiento->perfil_fisioterapeuta }}</textarea>
                        @error('perfil_fisioterapeuta')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diagnostico_fisioterapeuta" class="col-md-5 col-form-label">{{ __('Diagnóstico fisioterapeuta') }}</label>
                    <div class="col-md-7">
                        <Textarea id="diagnostico_fisioterapeuta" type="text" class="form-control @error('diagnostico_fisioterapeuta') is-invalid @enderror" name="diagnostico_fisioterapeuta" value="{{ $Seguimiento->diagnostico_fisioterapeuta }}" autofocus>{{ $Seguimiento->diagnostico_fisioterapeuta }}</textarea>
                        @error('diagnostico_fisioterapeuta')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronostico_fisioterapeuta" class="col-md-5 col-form-label">{{ __('Pronóstico fisioterapeuta') }}</label>
                    <div class="col-md-7">
                        <Textarea id="pronostico_fisioterapeuta" type="text" class="form-control @error('pronostico_fisioterapeuta') is-invalid @enderror" name="pronostico_fisioterapeuta" value="{{ $Seguimiento->pronostico_fisioterapeuta }}" autofocus>{{ $Seguimiento->pronostico_fisioterapeuta }}</textarea>
                        @error('pronostico_fisioterapeuta')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="objetivos_fisioterapeuta" class="col-md-5 col-form-label">{{ __('Objetivos fisioterapeuta') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_fisioterapeuta" type="text" class="form-control @error('objetivos_fisioterapeuta') is-invalid @enderror" name="objetivos_fisioterapeuta" value="{{ $Seguimiento->objetivos_fisioterapeuta }}" autofocus>{{ $Seguimiento->objetivos_fisioterapeuta }}</textarea>
                        @error('objetivos_fisioterapeuta')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="medica" class="col-md-5 col-form-label">{{ __('Actividades fisioterapeuta') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_fisioterapeuta" type="text" class="form-control @error('actividades_fisioterapeuta') is-invalid @enderror" name="actividades_fisioterapeuta" value="{{ $Seguimiento->actividades_fisioterapeuta }}" autofocus>{{ $Seguimiento->actividades_fisioterapeuta }}</textarea>
                        @error('actividades_fisioterapeuta')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_fisioterapeuta" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación fisioterapeuta') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_fisioterapeuta" type="text" class="form-control @error('ind_evaluacion_fisioterapeuta') is-invalid @enderror" name="ind_evaluacion_fisioterapeuta" value="{{ $Seguimiento->ind_evaluacion_fisioterapeuta }}"  autofocus>{{ $Seguimiento->ind_evaluacion_fisioterapeuta }}</textarea>
                        @error('ind_evaluacion_fisioterapeuta')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_fisioterapeuta" class="col-md-5 col-form-label">{{ __('Observaciones fisioterapeuta') }}</label>
                    <div class="col-md-7">
                        <Textarea id="observaciones_fisioterapeuta" type="text" class="form-control @error('observaciones_fisioterapeuta') is-invalid @enderror" name="observaciones_fisioterapeuta" value="{{ $Seguimiento->observaciones_fisioterapeuta }}"  autofocus>{{ $Seguimiento->observaciones_fisioterapeuta }}</textarea>
                        @error('observaciones_fisioterapeuta')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div><br><br>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN PSICOLÓGICA') }}</h1></div><br>        
                <div class="form-group row">
                    <label for="perfil_psicologico" class="col-md-5 col-form-label">{{ __('Perfil psicológico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_psicologico" type="text" class="form-control @error('perfil_psicologico') is-invalid @enderror" name="perfil_psicologico" value="{{ $Seguimiento->perfil_psicologico }}" autofocus>{{ $Seguimiento->perfil_psicologico }}</textarea>
                        @error('perfil_psicologico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diagnostico_psicologico" class="col-md-5 col-form-label">{{ __('Diagnóstico psicológico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="diagnostico_psicologico" type="text" class="form-control @error('diagnostico_psicologico') is-invalid @enderror" name="diagnostico_psicologico" value="{{ $Seguimiento->diagnostico_psicologico }}" autofocus>{{ $Seguimiento->diagnostico_psicologico }}</textarea>
                        @error('diagnostico_psicologico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pronostico_psicologico" class="col-md-5 col-form-label">{{ __('Pronóstico psicológico') }}</label>
                    <div class="col-md-7">
                        <Textarea id="pronostico_psicologico" type="text" class="form-control @error('pronostico_psicologico') is-invalid @enderror" name="pronostico_psicologico" value="{{ $Seguimiento->pronostico_psicologico }}"  autofocus>{{ $Seguimiento->pronostico_psicologico }}</textarea>
                        @error('pronostico_psicologico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="objetivos_psicologico" class="col-md-5 col-form-label">{{ __('Objetivos psicológicos') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_psicologico" type="text" class="form-control @error('objetivos_psicologico') is-invalid @enderror" name="objetivos_psicologico" value="{{ $Seguimiento->objetivos_psicologico }}"  autofocus>{{ $Seguimiento->objetivos_psicologico }}</textarea>
                        @error('objetivos_psicologico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="actividades_psicologico" class="col-md-5 col-form-label">{{ __('Actividades Psicológicas') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_psicologico" type="text" class="form-control @error('actividades_psicologico') is-invalid @enderror" name="actividades_psicologico" value="{{ $Seguimiento->actividades_psicologico}}"  autofocus>{{ $Seguimiento->actividades_psicologico}}</textarea>
                        @error('actividades_psicologico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_psicologico" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación psicólogo') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_psicologico" type="text" class="form-control @error('ind_evaluacion_psicologico') is-invalid @enderror" name="ind_evaluacion_psicologico" value="{{ $Seguimiento->ind_evaluacion_psicologico }}" autofocus>{{ $Seguimiento->ind_evaluacion_psicologico }}</textarea>
                        @error('ind_evaluacion_psicologico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_psicologico" class="col-md-5 col-form-label">{{ __('Observaciones psicológicas') }}</label>
                    <div class="col-md-7">
                        <Textarea id="observaciones_psicologico" type="text" class="form-control @error('observaciones_psicologico') is-invalid @enderror" name="observaciones_psicologico" value="{{ $Seguimiento->observaciones_psicologico }}"  autofocus>{{ $Seguimiento->observaciones_psicologico }}</textarea>
                        @error('observaciones_psicologico')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div><br><br>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN GERONTOLOGÍA') }}</h1></div><br>       
                <div class="form-group row">
                    <label for="perfil_gerontologo" class="col-md-5 col-form-label">{{ __('Perfil Gerontólogo') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_gerontologo" type="text" class="form-control @error('perfil_gerontologo') is-invalid @enderror" name="perfil_gerontologo" value="{{ $Seguimiento->perfil_gerontologo }}" autofocus>{{ $Seguimiento->perfil_gerontologo }}</textarea>
                        @error('perfil_gerontologo')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="objetivos_gerontologo" class="col-md-5 col-form-label">{{ __('Objetivos gerontólogo') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_gerontologo" type="text" class="form-control @error('objetivos_gerontologo') is-invalid @enderror" name="objetivos_gerontologo" value="{{ $Seguimiento->objetivos_gerontologo }}" autofocus>{{ $Seguimiento->objetivos_gerontologo }}</textarea>
                        @error('objetivos_gerontologo')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="actividades_gerontologo" class="col-md-5 col-form-label">{{ __('Actividades gerontólogo') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_gerontologo" type="text" class="form-control @error('actividades_gerontologo') is-invalid @enderror" name="actividades_gerontologo" value="{{ $Seguimiento->actividades_gerontologo }}" autofocus>{{ $Seguimiento->actividades_gerontologo }}</textarea>
                        @error('actividades_gerontologo')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_gerontologo" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación gerontólogo') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_gerontologo" type="text" class="form-control @error('ind_evaluacion_gerontologo') is-invalid @enderror" name="ind_evaluacion_gerontologo" value="{{ $Seguimiento->ind_evaluacion_gerontologo }}" autofocus>{{ $Seguimiento->ind_evaluacion_gerontologo }}</textarea>
                        @error('ind_evaluacion_gerontologo')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_gerontologo" class="col-md-5 col-form-label">{{ __('Observaciones gerontólogo') }}</label>
                    <div class="col-md-7">
                        <Textarea id="observaciones_gerontologo" type="text" class="form-control @error('observaciones_gerontologo') is-invalid @enderror" name="observaciones_gerontologo" value="{{ $Seguimiento->observaciones_gerontologo }}" autofocus>{{ $Seguimiento->observaciones_gerontologo }}</textarea>
                        @error('observaciones_gerontologo')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div><br><br>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN RECREACIONAL') }}</h1></div><br>       
                <div class="form-group row">
                    <label for="perfil_recreacion" class="col-md-5 col-form-label">{{ __('Perfil recreación') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_recreacion" type="text" class="form-control @error('perfil_recreacion') is-invalid @enderror" name="perfil_recreacion" value="{{ $Seguimiento->perfil_recreacion }}" autofocus>{{ $Seguimiento->perfil_recreacion }}</textarea>
                        @error('perfil_recreacion')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="objetivos_recreacion" class="col-md-5 col-form-label">{{ __('Objetivos recreación') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_recreacion" type="text" class="form-control @error('objetivos_recreacion') is-invalid @enderror" name="objetivos_recreacion" value="{{ $Seguimiento->objetivos_recreacion }}" autofocus>{{ $Seguimiento->objetivos_recreacion }}</textarea>
                        @error('objetivos_recreacion')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="actividades_recreacion" class="col-md-5 col-form-label">{{ __('Actividades recreación') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_recreacion" type="text" class="form-control @error('actividades_recreacion') is-invalid @enderror" name="actividades_recreacion" value="{{ $Seguimiento->actividades_recreacion }}" autofocus>{{ $Seguimiento->actividades_recreacion }}</textarea>
                        @error('actividades_recreacion')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_recreacion" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación recreación') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_recreacion" type="text" class="form-control @error('ind_evaluacion_recreacion') is-invalid @enderror" name="ind_evaluacion_recreacion" value="{{ $Seguimiento->ind_evaluacion_recreacion }}"  autofocus>{{ $Seguimiento->ind_evaluacion_recreacion }}</textarea>
                        @error('ind_evaluacion_recreacion')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_recreacion" class="col-md-5 col-form-label">{{ __('Observaciones recreación') }}</label>
                    <div class="col-md-7">
                        <Textarea id="observaciones_recreacion" type="text" class="form-control @error('observaciones_recreacion') is-invalid @enderror" name="observaciones_recreacion" value="{{ $Seguimiento->observaciones_recreacion }}"  autofocus>{{ $Seguimiento->observaciones_recreacion }}</textarea>
                        @error('observaciones_recreacion')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="perfil_religioso" class="col-md-5 col-form-label">{{ __('Perfil religioso') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_religioso" type="text" class="form-control @error('perfil_religioso') is-invalid @enderror" name="perfil_religioso" value="{{ $Seguimiento->perfil_religioso}}" autofocus>{{ $Seguimiento->perfil_religioso}}</textarea>
                        @error('perfil_religioso')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div><br><br>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN RELIGIOSA') }}</h1></div><br>      
                <div class="form-group row">
                    <label for="objetivos_religioso" class="col-md-5 col-form-label">{{ __('Objetivos religiosos') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_religioso" type="text" class="form-control @error('objetivos_religioso') is-invalid @enderror" name="objetivos_religioso" value="{{ $Seguimiento->objetivos_religioso }}" autofocus>{{ $Seguimiento->objetivos_religioso }}</textarea>
                        @error('objetivos_religioso')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="actividades_religioso" class="col-md-5 col-form-label">{{ __('Actividades religiosas') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_religioso" type="text" class="form-control @error('actividades_religioso') is-invalid @enderror" name="actividades_religioso" value="{{ $Seguimiento->actividades_religioso }}"  autofocus>{{ $Seguimiento->actividades_religioso }}</textarea>
                        @error('actividades_religioso')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_religioso" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación religiosa') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_religioso" type="text" class="form-control @error('ind_evaluacion_religioso') is-invalid @enderror" name="ind_evaluacion_religioso" value="{{ $Seguimiento->ind_evaluacion_religioso }}"  autofocus>{{ $Seguimiento->ind_evaluacion_religioso }}</textarea>
                        @error('ind_evaluacion_religioso')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_religioso" class="col-md-5 col-form-label">{{ __('Observaciones religiosa') }}</label>
                    <div class="col-md-7">
                        <Textarea id="observaciones_religioso" type="text" class="form-control @error('observaciones_religioso') is-invalid @enderror" name="observaciones_religioso" value="{{ $Seguimiento->observaciones_religioso }}" autofocus>{{ $Seguimiento->observaciones_religioso }}</textarea>
                        @error('Descripción')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div><br><br>

            <div class="card-header">
                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN ENFERMERIA') }}</h1></div><br>      
                <div class="form-group row">
                    <label for="perfil_enfermera" class="col-md-5 col-form-label">{{ __('Perfil enfermera') }}</label>
                    <div class="col-md-7">
                        <Textarea id="perfil_enfermera" type="text" class="form-control @error('perfil_enfermera') is-invalid @enderror" name="perfil_enfermera" value="{{ $Seguimiento->perfil_enfermera }}"  autofocus>{{ $Seguimiento->perfil_enfermera }}</textarea>
                        @error('perfil_enfermera')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="objetivos_enfermera" class="col-md-5 col-form-label">{{ __('Objetivos enfermera') }}</label>
                    <div class="col-md-7">
                        <Textarea id="objetivos_enfermera" type="text" class="form-control @error('objetivos_enfermera') is-invalid @enderror" name="objetivos_enfermera" value="{{ $Seguimiento->objetivos_enfermera }}" autofocus>{{ $Seguimiento->objetivos_enfermera }}</textarea>
                        @error('objetivos_enfermera')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="actividades_enfermera" class="col-md-5 col-form-label">{{ __('Actividades enfermera') }}</label>
                    <div class="col-md-7">
                        <Textarea id="actividades_enfermera" type="text" class="form-control @error('actividades_enfermera') is-invalid @enderror" name="actividades_enfermera" value="{{ $Seguimiento->actividades_enfermera }}" autofocus>{{ $Seguimiento->actividades_enfermera }}</textarea>
                        @error('actividades_enfermera')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ind_evaluacion_enfermera" class="col-md-5 col-form-label">{{ __('Indicadores de evaluación enfermera') }}</label>
                    <div class="col-md-7">
                        <Textarea id="ind_evaluacion_enfermera" type="text" class="form-control @error('ind_evaluacion_enfermera') is-invalid @enderror" name="ind_evaluacion_enfermera" value="{{ $Seguimiento->ind_evaluacion_enfermera }}" autofocus>{{ $Seguimiento->ind_evaluacion_enfermera }}</textarea>
                        @error('ind_evaluacion_enfermera')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones_enfermera" class="col-md-5 col-form-label">{{ __('Observaciones enfermera') }}</label>
                    <div class="col-md-7">
                        <Textarea id="observaciones_enfermera" type="text" class="form-control @error('observaciones_enfermera') is-invalid @enderror" name="observaciones_enfermera" value="{{ $Seguimiento->observaciones_enfermera }}"  autofocus>{{ $Seguimiento->observaciones_enfermera }}</textarea>
                        @error('observaciones_enfermera')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <br><button type="submit" class="btn-submit">
                {{ __('GUARDAR REGISTRO SEGUIMIENTO') }}
            </button>
    
        </div>
    </form>
</div>
@endauth
<div class="gradient"></div>
@endsection
