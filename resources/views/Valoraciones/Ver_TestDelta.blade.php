@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('delta.store')}}">
        <div class="card-header form-tittle_">Test Delta de: {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
        <div class="card-body">            
            @csrf            
            <fieldset disabled>

                <div class="form-group row">                
                    <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly"> 
                </div>

                <div class="form-header2"><h1 class="form-tittle2">{{ __('DEPENDENCIA GENERAL') }}</h1></div><br>
                <div class="form-group row">
                    <label for="encargado_general" class="col-md-5 col-form-label">{{ __('Encargado enfermeria') }}</label>
                    <div class="col-md-7">                    
                        <input id="encargado_general" type="text" class="form-control @error('encargado_general') is-invalid @enderror" name="encargado_general" value="{{$delta->encargado_general}}" required autocomplete="encargado_general" autofocus>         
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dependencia_movilizacion" class="col-md-5 col-form-label">{{ __('Movilización') }}</label>
                    <div class="col-md-7">
                        <input name="dependencia_movilizacion" type="integer" class="form-control @error('dependencia_movilizacion') is-invalid @enderror" value="{{ $delta->dependencia_movilizacion }}">        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dependencia_deambulacion" class="col-md-5 col-form-label">{{ __('Deambulación y desplazamiento') }}</label>
                    <div class="col-md-7">
                        <input name="dependencia_deambulacion" type="integer" class="form-control @error('dependencia_deambulacion') is-invalid @enderror" value="{{ $delta->dependencia_deambulacion }}">
                    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dependencia_aseo" class="col-md-5 col-form-label">{{ __('Aseo') }}</label>
                    <div class="col-md-7">
                        <input name="dependencia_aseo" type="integer" class="form-control @error('dependencia_aseo') is-invalid @enderror" value="{{ $delta->dependencia_aseo }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dependencia_vestido" class="col-md-5 col-form-label">{{ __('Vestido') }}</label>
                    <div class="col-md-7">
                        <input name="dependencia_vestido" type="integer" class="form-control @error('dependencia_vestido') is-invalid @enderror" value="{{ $delta->dependencia_vestido }}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dependencia_alimentacion" class="col-md-5 col-form-label">{{ __('Alimentación') }}</label>
                    <div class="col-md-7">
                        <input name="dependencia_alimentacion" type="integer" class="form-control @error('dependencia_alimentacion') is-invalid @enderror" value="{{ $delta->dependencia_alimentacion }}">                    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dependencia_esfinteriana" class="col-md-5 col-form-label">{{ __('Higiene esfinteriana') }}</label>
                    <div class="col-md-7">
                        <input name="dependencia_esfinteriana" type="integer" class="form-control @error('dependencia_esfinteriana') is-invalid @enderror" value="{{ $delta->dependencia_esfinteriana }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dependencia_tratamientos" class="col-md-5 col-form-label">{{ __('Administración tratamientos') }}</label>
                    <div class="col-md-7">
                        <input name="dependencia_tratamientos" type="integer" class="form-control @error('dependencia_tratamientos') is-invalid @enderror" value="{{ $delta->dependencia_tratamientos }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cuidados_enfermeria" class="col-md-5 col-form-label">{{ __('Cuidados de Enfermeria') }}</label>
                    <div class="col-md-7">
                        <input name="cuidados_enfermeria" type="integer" class="form-control @error('cuidados_enfermeria') is-invalid @enderror" value="{{ $delta->cuidados_enfermeria }}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="necesidad_vigilancia" class="col-md-5 col-form-label">{{ __('Neesidad de Vigilancia') }}</label>
                    <div class="col-md-7">
                        <input name="necesidad_vigilancia" type="integer" class="form-control @error('necesidad_vigilancia') is-invalid @enderror" value="{{ $delta->necesidad_vigilancia }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colaboracion" class="col-md-5 col-form-label">{{ __('	Colaboración') }}</label>
                    <div class="col-md-7">
                        <input name="colaboracion" type="integer" class="form-control @error('colaboracion') is-invalid @enderror" value="{{ $delta->colaboracion }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="descripcion_dependencia" class="col-md-5 col-form-label">{{ __('Observaciones de dependencia general') }}</label>
                    <div class="col-md-7">
                        <Textarea id="descripcion_dependencia" type="text" class="form-control @error('descripcion_dependencia') is-invalid @enderror" name="descripcion_dependencia" value="{{ $delta->descripcion_dependencia }}">{{ $delta->descripcion_dependencia }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="total_dependencia_general" class="col-md-5 col-form-label">{{ __('TOTAL DEPENDENCIA GENERAL') }}</label>
                    <div class="col-md-7">
                        <Textarea id="total" type="text" class="form-control @error('total_dependencia_general') is-invalid @enderror" name="total_dependencia_general" value="{{ $delta->total_dependencia_general }}">{{ $delta->total_dependencia_general }}</textarea>
                    </div>
                </div>

                <div class="form-header2"><h1 class="form-tittle2">{{ __('DEFICIENCIA FÍSICA') }}</h1></div><br>
                <div class="form-group row">
                    <label for="encargado_fisica" class="col-md-5 col-form-label">{{ __('Encargado deficiencia física') }}</label>
                    <div class="col-md-7">                    
                        <input id="encargado_fisica" type="text" class="form-control @error('encargado_fisica') is-invalid @enderror" name="encargado_fisica" value="{{ $delta->encargado_fisica }}" required autocomplete="encargado_fisica" autofocus>
                    </div>
                </div>  
                
                <div class="form-group row">
                    <label for="fisica_estabilidad" class="col-md-5 col-form-label">{{ __('Estabilidad') }}</label>
                    <div class="col-md-7">
                        <input name="fisica_estabilidad" type="integer" class="form-control @error('fisica_estabilidad') is-invalid @enderror" value="{{ $delta->fisica_estabilidad }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="vision_audicion" class="col-md-5 col-form-label">{{ __('Visión y audición') }}</label>
                    <div class="col-md-7">
                        <input name="vision_audicion" type="integer" class="form-control @error('vision_audicion') is-invalid @enderror" value="{{ $delta->vision_audicion }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fisica_locomotor" class="col-md-5 col-form-label">{{ __('Alteración del aparato locomotor') }}</label>
                    <div class="col-md-7">
                        <input name="fisica_locomotor" type="integer" class="form-control @error('fisica_locomotor') is-invalid @enderror" value="{{ $delta->fisica_locomotor }}">      
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fisica_neuronologicas" class="col-md-5 col-form-label">{{ __('Otras funciones neurológicas') }}</label>
                    <div class="col-md-7">
                        <input name="fisica_neurologicas" type="integer" class="form-control @error('fisica_neurologias') is-invalid @enderror" value="{{ $delta->fisica_neurologicas }}">  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fisica_cardiovascular" class="col-md-5 col-form-label">{{ __('Aparato respiratorio y cardiovascular') }}</label>
                    <div class="col-md-7">
                        <input name="fisica_cardiovascular" type="integer" class="form-control @error('fisica_cardiovascular') is-invalid @enderror" value="{{ $delta->fisica_cardiovascular }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="descripcion_fisica" class="col-md-5 col-form-label">{{ __('Observaciones deficiencias físicas') }}</label>
                    <div class="col-md-7">
                        <Textarea id="descripcion_fisica" type="text" class="form-control @error('descripcion_fisica') is-invalid @enderror" name="descripcion_fisica" value="{{ $delta->descripcion_fisica }}">{{$delta->descripcion_fisica}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="total_deficiencia_fisica" class="col-md-5 col-form-label">{{ __('TOTAL DEFICIENCIA FISICA') }}</label>
                    <div class="col-md-7">
                        <Textarea id="total" type="text" class="form-control @error('total_deficiencia_fisica') is-invalid @enderror" name="total_deficiencia_fisica" value="{{ $delta->total_deficiencia_fisica }}">{{ $delta->total_deficiencia_fisica }}</textarea>
                    </div>
                </div>

                <div class="form-header2"><h1 class="form-tittle2">{{ __('DEFICIENCIA PSÍQUICA') }}</h1></div><br>
                <div class="form-group row">
                    <label for="encargado_psiquica" class="col-md-5 col-form-label">{{ __('Encargado deficiencia psíquica') }}</label>
                    <div class="col-md-7">
                        <input id="encargado_psiquica" type="text" class="form-control @error('encargado_psiquica') is-invalid @enderror" name="encargado_psiquica" value="{{ $delta->encargado_psiquica }}" required autocomplete="encargado_psiquica" autofocus>
                    </div>
                </div>  
                
                <div class="form-group row">
                    <label for="lenguaje_comprension" class="col-md-5 col-form-label">{{ __('Lenguaje y comprensión') }}</label>
                    <div class="col-md-7">
                        <input name="lenguaje_comprension" type="integer" class="form-control @error('lenguaje_comprension') is-invalid @enderror" value="{{ $delta->lenguaje_comprension }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="orientacion_memoria" class="col-md-5 col-form-label">{{ __('Orientación y memoria') }}</label>
                    <div class="col-md-7">
                        <input name="orientacion_memoria" type="integer" class="form-control @error('orientacion_memoria') is-invalid @enderror" value="{{ $delta->orientacion_memoria }}">  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="trastorno_comportamiento" class="col-md-5 col-form-label">{{ __('Trastornos del comportamiento ') }}</label>
                    <div class="col-md-7">
                        <input name="trastorno_comportamiento" type="integer" class="form-control @error('trastorno_comportamiento') is-invalid @enderror" value="{{ $delta->trastorno_comportamiento }}">       
                    </div>
                </div>


                <div class="form-group row">
                    <label for="capacidad_juicio" class="col-md-5 col-form-label">{{ __('Capacidad de juicio') }}</label>
                    <div class="col-md-7">
                        <input name="capacidad_juicio" type="integer" class="form-control @error('capacidad_juicio') is-invalid @enderror" value="{{ $delta->capacidad_juicio}}">       
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alteracion_sueño" class="col-md-5 col-form-label">{{ __('Alteraciones del sueño') }}</label>
                    <div class="col-md-7">
                        <input name="alteracion_sueño" type="integer" class="form-control @error('alteracion_sueño') is-invalid @enderror" value="{{ $delta->alteracion_sueño }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="descripcion_psiquica" class="col-md-5 col-form-label">{{ __('Observaciones de dependencia psiquica') }}</label>
                    <div class="col-md-7">
                        <Textarea id="descripcion_psiquica" type="text" class="form-control @error('descripcion_psiquica') is-invalid @enderror" name="descripcion_psiquica" value="{{ $delta->descripcion_psiquica }}">{{ $delta->descripcion_psiquica }}</textarea>
                        @error('descripcion_psiquica')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="total_deficiencia_psiquica" class="col-md-5 col-form-label">{{ __('TOTAL DEFICIENCIA PSÍQUICA') }}</label>
                    <div class="col-md-7">
                        <Textarea id="total" type="text" class="form-control @error('total_deficiencia_psiquica') is-invalid @enderror" name="total_deficiencia_psiquica" value="{{ $delta->total_deficiencia_psiquica }}">{{ $delta->total_deficiencia_psiquica }}</textarea>
                    </div>
                </div>

            </fieldset>       
        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection
