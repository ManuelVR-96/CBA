@extends('layouts.app')

@section('content')
@auth

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('seguimiento.store')}}">
        <div class="card-header form-tittle_">{{ __('EVALUACIÓN CENTRADA EN LA PERSONA Y SEGUIMIENTO DEL ADULTO MAYOR') }}</div>
        <div class="card-body">
            <fieldset disabled>
                @csrf
                <div class="form-group row">                
                    <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                </div>
            
                <div class="card-header">
                    <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN MÉDICA') }}</h1></div><br>
                    <div class="form-group row">
                        <label for="perfil_medico" class="col-md-5 col-form-label">{{ __('Perfil Médico') }}</label>
                        <div class="col-md-7">
                            <Textarea id="perfil_medico" type="text" class="form-control @error('perfil_medico') is-invalid @enderror" name="perfil_medico" value="{{ $seguimiento->perfil_medico }}">{{$seguimiento->perfil_medico}}</textarea>
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
                            <Textarea id="diagnostico_medico" type="text" class="form-control @error('diagnostico_medico') is-invalid @enderror" name="diagnostico_medico" value="{{ $seguimiento->diagnostico_medico }}">{{ $seguimiento->diagnostico_medico }}</textarea>
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
                            <Textarea id="pronostico_medico" type="text" class="form-control @error('pronostico_medico') is-invalid @enderror" name="pronostico_medico" value="{{ $seguimiento->pronostico_medico }}">{{ $seguimiento->pronostico_medico }}</textarea>
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
                            <Textarea id="objetivos_medico" type="text" class="form-control @error('objetivos_medico') is-invalid @enderror" name="objetivos_medico" value="{{ $seguimiento->objetivos_medico }}">{{ $seguimiento->objetivos_medico }}</textarea>
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
                            <Textarea id="actividades_medico" type="text" class="form-control @error('actividades_medico') is-invalid @enderror" name="actividades_medico" value="{{ $seguimiento->actividades_medico }}">{{ $seguimiento->actividades_medico }}</textarea>
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
                            <Textarea id="descripcion" type="text" class="form-control @error('observaciones_medico') is-invalid @enderror" name="observaciones_medico" value="{{ $seguimiento->observaciones_medico }}">{{ $seguimiento->observaciones_medico }}</textarea>
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
                            <Textarea id="ind_evaluacion_medico" type="text" class="form-control @error('ind_evaluacion_medico') is-invalid @enderror" name="ind_evaluacion_medico" value="{{ $seguimiento->ind_evaluacion_medico }}">{{ $seguimiento->ind_evaluacion_medico }}</textarea>
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
                        <label for="perfil_nutricionista" class="col-md-5 col-form-label">{{ __('Perfil Nutricionista') }}</label>
                        <div class="col-md-7">
                            <Textarea id="perfil_nutricionista" type="text" class="form-control @error('perfil_nutricionista') is-invalid @enderror" name="perfil_nutricionista" value="{{ $seguimiento->perfil_nutricionista }}">{{ $seguimiento->perfil_nutricionista }}</textarea>
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
                            <Textarea id="diagnostico_nutricionista" type="text" class="form-control @error('diagnostico_nutricionista') is-invalid @enderror" name="diagnostico_nutricionista" value="{{ $seguimiento->diagnostico_nutricionista }}">{{ $seguimiento->diagnostico_nutricionista }}</textarea>
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
                            <Textarea id="pronostico_nutricionista" type="text" class="form-control @error('pronostico_nutricionista') is-invalid @enderror" name="pronostico_nutricionista"value="{{ $seguimiento->pronostico_nutricionista }}">{{ $seguimiento->pronostico_nutricionista }}</textarea>
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
                            <Textarea id="objetivos_nutricionista" type="text" class="form-control @error('objetivos_nutricionista') is-invalid @enderror" name="objetivos_nutricionista" value="{{ $seguimiento->objetivos_nutricionista }}">{{ $seguimiento->objetivos_nutricionista }}</textarea>
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
                            <Textarea id="actividades_nutricionista" type="text" class="form-control @error('actividades_nutricionista') is-invalid @enderror" name="actividades_nutricionista" value="{{ $seguimiento->actividades_nutricionista }}">{{ $seguimiento->actividades_nutricionista }}</textarea>
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
                            <Textarea id="ind_evaluacion_nutricionista" type="text" class="form-control @error('ind_evaluacion_nutricionista') is-invalid @enderror" name="ind_evaluacion_nutricionista" value="{{ $seguimiento->ind_evaluacion_nutricionista }}">{{ $seguimiento->ind_evaluacion_nutricionista }}</textarea>
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
                            <Textarea id="observaciones_nutricionista" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="observaciones_nutricionista" value="{{ $seguimiento->observaciones_nutricionista }}">{{ $seguimiento->observaciones_nutricionista }}</textarea>
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
                        <label for="perfil_fisioterapeuta" class="col-md-5 col-form-label">{{ __('Perfil Fisioterapeuta') }}</label>
                        <div class="col-md-7">
                            <Textarea id="perfil_fisioterapeuta" type="text" class="form-control @error('perfil_fisioterapeuta') is-invalid @enderror" name="perfil_fisioterapeuta" value="{{ $seguimiento->perfil_fisioterapeuta }}">{{ $seguimiento->perfil_fisioterapeuta }}</textarea>
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
                            <Textarea id="diagnostico_fisioterapeuta" type="text" class="form-control @error('diagnostico_fisioterapeuta') is-invalid @enderror" name="diagnostico_fisioterapeuta" value="{{ $seguimiento->diagnostico_fisioterapeuta }}">{{ $seguimiento->diagnostico_fisioterapeuta }}</textarea>
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
                            <Textarea id="pronostico_fisioterapeuta" type="text" class="form-control @error('pronostico_fisioterapeuta') is-invalid @enderror" name="pronostico_fisioterapeuta" value="{{ $seguimiento->pronostico_fisioterapeuta }}">{{ $seguimiento->pronostico_fisioterapeuta }}</textarea>
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
                            <Textarea id="objetivos_fisioterapeuta" type="text" class="form-control @error('objetivos_fisioterapeuta') is-invalid @enderror" name="objetivos_fisioterapeuta" value="{{ $seguimiento->objetivos_fisioterapeuta }}">{{ $seguimiento->objetivos_fisioterapeuta }}</textarea>
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
                            <Textarea id="actividades_fisioterapeuta" type="text" class="form-control @error('actividades_fisioterapeuta') is-invalid @enderror" name="actividades_fisioterapeuta" value="{{ $seguimiento->actividades_fisioterapeuta }}">{{ $seguimiento->actividades_fisioterapeuta }}</textarea>
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
                            <Textarea id="ind_evaluacion_fisioterapeuta" type="text" class="form-control @error('ind_evaluacion_fisioterapeuta') is-invalid @enderror" name="ind_evaluacion_fisioterapeuta" value="{{ $seguimiento->ind_evaluacion_fisioterapeuta }}">{{ $seguimiento->ind_evaluacion_fisioterapeuta }}</textarea>
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
                            <Textarea id="observaciones_fisioterapeuta" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="observaciones_fisioterapeuta" value="{{ $seguimiento->observaciones_fisioterapeuta }}">{{ $seguimiento->observaciones_fisioterapeuta }}</textarea>
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
                        <label for="perfil_psicologico" class="col-md-5 col-form-label">{{ __('Perfil Psicológico') }}</label>
                        <div class="col-md-7">
                            <Textarea id="perfil_psicologico" type="text" class="form-control @error('perfil_psicologico') is-invalid @enderror" name="perfil_psicologico" value="{{ $seguimiento->perfil_psicologico }}">{{ $seguimiento->perfil_psicologico }}</textarea>
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
                            <Textarea id="diagnostico_psicologico" type="text" class="form-control @error('diagnostico_psicologico') is-invalid @enderror" name="diagnostico_psicologico" value="{{ $seguimiento->diagnostico_psicologico }}">{{ $seguimiento->diagnostico_psicologico }}</textarea>
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
                            <Textarea id="pronostico_psicologico" type="text" class="form-control @error('pronostico_psicologico') is-invalid @enderror" name="pronostico_psicologico" value="{{ $seguimiento->pronostico_psicologico }}">{{ $seguimiento->pronostico_psicologico }}</textarea>
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
                            <Textarea id="objetivos_psicologico" type="text" class="form-control @error('objetivos_psicologico') is-invalid @enderror" name="objetivos_psicologico" value="{{ $seguimiento->objetivos_psicologico }}">{{ $seguimiento->objetivos_psicologico }}</textarea>
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
                            <Textarea id="actividades_psicologico" type="text" class="form-control @error('actividades_psicologico') is-invalid @enderror" name="actividades_psicologico" value="{{ $seguimiento->actividades_psicologico }}">{{ $seguimiento->actividades_psicologico }}</textarea>
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
                            <Textarea id="ind_evaluacion_psicologico" type="text" class="form-control @error('ind_evaluacion_psicologico') is-invalid @enderror" name="ind_evaluacion_psicologico" value="{{ $seguimiento->ind_evaluacion_psicologico }}">{{ $seguimiento->ind_evaluacion_psicologico }}</textarea>
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
                            <Textarea id="observaciones_psicologico" type="text" class="form-control @error('observaciones_psicologico') is-invalid @enderror" name="observaciones_psicologico" value="{{ $seguimiento->observaciones_psicologico }}">{{ $seguimiento->observaciones_psicologico }}</textarea>
                            @error('observaciones_psicologico')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div><br><br>

                <div class="card-header">
                    <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN GERONTÓLOGIA') }}</h1></div><br>
                    <div class="form-group row">
                        <label for="perfil_gerontologo" class="col-md-5 col-form-label">{{ __('Perfil Gerontólogo') }}</label>
                        <div class="col-md-7">
                            <Textarea id="perfil_gerontologo" type="text" class="form-control @error('perfil_gerontologo') is-invalid @enderror" name="perfil_gerontologo" value="{{ $seguimiento->perfil_gerontologo }}">{{ $seguimiento->perfil_gerontologo }}</textarea>
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
                            <Textarea id="objetivos_gerontologo" type="text" class="form-control @error('objetivos_gerontologo') is-invalid @enderror" name="objetivos_gerontologo" value="{{ $seguimiento->objetivos_gerontologo }}">{{ $seguimiento->objetivos_gerontologo }}</textarea>
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
                            <Textarea id="actividades_gerontologo" type="text" class="form-control @error('actividades_gerontologo') is-invalid @enderror" name="actividades_gerontologo" value="{{ $seguimiento->actividades_gerontologo }}">{{ $seguimiento->actividades_gerontologo }}</textarea>
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
                            <Textarea id="ind_evaluacion_gerontologo" type="text" class="form-control @error('ind_evaluacion_gerontologo') is-invalid @enderror" name="ind_evaluacion_gerontologo" value="{{ $seguimiento->ind_evaluacion_gerontologo }}">{{ $seguimiento->ind_evaluacion_gerontologo }}</textarea>
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
                            <Textarea id="observaciones_gerontologo" type="text" class="form-control @error('observaciones_gerontologo') is-invalid @enderror" name="observaciones_gerontologo" value="{{ $seguimiento->observaciones_gerontologo }}">{{ $seguimiento->observaciones_gerontologo }}</textarea>
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
                            <Textarea id="perfil_recreacion" type="text" class="form-control @error('perfil_recreacion') is-invalid @enderror" name="perfil_recreacion" value="{{ $seguimiento->perfil_recreacion }}">{{ $seguimiento->perfil_recreacion }}</textarea>
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
                            <Textarea id="objetivos_recreacion" type="text" class="form-control @error('objetivos_recreacion') is-invalid @enderror" name="objetivos_recreacion" value="{{ $seguimiento->objetivos_recreacion }}">{{ $seguimiento->objetivos_recreacion }}</textarea>
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
                            <Textarea id="actividades_recreacion" type="text" class="form-control @error('actividades_recreacion') is-invalid @enderror" name="actividades_recreacion" value="{{ $seguimiento->actividades_recreacion }}">{{ $seguimiento->actividades_recreacion }}</textarea>
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
                            <Textarea id="ind_evaluacion_recreacion" type="text" class="form-control @error('ind_evaluacion_recreacion') is-invalid @enderror" name="ind_evaluacion_recreacion" value="{{ $seguimiento->ind_evaluacion_recreacion }}">{{ $seguimiento->ind_evaluacion_recreacion }}</textarea>
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
                            <Textarea id="observaciones_recreacion" type="text" class="form-control @error('observaciones_recreacion') is-invalid @enderror" name="observaciones_recreacion" value="{{ $seguimiento->observaciones_recreacion }}">{{ $seguimiento->observaciones_recreacion }}</textarea>
                            @error('observaciones_recreacion')
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
                        <label for="perfil_religioso" class="col-md-5 col-form-label">{{ __('Perfil religioso') }}</label>
                        <div class="col-md-7">
                            <Textarea id="perfil_religioso" type="text" class="form-control @error('perfil_religioso') is-invalid @enderror" name="perfil_religioso" value="{{ $seguimiento->perfil_religioso }}">{{ $seguimiento->perfil_religioso }}</textarea>
                            @error('perfil_religioso')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="objetivos_religioso" class="col-md-5 col-form-label">{{ __('Objetivos religiosos') }}</label>
                        <div class="col-md-7">
                            <Textarea id="objetivos_religioso" type="text" class="form-control @error('objetivos_religioso') is-invalid @enderror" name="objetivos_religioso" value="{{ $seguimiento->objetivos_religioso }}">{{ $seguimiento->objetivos_religioso }}</textarea>
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
                            <Textarea id="actividades_religioso" type="text" class="form-control @error('actividades_religioso') is-invalid @enderror" name="actividades_religioso" value="{{ $seguimiento->actividades_religioso }}">{{ $seguimiento->actividades_religioso }}</textarea>
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
                            <Textarea id="ind_evaluacion_religioso" type="text" class="form-control @error('ind_evaluacion_religioso') is-invalid @enderror" name="ind_evaluacion_religioso" value="{{ $seguimiento->ind_evaluacion_religioso }}">{{ $seguimiento->ind_evaluacion_religioso }}</textarea>
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
                            <Textarea id="observaciones_religioso" type="text" class="form-control @error('observaciones_religioso') is-invalid @enderror" name="observaciones_religioso" value="{{ $seguimiento->observaciones_religioso }}">{{ $seguimiento->observaciones_religioso }}</textarea>
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
                        <label for="perfil_enfermera" class="col-md-5 col-form-label">{{ __('Perfil Enfermera') }}</label>
                        <div class="col-md-7">
                            <Textarea id="perfil_enfermera" type="text" class="form-control @error('perfil_enfermera') is-invalid @enderror" name="perfil_enfermera" value="{{ $seguimiento->perfil_enfermera }}">{{ $seguimiento->perfil_enfermera }}</textarea>
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
                            <Textarea id="objetivos_enfermera" type="text" class="form-control @error('objetivos_enfermera') is-invalid @enderror" name="objetivos_enfermera" value="{{ $seguimiento->objetivos_enfermera }}">{{ $seguimiento->objetivos_enfermera }}</textarea>
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
                            <Textarea id="actividades_enfermera" type="text" class="form-control @error('actividades_enfermera') is-invalid @enderror" name="actividades_enfermera" value="{{ $seguimiento->actividades_enfermera }}">{{ $seguimiento->actividades_enfermera }}</textarea>
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
                            <Textarea id="ind_evaluacion_enfermera" type="text" class="form-control @error('ind_evaluacion_enfermera') is-invalid @enderror" name="ind_evaluacion_enfermera" value="{{ $seguimiento->ind_evaluacion_enfermera }}">{{ $seguimiento->ind_evaluacion_enfermera }}</textarea>
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
                            <Textarea id="observaciones_enfermera" type="text" class="form-control @error('observaciones_enfermera') is-invalid @enderror" name="observaciones_enfermera" value="{{ $seguimiento->observaciones_enfermera }}">{{ $seguimiento->observaciones_enfermera }}</textarea>
                            @error('observaciones_enfermera')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div><br><br>
            </fieldset>     
        </div>          
    </form>
</div>
@endauth
<div class="gradient"></div>
@endsection
