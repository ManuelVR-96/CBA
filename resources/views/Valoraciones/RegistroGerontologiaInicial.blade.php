@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('geron_inicial.store')}}">
        <div class="card-header form-tittle_">Registro Test Gerontológico de:  {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
        <div class="card-body">
            @csrf
            <div>
                <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
            </div>
            
            <div class="form-header2"><h1 class="form-tittle2">{{ __('COGNICIÓN') }}</h1></div><br>
            <div class="form-group row">
                <label for="cognicion_uno" class="col-md-7 col-form-label">{{ __('Concentrarse en hacer algo durante diez minutos ?') }}</label>
                <div class="col-md-5">
                    <select name="cognicion_uno" type="integer" class="form-control @error('cognicion_uno') is-invalid @enderror" value="{{ old('cognicion_uno') }}">>
                        <option value="{{ old('cognicion_uno') }}">{{ old('cognicion_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>    
                    </select>

                    @error('cognicion_uno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cognicion_dos" class="col-md-7 col-form-label">{{ __(' Recordar las cosas importantes que tiene que hacer?') }}</label>
                <div class="col-md-5">
                    <select name="cognicion_dos" type="integer" class="form-control @error('cognicion_dos') is-invalid @enderror" value="{{ old('cognicion_dos') }}">>
                        <option value="{{ old('cognicion_dos') }}">{{ old('cognicion_dos') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('cognicion_dos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cognicion_tres" class="col-md-7 col-form-label">{{ __(' Analizar y encontrar soluciones a los problemas de la vida diaria?') }}</label>
                <div class="col-md-5">
                    <select name="cognicion_tres" type="integer" class="form-control @error('cognicion_tres') is-invalid @enderror" value="{{ old('cognicion_tres') }}">>
                        <option value="{{ old('cognicion_tres') }}">{{ old('cognicion_tres') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>       
                    </select>

                    @error('cognicion_tres')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cognicion_cuatro" class="col-md-7 col-form-label">{{ __('Aprender una nueva tarea, como por ejemplo llegar a un lugar nuevo ?') }}</label>
                <div class="col-md-5">
                    <select name="cognicion_cuatro" type="integer" class="form-control @error('cognicion_cuatro') is-invalid @enderror" value="{{ old('cognicion_cuatro') }}">>
                        <option value="{{ old('cognicion_cuatro') }}">{{ old('cognicion_cuatro') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>   
                    </select>

                    @error('cognicion_cuatro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cognicion_cinco" class="col-md-7 col-form-label">{{ __('Entender en general lo que dice la gente?') }}</label>
                <div class="col-md-5">
                    <select name="cognicion_cinco" type="integer" class="form-control @error('cognicion_uno') is-invalid @enderror" value="{{ old('cognicion_cinco') }}">>
                        <option value="{{ old('cognicion_cinco') }}">{{ old('cognicion_cinco') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>       
                    </select>

                    @error('cognicion_cinco')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cognicion_seis" class="col-md-7 col-form-label">{{ __('Comenzar y mantener una conversación') }}</label>
                <div class="col-md-5">
                    <select name="cognicion_seis" type="integer" class="form-control @error('cognicion_seis') is-invalid @enderror" value="{{ old('cognicion_seis') }}">>
                        <option value="{{ old('cognicion_seis') }}">{{ old('cognicion_seis') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('cognicion_seis')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('MOVILIDAD') }}</h1></div><br>
            <div class="form-group row">
                <label for="movilidad_uno" class="col-md-7 col-form-label">{{ __('Estar de pie por largos periodos de tiempo como por ejemplo 30 minutos?') }}</label>
                <div class="col-md-5">
                    <select name="movilidad_uno" type="integer" class="form-control @error('movilidad_uno') is-invalid @enderror" value="{{ old('movilidad_uno') }}">>
                        <option value="{{ old('movilidad_uno') }}">{{ old('movilidad_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('movilidad_uno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>            
            </div>

            <div class="form-group row">
                <label for="movilidad_dos" class="col-md-7 col-form-label">{{ __('Pararse luego de estar sentado?') }}</label>
                <div class="col-md-5">
                    <select name="movilidad_dos" type="integer" class="form-control @error('movilidad_dos') is-invalid @enderror" value="{{ old('movilidad_dos') }}">>
                        <option value="{{ old('movilidad_dos') }}">{{ old('movilidad_dos') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('movilidad_dos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="movilidad_tres" class="col-md-7 col-form-label">{{ __(' Moverse dentro de su casa') }}</label>
                <div class="col-md-5">
                    <select name="movilidad_tres" type="integer" class="form-control @error('movilidad_tres') is-invalid @enderror" value="{{ old('movilidad_tres') }}">>
                        <option value="{{ old('movilidad_tres') }}">{{ old('movilidad_tres') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>    
                    </select>

                    @error('movilidad_tres')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="movilidad_cuarto" class="col-md-7 col-form-label">{{ __('Salir de su casa ?') }}</label>
                <div class="col-md-5">
                    <select name="movilidad_cuatro" type="integer" class="form-control @error('movilidad_cuarto') is-invalid @enderror" value="{{ old('movilidad_cuatro') }}">>
                        <option value="{{ old('movilidad_cuatro') }}">{{ old('movilidad_cuatro') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('movilidad_cuatro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="movilidad_cinco" class="col-md-7 col-form-label">{{ __(' Andar largas distancias, como un kilómetro [o algo equivalente]?') }}</label>
                <div class="col-md-5">
                    <select name="movilidad_cinco" type="integer" class="form-control @error('movilidad_cinco') is-invalid @enderror" value="{{ old('movilidad_cinco') }}">>
                        <option value="{{ old('movilidad_cinco') }}">{{ old('movilidad_cinco') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('movilidad_cinco')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('AUTOCUIDADO') }}</h1></div><br>
            <div class="form-group row">
                <label for="autocuidado_uno" class="col-md-7 col-form-label">{{ __(' Lavarse todo el cuerpo (Bañarse) ?') }}</label>
                <div class="col-md-5">
                    <select name="autocuidado_uno" type="integer" class="form-control @error('autocuidado_uno') is-invalid @enderror" value="{{ old('autocuidado_uno') }}">>
                        <option value="{{ old('autocuidado_uno') }}">{{ old('autocuidado_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('autocuidado_uno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="autocuidado_dos" class="col-md-7 col-form-label">{{ __('Vestirse ?') }}</label>
                <div class="col-md-5">
                    <select name="autocuidado_dos" type="integer" class="form-control @error('autocuidado_dos') is-invalid @enderror" value="{{ old('autocuidado_dos') }}">>
                        <option value="{{ old('autocuidado_dos') }}">{{ old('autocuidado_dos') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>       
                    </select>

                    @error('autocuidado_dos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="autocuidado_tres" class="col-md-7 col-form-label">{{ __(' Comer?') }}</label>
                <div class="col-md-5">
                    <select name="autocuidado_tres" type="integer" class="form-control @error('autocuidado_tres') is-invalid @enderror" value="{{ old('autocuidado_tres') }}">>
                        <option value="{{ old('autocuidado_tres') }}">{{ old('autocuidado_tres') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('autocuidado_tres')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="autocuidado_cuatro" class="col-md-7 col-form-label">{{ __(' Quedarse solo(a) durante unos días?') }}</label>
                <div class="col-md-5">
                    <select name="autocuidado_cuatro" type="integer" class="form-control @error('autocuidado_cuatro') is-invalid @enderror" value="{{ old('autocuidado_cuatro') }}">>
                        <option value="{{ old('autocuidado_cuatro') }}">{{ old('autocuidado_cuatro') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('autocuidado_uno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('RELACIONARSE') }}</h1></div><br>
            <div class="form-group row">
            <label for="relacionarse_uno" class="col-md-7 col-form-label">{{ __(' Relacionarse con personas que no conoce ?') }}</label>
                <div class="col-md-5">
                    <select name="relacionarse_uno" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ old('relacionarse_uno') }}">>
                        <option value="{{ old('relacionarse_uno') }}">{{ old('relacionarse_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>   
                    </select>

                    @error('relacionarse_uno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="relacionarse_dos" class="col-md-7 col-form-label">{{ __('Mantener una amistad ?') }}</label>
                <div class="col-md-5">
                    <select name="relacionarse_dos" type="integer" class="form-control @error('relacionarse_dos') is-invalid @enderror" value="{{ old('relacionarse_dos') }}">>
                        <option value="{{ old('relacionarse_dos') }}">{{ old('relacionarse_dos') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('relacionarse_dos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="relacionarse_tres" class="col-md-7 col-form-label">{{ __('Llevarse bien con personas cercanas a usted ?') }}</label>
                <div class="col-md-5">
                    <select name="relacionarse_tres" type="integer" class="form-control @error('relacionarse_tres') is-invalid @enderror" value="{{ old('relacionarse_tres') }}">>
                        <option value="{{ old('relacionarse_tres') }}">{{ old('relacionarse_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>   
                    </select>

                    @error('relacionarse_tres')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="relacionarse_cuatro" class="col-md-7 col-form-label">{{ __('Hacer nuevos amigos?') }}</label>
                <div class="col-md-5">
                    <select name="relacionarse_cuatro" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ old('relacionarse_cuatro') }}">>
                        <option value="{{ old('relacionarse_cuatro') }}">{{ old('relacionarse_cuatro') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>    
                    </select>

                    @error('relacionarse_cuatro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="relacionarse_cinco" class="col-md-7 col-form-label">{{ __('Tener relaciones sexuales?') }}</label>
                <div class="col-md-5">
                    <select name="relacionarse_cinco" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ old('relacionarse_cinco') }}">>
                        <option value="{{ old('relacionarse_cinco') }}">{{ old('relacionarse_cinco') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('relacionarse_cinco')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('ACTIVIDADES DE LA VIDA DIARIA') }}</h1></div><br>
            <div class="form-group row">
            <label for="quehacer_uno" class="col-md-7 col-form-label">{{ __(' Cumplir con sus quehaceres de la casa ?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_uno" type="integer" class="form-control @error('quehacer_uno') is-invalid @enderror" value="{{ old('quehacer_uno') }}">>
                        <option value="{{ old('quehacer_uno') }}">{{ old('quehacer_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('quehacer_uno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="quehacer_dos" class="col-md-7 col-form-label">{{ __(' Realizar bien sus quehaceres de la casa más importantes?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_dos" type="integer" class="form-control @error('quehacer_dos') is-invalid @enderror" value="{{ old('quehacer_dos') }}">>
                        <option value="{{ old('quehacer_dos') }}">{{ old('quehacer_dos') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>    
                    </select>

                    @error('quehacer_dos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="quehacer_tres" class="col-md-7 col-form-label">{{ __(' Acabar sus quehaceres de la casa tan rápido como era necesario?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_tres" type="integer" class="form-control @error('quehacer_tres') is-invalid @enderror" value="{{ old('quehacer_tres') }}">>
                        <option value="{{ old('quehacer_tres') }}">{{ old('quehacer_tres') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('quehacer_tres')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="quehacer_cuatro" class="col-md-7 col-form-label">{{ __(' Acabar todo el trabajo de la casa que tenía que hacer ?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_cuatro" type="integer" class="form-control @error('quehacer_cuatro') is-invalid @enderror" value="{{ old('quehacer_cuatro') }}">>
                        <option value="{{ old('quehacer_cuatro') }}">{{ old('quehacer_cuatro') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('quehacer_cuatro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="quehacer_cinco" class="col-md-7 col-form-label">{{ __(' Llevar a cabo su trabajo diario?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_cinco" type="integer" class="form-control @error('quehacer_cinco') is-invalid @enderror" value="{{ old('quehacer_cinco') }}">>
                        <option value="{{ old('quehacer_cinco') }}">{{ old('quehacer_cinco') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('quehacer_cinco')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="quehacer_seis" class="col-md-7 col-form-label">{{ __('Realizar bien las tareas más importantes de su trabajo?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_seis" type="integer" class="form-control @error('quehacer_seis') is-invalid @enderror" value="{{ old('quehacer_seis') }}">>
                        <option value="{{ old('quehacer_seis') }}">{{ old('quehacer_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>        
                    </select>

                    @error('quehacer_seis')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="quehacer_siete" class="col-md-7 col-form-label">{{ __(' Acabar todo el trabajo que necesitaba hacer?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_siete" type="integer" class="form-control @error('quehacer_siete') is-invalid @enderror" value="{{ old('quehacer_siete') }}">>
                        <option value="{{ old('quehacer_siete') }}">{{ old('quehacer_siete') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('quehacer_siete')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="quehacer_ocho" class="col-md-7 col-form-label">{{ __('Acabar su trabajo tan rápido como era necesario ?') }}</label>
                <div class="col-md-5">
                    <select name="quehacer_ocho" type="integer" class="form-control @error('quehacer_ocho') is-invalid @enderror" value="{{ old('quehacer_ocho') }}">>
                        <option value="{{ old('quehacer_ocho') }}">{{ old('quehacer_ocho') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('quehacer_ocho')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('PARTICIPACIÓN EN SOCIEDAD') }}</h1></div><br>
            <div class="form-group row">
                <label for="participacion_uno" class="col-md-7 col-form-label">{{ __(' Cuánta dificultad ha tenido para participar, al mismo nivel que el resto de las personas, en actividades de la comunidad (por ejemplo, fiestas, actividades religiosas u otras actividades) ?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_uno" type="integer" class="form-control @error('participacion_uno') is-invalid @enderror" value="{{ old('participacion_uno') }}">>
                        <option value="{{ old('participacion_uno') }}">{{ old('participacion_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('participacion_uno')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="participacion_dos" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido para vivir con dignidad (o respeto) debido a las actitudes y acciones de otras personas?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_dos" type="integer" class="form-control @error('participacion_dos') is-invalid @enderror" value="{{ old('participacion_dos') }}">>
                        <option value="{{ old('participacion_dos') }}">{{ old('participacion_dos') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('participacion_dos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="participacion_tres" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido para vivir con dignidad (o respeto) debido a las actitudes y acciones de otras personas?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_tres" type="integer" class="form-control @error('participacion_tres') is-invalid @enderror" value="{{ old('participacion_tres') }}">>
                        <option value="{{ old('participacion_tres') }}">{{ old('participacion_tres') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('participacion_tres')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="participacion_cuatro" class="col-md-7 col-form-label">{{ __(' Cuánto tiempo ha dedicado a su “condición de salud” o a las consecuencias de la misma?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_cuatro" type="integer" class="form-control @error('relacionarse_uno') is-invalid @enderror" value="{{ old('participacion_cuatro') }}">>
                        <option value="{{ old('participacion_cuatro') }}">{{ old('participacion_cuatro') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>      
                    </select>

                    @error('participacion_cuatro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="participacion_cinco" class="col-md-7 col-form-label">{{ __(' Cuánto le ha afectado emocionalmente su “condición de salud” ?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_cinco" type="integer" class="form-control @error('participacion_uno') is-invalid @enderror" value="{{ old('participacion_cinco') }}">>
                        <option value="{{ old('participacion_uno') }}">{{ old('participacion_uno') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('participacion_cinco')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="participacion_seis" class="col-md-7 col-form-label">{{ __('Qué impacto económico ha tenido para usted o para su familia su “condición de salud” ?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_seis" type="integer" class="form-control @error('participacion_seis') is-invalid @enderror" value="{{ old('participacion_seis') }}">>
                        <option value="{{ old('participacion_seis') }}">{{ old('participacion_seis') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>       
                    </select>

                    @error('participacion_seis')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="participacion_siete" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido su familia debido a su condición de salud?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_siete" type="integer" class="form-control @error('participacion_siete') is-invalid @enderror" value="{{ old('participacion_siete') }}">>
                        <option value="{{ old('participacion_siete') }}">{{ old('participacion_siete') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>   
                    </select>

                    @error('participacion_siete')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="participacion_ocho" class="col-md-7 col-form-label">{{ __('Cuánta dificultad ha tenido para realizar por sí mismo(a) cosas que le ayuden a relajarse o disfrutar?') }}</label>
                <div class="col-md-5">
                    <select name="participacion_ocho" type="integer" class="form-control @error('participacion_ocho') is-invalid @enderror" value="{{ old('participacion_ocho') }}">>
                        <option value="{{ old('participacion_ocho') }}">{{ old('participacion_ocho') }}</option>
                        <option value=0>0 (Sin dificultad)</option>
                        <option value=1>1 (Dificultad leve)</option>
                        <option value=2>2 (Dificultad moderada)</option>
                        <option value=3>3 (Dificultad severa)</option>
                        <option value=4>4 (Dificultad extrema ó no puede hacer)</option>     
                    </select>

                    @error('participacion_ocho')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <div class="col-md-12">
                <button type="submit" class="btn-submit">
                    {{ __('GUARDAR VALORACIÓN GERONTOLOGIA') }}
                </button>
            </div>

        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection