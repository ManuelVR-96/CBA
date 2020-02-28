@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('geron_inicial.store')}}">
        <div class="card-header form-tittle_">Registro Test Gerontológico de: {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div><br>
        <div class="card-header form-tittle_">Realizado por: {{$geron_inicial->encargado_->nombres}} {{$geron_inicial->encargado_->apellidos }} </div>
        <div class="card-body">
            @csrf
            <div>            
                <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
            </div>

            <fieldset disabled>        
                <div class="form-header2"><h1 class="form-tittle2">{{ __('COGNICIÓN') }}</h1></div><br>
                <div class="form-group row">
                    <label for="cognicion_uno" class="col-md-7 col-form-label">{{ __('Concentrarse en hacer algo durante diez minutos ?') }}</label>
                    <div class="col-md-5">
                        <input name="cognicion_uno" type="integer" class="form-control @error('cognicion_uno') is-invalid @enderror" value="{{ $geron_inicial->cognicion_uno }}">    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cognicion_dos" class="col-md-7 col-form-label">{{ __(' Recordar las cosas importantes que tiene que hacer?') }}</label>
                    <div class="col-md-5">
                        <input name="cognicion_dos" type="integer" class="form-control @error('cognicion_dos') is-invalid @enderror" value="{{ $geron_inicial->cognicion_dos }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cognicion_tres" class="col-md-7 col-form-label">{{ __(' Analizar y encontrar soluciones a los problemas de la vida diaria?') }}</label>
                    <div class="col-md-5">
                        <input name="cognicion_tres" type="integer" class="form-control @error('cognicion_tres') is-invalid @enderror" value="{{ $geron_inicial->cognicion_tres }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cognicion_cuatro" class="col-md-7 col-form-label">{{ __('Aprender una nueva tarea, como por ejemplo llegar a un lugar nuevo ?') }}</label>
                    <div class="col-md-5">
                        <input name="cognicion_cuatro" type="integer" class="form-control @error('cognicion_cuatro') is-invalid @enderror" value="{{ $geron_inicial->cognicion_cuatro }}">   
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cognicion_cinco" class="col-md-7 col-form-label">{{ __('Entender en general lo que dice la gente?') }}</label>
                    <div class="col-md-5">
                        <input name="cognicion_cinco" type="integer" class="form-control @error('cognicion_uno') is-invalid @enderror" value="{{ $geron_inicial->cognicion_cinco }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cognicion_seis" class="col-md-7 col-form-label">{{ __('Comenzar y mantener una conversación') }}</label>
                    <div class="col-md-5">
                        <input name="cognicion_seis" type="integer" class="form-control @error('cognicion_seis') is-invalid @enderror" value="{{ $geron_inicial->cognicion_seis }}">  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cognicion_total" class="col-md-7 col-form-label">{{ __('TOTAL EXAMEN COGNICIÓN') }}</label>
                    <div class="col-md-5">
                        <input name="cognicion_total" type="integer" class="form-control @error('cognicion_total') is-invalid @enderror" value="{{ $geron_inicial->cognicion_total }}">  
                    </div>
                </div>

                <br><div class="form-header2"><h1 class="form-tittle2">{{ __('MOVILIDAD') }}</h1></div>
                <div class="form-group row">
                    <label for="movilidad_uno" class="col-md-7 col-form-label">{{ __('Estar de pie por largos periodos de tiempo como por ejemplo 30 minutos?') }}</label>
                    <div class="col-md-5">
                        <input name="movilidad_uno" type="integer" class="form-control @error('movilidad_uno') is-invalid @enderror" value="{{ $geron_inicial->movilidad_uno }}">
                    </div>            
                </div>

                <div class="form-group row">
                    <label for="movilidad_dos" class="col-md-7 col-form-label">{{ __('Pararse luego de estar sentado?') }}</label>
                    <div class="col-md-5">
                        <input name="movilidad_dos" type="integer" class="form-control @error('movilidad_dos') is-invalid @enderror" value="{{ $geron_inicial->movilidad_dos }}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="movilidad_tres" class="col-md-7 col-form-label">{{ __(' Moverse dentro de su casa') }}</label>
                    <div class="col-md-5">
                        <input name="movilidad_tres" type="integer" class="form-control @error('movilidad_tres') is-invalid @enderror" value="{{ $geron_inicial->movilidad_tres }}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="movilidad_cuarto" class="col-md-7 col-form-label">{{ __('Salir de su casa ?') }}</label>
                    <div class="col-md-5">
                        <input name="movilidad_cuatro" type="integer" class="form-control @error('movilidad_cuarto') is-invalid @enderror" value="{{ $geron_inicial->movilidad_cuatro }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="movilidad_cinco" class="col-md-7 col-form-label">{{ __(' Andar largas distancias, como un kilómetro [o algo equivalente]?') }}</label>
                    <div class="col-md-5">
                        <input name="movilidad_cinco" type="integer" class="form-control @error('movilidad_cinco') is-invalid @enderror" value="{{ $geron_inicial->movilidad_cinco }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="movilidad_total" class="col-md-7 col-form-label">{{ __('TOTAL EXAMEN MOVILIDAD') }}</label>
                    <div class="col-md-5">
                        <input name="movilidad_total" type="integer" class="form-control @error('movilidad_total') is-invalid @enderror" value="{{ $geron_inicial->movilidad_total }}">  
                    </div>
                </div>

                <br><div class="form-header2"><h1 class="form-tittle2">{{ __('AUTOCUIDADO') }}</h1></div><br>
                <div class="form-group row">
                    <label for="autocuidado_uno" class="col-md-7 col-form-label">{{ __(' Lavarse todo el cuerpo (Bañarse) ?') }}</label>
                    <div class="col-md-5">
                        <input name="autocuidado_uno" type="integer" class="form-control @error('autocuidado_uno') is-invalid @enderror" value="{{ $geron_inicial->autocuidado_uno }}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="autocuidado_dos" class="col-md-7 col-form-label">{{ __('Vestirse ?') }}</label>
                    <div class="col-md-5">
                        <input name="autocuidado_dos" type="integer" class="form-control @error('autocuidado_dos') is-invalid @enderror" value="{{ $geron_inicial->autocuidado_dos }}">   
                    </div>
                </div>

                <div class="form-group row">
                    <label for="autocuidado_tres" class="col-md-7 col-form-label">{{ __(' Comer?') }}</label>
                    <div class="col-md-5">
                        <input name="autocuidado_tres" type="integer" class="form-control @error('autocuidado_tres') is-invalid @enderror" value="{{ $geron_inicial->autocuidado_tres }}">        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="autocuidado_cuatro" class="col-md-7 col-form-label">{{ __(' Quedarse solo(a) durante unos días?') }}</label>
                    <div class="col-md-5">
                        <input name="autocuidado_cuatro" type="integer" class="form-control @error('autocuidado_cuatro') is-invalid @enderror" value="{{ $geron_inicial->autocuidado_cuatro }}">
                            
                    </div>
                </div>

                <div class="form-group row">
                    <label for="autocuidado_total" class="col-md-7 col-form-label">{{ __('TOTAL EXAMEN AUTOCUIDADO') }}</label>
                    <div class="col-md-5">
                        <input name="autocuidado_total" type="integer" class="form-control @error('autocuidado_total') is-invalid @enderror" value="{{ $geron_inicial->autocuidado_total }}">  
                    </div>
                </div>

                <br><div class="form-header2"><h1 class="form-tittle2">{{ __('RELACIONARSE') }}</h1></div><br>
                <div class="form-group row">
                    <label for="relacionarse_uno" class="col-md-7 col-form-label">{{ __(' Relacionarse con personas que no conoce ?') }}</label>
                    <div class="col-md-5">
                        <input name="relacionarse_uno" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ $geron_inicial->relacionarse_uno }}">    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="relacionarse_dos" class="col-md-7 col-form-label">{{ __('Mantener una amistad ?') }}</label>
                    <div class="col-md-5">
                        <input name="relacionarse_dos" type="integer" class="form-control @error('relacionarse_dos') is-invalid @enderror" value="{{ $geron_inicial->relacionarse_dos }}">    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="relacionarse_tres" class="col-md-7 col-form-label">{{ __('Llevarse bien con personas cercanas a usted ?') }}</label>
                    <div class="col-md-5">
                        <input name="relacionarse_tres" type="integer" class="form-control @error('relacionarse_tres') is-invalid @enderror" value="{{ $geron_inicial->relacionarse_tres }}">     
                    </div>
                </div>

                <div class="form-group row">
                    <label for="relacionarse_cuatro" class="col-md-7 col-form-label">{{ __('Hacer nuevos amigos?') }}</label>
                    <div class="col-md-5">
                        <input name="relacionarse_cuatro" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ $geron_inicial->relacionarse_cuatro }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="relacionarse_cinco" class="col-md-7 col-form-label">{{ __('Tener relaciones sexuales?') }}</label>
                    <div class="col-md-5">
                        <input name="relacionarse_cinco" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ $geron_inicial->relacionarse_cinco }}">  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="relacionarse_total" class="col-md-7 col-form-label">{{ __('TOTAL EXAMEN RELACIONARSE') }}</label>
                    <div class="col-md-5">
                        <input name="relacionarse_total" type="integer" class="form-control @error('relacionarse_total') is-invalid @enderror" value="{{ $geron_inicial->relacionarse_total }}">  
                    </div>
                </div>

                <br><div class="form-header2"><h1 class="form-tittle2">{{ __('ACTIVIDADES DE LA VIDA DIARIA') }}</h1></div><br>
                <div class="form-group row">
                    <label for="quehacer_uno" class="col-md-7 col-form-label">{{ __(' Cumplir con sus quehaceres de la casa ?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_uno" type="integer" class="form-control @error('quehacer_uno') is-invalid @enderror" value="{{ $geron_inicial->quehacer_uno }}">     
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quehacer_dos" class="col-md-7 col-form-label">{{ __(' Realizar bien sus quehaceres de la casa más importantes?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_dos" type="integer" class="form-control @error('quehacer_dos') is-invalid @enderror" value="{{ $geron_inicial->quehacer_dos }}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quehacer_tres" class="col-md-7 col-form-label">{{ __(' Acabar sus quehaceres de la casa tan rápido como era necesario?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_tres" type="integer" class="form-control @error('quehacer_tres') is-invalid @enderror" value="{{ $geron_inicial->quehacer_tres }}">      
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quehacer_cuatro" class="col-md-7 col-form-label">{{ __(' Acabar todo el trabajo de la casa que tenía que hacer ?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_cuatro" type="integer" class="form-control @error('quehacer_cuatro') is-invalid @enderror" value="{{ $geron_inicial->quehacer_cuatro }}">      
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quehacer_cinco" class="col-md-7 col-form-label">{{ __(' Llevar a cabo su trabajo diario?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_cinco" type="integer" class="form-control @error('quehacer_cinco') is-invalid @enderror" value="{{ $geron_inicial->quehacer_cinco }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quehacer_seis" class="col-md-7 col-form-label">{{ __('Realizar bien las tareas más importantes de su trabajo?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_seis" type="integer" class="form-control @error('quehacer_seis') is-invalid @enderror" value="{{ $geron_inicial->quehacer_seis }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quehacer_siete" class="col-md-7 col-form-label">{{ __(' Acabar todo el trabajo que necesitaba hacer?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_siete" type="integer" class="form-control @error('quehacer_siete') is-invalid @enderror" value="{{ $geron_inicial->quehacer_siete }}">                        
                    </div>
                </div>

                <div class="form-group row">
                <label for="quehacer_ocho" class="col-md-7 col-form-label">{{ __('Acabar su trabajo tan rápido como era necesario ?') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_ocho" type="integer" class="form-control @error('quehacer_ocho') is-invalid @enderror" value="{{ $geron_inicial->quehacer_ocho}}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quehacer_total" class="col-md-7 col-form-label">{{ __('TOTAL EXAMEN ACTIVIDADES DE LA VIDA DIARIA') }}</label>
                    <div class="col-md-5">
                        <input name="quehacer_total" type="integer" class="form-control @error('quehacer_total') is-invalid @enderror" value="{{ $geron_inicial->quehacer_total }}">  
                    </div>
                </div>

                <br><div class="form-header2"><h1 class="form-tittle2">{{ __('PARTICIPACIÓN EN SOCIEDAD') }}</h1></div><br>
                <div class="form-group row">
                    <label for="participacion_uno" class="col-md-7 col-form-label">{{ __(' Cuánta dificultad ha tenido para participar, al mismo nivel que el resto de las personas, en actividades de la comunidad (por ejemplo, fiestas, actividades religiosas u otras actividades) ?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_uno" type="integer" class="form-control @error('participacion_uno') is-invalid @enderror" value="{{ $geron_inicial->participacion_uno }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_dos" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido para vivir con dignidad (o respeto) debido a las actitudes y acciones de otras personas?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_dos" type="integer" class="form-control @error('participacion_dos') is-invalid @enderror" value="{{ $geron_inicial->participacion_dos }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_tres" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido para vivir con dignidad (o respeto) debido a las actitudes y acciones de otras personas?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_tres" type="integer" class="form-control @error('participacion_tres') is-invalid @enderror" value="{{ $geron_inicial->participacion_tres }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_cuatro" class="col-md-7 col-form-label">{{ __(' Cuánto tiempo ha dedicado a su “condición de salud” o a las consecuencias de la misma?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_cuatro" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ $geron_inicial->participacion_cuatro }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_cinco" class="col-md-7 col-form-label">{{ __(' Cuánto le ha afectado emocionalmente su “condición de salud” ?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_cinco" type="integer" class="form-control @error('participacion_uno') is-invalid @enderror" value="{{ $geron_inicial->participacion_cinco }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_seis" class="col-md-7 col-form-label">{{ __('Qué impacto económico ha tenido para usted o para su familia su “condición de salud” ?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_seis" type="integer" class="form-control @error('participacion_seis') is-invalid @enderror" value="{{ $geron_inicial->participacion_seis }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_siete" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido su familia debido a su condición de salud?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_siete" type="integer" class="form-control @error('participacion_siete') is-invalid @enderror" value="{{ $geron_inicial->participacion_siete }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_ocho" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido para realizar por sí mismo(a) cosas que le ayuden a relajarse o disfrutar?') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_ocho" type="integer" class="form-control @error('participacion_ocho') is-invalid @enderror" value="{{ $geron_inicial->participacion_ocho }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="participacion_total" class="col-md-7 col-form-label">{{ __('TOTAL EXAMEN PARTICIPACIÓN EN SOCIEDAD') }}</label>
                    <div class="col-md-5">
                        <input name="participacion_total" type="integer" class="form-control @error('participacion_total') is-invalid @enderror" value="{{ $geron_inicial->participacion_total }}">  
                    </div>
                </div>

                <div class="form-group row">
                    <br><div class="form-header2"><h1 class="form-tittle2">{{ __('RESULTADO TOTAL EXAMEN GERONTOLOGÍA') }}</h1></div><br>
                    <label for="gerontologia_total" class="col-md-7 col-form-label">{{ __('TOTAL') }}</label>
                    <div class="col-md-5">
                        <input name="gerontologia_total" type="integer" class="form-control @error('gerontologia_total') is-invalid @enderror" value="{{ $geron_inicial->gerontologia_total }}">  
                    </div>
                </div>

            </fieldset>
        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection