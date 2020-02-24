@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test Delta de {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('delta.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $nuevoCliente->nombres }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>
                        <h4> Dependencia general </h4>

                        <div class="form-group row">
                <label for="encargado" class="col-md-3 col-form-label text-md-right">{{ __('Encargado Enfermeria') }}</label>
                <div class="col-md-8">
                    
                    <input id="encargado_enfermeria" type="text" class="form-control @error('encargado_enfermeria') is-invalid @enderror" name="encargado_enfermeria" value="{{$delta->encargado_enfermeria}}" required autocomplete="encargado_enfermeria" autofocus>
                    
                </div>
            </div>    
                        <div class="form-group row">
                            <label for="dependencia_movilizacion" class="col-md-4 col-form-label text-md-right">{{ __('Movilización') }}</label>
                            <div class="col-md-6">
                                <input name="dependencia_movilizacion" type="integer" class="form-control @error('dependencia_movilizacion') is-invalid @enderror" value="{{ $delta->dependencia_movilizacion }}">
                                   
                                  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependencia_deambulacion" class="col-md-4 col-form-label text-md-right">{{ __('Deambulación y desplazamiento') }}</label>
                            <div class="col-md-6">
                                <input name="dependencia_deambulacion" type="integer" class="form-control @error('dependencia_deambulacion') is-invalid @enderror" value="{{ $delta->dependencia_deambulacion }}">
                            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependencia_aseo" class="col-md-4 col-form-label text-md-right">{{ __('Aseo') }}</label>
                            <div class="col-md-6">
                                <input name="dependencia_aseo" type="integer" class="form-control @error('dependencia_aseo') is-invalid @enderror" value="{{ $delta->dependencia_aseo }}">
                                   
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependencia_vestido" class="col-md-4 col-form-label text-md-right">{{ __('Vestido') }}</label>
                            <div class="col-md-6">
                                <input name="dependencia_vestido" type="integer" class="form-control @error('dependencia_vestido') is-invalid @enderror" value="{{ $delta->dependencia_vestido }}">
                                
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependencia_alimentacion" class="col-md-4 col-form-label text-md-right">{{ __('Alimentación') }}</label>
                            <div class="col-md-6">
                                <input name="dependencia_alimentacion" type="integer" class="form-control @error('dependencia_alimentacion') is-invalid @enderror" value="{{ $delta->dependencia_alimentacion }}">
                                   

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependencia_esfinteriana" class="col-md-4 col-form-label text-md-right">{{ __('Higiene esfinteriana') }}</label>
                            <div class="col-md-6">
                                <input name="dependencia_esfinteriana" type="integer" class="form-control @error('dependencia_esfinteriana') is-invalid @enderror" value="{{ $delta->dependencia_esfinteriana }}">
                          
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependencia_tratamientos" class="col-md-4 col-form-label text-md-right">{{ __('Administración tratamientos') }}</label>
                            <div class="col-md-6">
                                <input name="dependencia_tratamientos" type="integer" class="form-control @error('dependencia_tratamientos') is-invalid @enderror" value="{{ $delta->dependencia_tratamientos }}">
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cuidados_enfermeria" class="col-md-4 col-form-label text-md-right">{{ __('CUIDADOS DE ENFERMERIA') }}</label>
                            <div class="col-md-6">
                                <input name="cuidados_enfermeria" type="integer" class="form-control @error('cuidados_enfermeria') is-invalid @enderror" value="{{ $delta->cuidados_enfermeria }}">
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="necesidad_vigilancia" class="col-md-4 col-form-label text-md-right">{{ __('NECESIDAD DE VIGILANCIA') }}</label>
                            <div class="col-md-6">
                                <input name="necesidad_vigilancia" type="integer" class="form-control @error('necesidad_vigilancia') is-invalid @enderror" value="{{ $delta->necesidad_vigilancia }}">
                          
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="colaboracion" class="col-md-4 col-form-label text-md-right">{{ __('	Colaboración') }}</label>
                            <div class="col-md-6">
                                <input name="colaboracion" type="integer" class="form-control @error('colaboracion') is-invalid @enderror" value="{{ $delta->colaboracion }}">
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion_dependencia" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones de dependencia general') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion_dependencia" type="text" class="form-control @error('descripcion_dependencia') is-invalid @enderror" name="descripcion_dependencia" value="{{ $delta->descripcion_dependencia }}">{{ $delta->descripcion_dependencia }}</textarea>
                                
                              
                            </div>
                        </div>

                        <h4> Deficiencia Física </h4>

                        <div class="form-group row">
                <label for="encargado" class="col-md-3 col-form-label text-md-right">{{ __('Encargado Enfermeria') }}</label>
                <div class="col-md-8">
                    
                    <input id="encargado_fisica" type="text" class="form-control @error('encargado_fisica') is-invalid @enderror" name="encargado_fisica" value="{{ $delta->encargado_fisica }}" required autocomplete="encargado_fisica" autofocus>
                    
                </div>
            </div>  
               
                        <div class="form-group row">
                            <label for="fisica_estabilidad" class="col-md-4 col-form-label text-md-right">{{ __('Estabilidad') }}</label>
                            <div class="col-md-6">
                                <input name="fisica_estabilidad" type="integer" class="form-control @error('fisica_estabilidad') is-invalid @enderror" value="{{ $delta->fisica_estabilidad }}">
                                  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vision_audicion" class="col-md-4 col-form-label text-md-right">{{ __('Visión y audición') }}</label>
                            <div class="col-md-6">
                                <input name="vision_audicion" type="integer" class="form-control @error('vision_audicion') is-invalid @enderror" value="{{ $delta->vision_audicion }}">
                              
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="fisica_locomotor" class="col-md-4 col-form-label text-md-right">{{ __('Alteración del aparato locomotor') }}</label>
                            <div class="col-md-6">
                                <input name="fisica_locomotor" type="integer" class="form-control @error('fisica_locomotor') is-invalid @enderror" value="{{ $delta->fisica_locomotor }}">
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fisica_neuronologicas" class="col-md-4 col-form-label text-md-right">{{ __('Otras funciones neurológicas') }}</label>
                            <div class="col-md-6">
                                <input name="fisica_neurologicas" type="integer" class="form-control @error('fisica_neurologias') is-invalid @enderror" value="{{ $delta->fisica_neurologicas }}">
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fisica_cardiovascular" class="col-md-4 col-form-label text-md-right">{{ __('Aparato respiratorio y cardiovascular') }}</label>
                            <div class="col-md-6">
                                <input name="fisica_cardiovascular" type="integer" class="form-control @error('fisica_cardiovascular') is-invalid @enderror" value="{{ $delta->fisica_cardiovascular }}">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion_fisica" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones deficiencias físicas') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion_fisica" type="text" class="form-control @error('descripcion_fisica') is-invalid @enderror" name="descripcion_fisica" value="{{ $delta->descripcion_fisica }}">{{$delta->descripcion_fisica}}</textarea>
                              
                            </div>
                        </div>

                        <h4> Deficiencia Psíquica </h4>
                        <div class="form-group row">
                <label for="encargado" class="col-md-3 col-form-label text-md-right">{{ __('Encargado Enfermeria') }}</label>
                <div class="col-md-8">
                    
                    <input id="encargado_psiquica" type="text" class="form-control @error('encargado_psiquica') is-invalid @enderror" name="encargado_psiquica" value="{{ $delta->encargado_psiquica }}" required autocomplete="encargado_psiquica" autofocus>
                   
                </div>
            </div>  
               
                        <div class="form-group row">
                            <label for="lenguaje_comprension" class="col-md-4 col-form-label text-md-right">{{ __('Lenguaje y comprensión') }}</label>
                            <div class="col-md-6">
                                <input name="lenguaje_comprension" type="integer" class="form-control @error('lenguaje_comprension') is-invalid @enderror" value="{{ $delta->lenguaje_comprension }}">
                                    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="orientacion_memoria" class="col-md-4 col-form-label text-md-right">{{ __('Orientación y memoria') }}</label>
                            <div class="col-md-6">
                                <input name="orientacion_memoria" type="integer" class="form-control @error('orientacion_memoria') is-invalid @enderror" value="{{ $delta->orientacion_memoria }}">
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="trastorno_comportamiento" class="col-md-4 col-form-label text-md-right">{{ __('Trastornos del comportamiento ') }}</label>
                            <div class="col-md-6">
                                <input name="trastorno_comportamiento" type="integer" class="form-control @error('fisica_locomotor') is-invalid @enderror" value="{{ $delta->fisica_locomotor }}">
                                   
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="capacidad_juicio" class="col-md-4 col-form-label text-md-right">{{ __('Capacidad de juicio') }}</label>
                            <div class="col-md-6">
                                <input name="capacidad_juicio" type="integer" class="form-control @error('capacidad_juicio') is-invalid @enderror" value="{{ $delta->capacidad_juicio}}">
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alteracion_sueño" class="col-md-4 col-form-label text-md-right">{{ __('Alteraciones del sueño') }}</label>
                            <div class="col-md-6">
                                <input name="alteracion_sueño" type="integer" class="form-control @error('alteracion_sueño') is-invalid @enderror" value="{{ $delta->alteracion_sueño }}">
                                   
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion_psiquica" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones de dependencia psiquica') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion_psiquica" type="text" class="form-control @error('descripcion_psiquica') is-invalid @enderror" name="descripcion_psiquica" value="{{ $delta->descripcion_psiquica }}">{{ $delta->descripcion_psiquica }}</textarea>
                                @error('descripcion_psiquica')
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
