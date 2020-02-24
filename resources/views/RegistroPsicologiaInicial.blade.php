@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Test Psicologico de {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('psico_inicial.store')}}">
                        @csrf

        

                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $nuevoCliente->nombres }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>

                        <h3> Escala de Pfeffer </h3>

                            <p>1.  ¿Cuál es la fecha de hoy? (día, mes, y año) </p>
                            <p>2.  ¿Qué día de la semana es hoy?</p>
                            <p>3.  ¿Cuál es el nombre de este sitio? </p>
                            <p>4.	¿Cuál es su número de teléfono? </p>
                            <p>5.	¿Qué edad tiene? </p>
                            <p>6.	Dígame su fecha de nacimiento </p>
                            <p>7.	¿Cómo se llama el Presidente del Gobierno?</p>
                            <p>8.	¿Cómo se llama el anterior Presidente del Gobierno? </p>
                            <p>9.	Dígame el primer apellido de su madre </p>
                            <p>10.	Reste de tres en tres desde 20.(cualquier error hace errónea la respuesta) </p>

                            <p>Cada error suma un punto. </p>

                            <div class="form-group row">
                            <label for="escala_pfeffer" class="col-md-4 col-form-label text-md-right">{{ __('Escala Pfeffer') }}</label>
                            <div class="col-md-6">
                                <input id="escala_pfeffer" type="text" class="form-control @error('escala_pfeffer') is-invalid @enderror" name="escala_pfeffer" autofocus>

                                @error('escala_pfeffer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        

                        <h3>Test de Yesavage</h3>
                        <div class="form-group row">
                            <label for="yesavage_uno" class="col-md-4 col-form-label text-md-right">{{ __('En general ¿Está satisfecho con su vida?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_uno" class="form-control @error('yesavage_uno') is-invalid @enderror" value="{{ old('yesavage_uno') }}">>
                                        <option value="{{ old('yesavage_uno') }}">{{ old('yesavage_uno') }}</option>
                                        <option value=1>No</option>
                                        <option value=0>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_uno')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
               
                            <div class="form-group row">
                            <label for="yesavage_dos" class="col-md-4 col-form-label text-md-right">{{ __('¿Ha abandonado muchas de sus tareas habituales?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_dos" class="form-control @error('yesavage_dos') is-invalid @enderror" value="{{ old('yesavage_dos') }}">>
                                        <option value="{{ old('yesavage_dos') }}">{{ old('yesavage_dos') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_dos')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_tres" class="col-md-4 col-form-label text-md-right">{{ __('¿Siente que su vida está vacía?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_tres" class="form-control @error('yesavage_tres') is-invalid @enderror" value="{{ old('yesavage_tres') }}">>
                                        <option value="{{ old('yesavage_tres') }}">{{ old('yesavage_tres') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_tres')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_cuatro" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente con frecuencia aburrido/a') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_cuatro" class="form-control @error('yesavage_cuatro') is-invalid @enderror" value="{{ old('yesavage_cuatro') }}">>
                                        <option value="{{ old('yesavage_cuatro') }}">{{ old('yesavage_cuatro') }}</option>
                                        <option value=1>No</option>
                                        <option value=0>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_cuatro')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_cinco" class="col-md-4 col-form-label text-md-right">{{ __('¿Se encuentro de buen humor la mayor parte del tiempo?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_cinco" class="form-control @error('yesavage_cinco') is-invalid @enderror" value="{{ old('yesavage_cinco') }}">>
                                        <option value="{{ old('yesavage_cinco') }}">{{ old('yesavage_cinco') }}</option>
                                        <option value=1>No</option>
                                        <option value=0>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_cinco')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_seif" class="col-md-4 col-form-label text-md-right">{{ __('¿Teme que algo malo pueda ocurrirle?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_seis" class="form-control @error('yesavage_seis') is-invalid @enderror" value="{{ old('yesavage_seis') }}">>
                                        <option value="{{ old('yesavage_seis') }}">{{ old('yesavage_seis') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_seis')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_siete" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente feliz la mayor parte del tiempo?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_siete" class="form-control @error('yesavage_siete') is-invalid @enderror" value="{{ old('yesavage_siete') }}">>
                                        <option value="{{ old('yesavage_siete') }}">{{ old('yesavage_siete') }}</option>
                                        <option value=1>No</option>
                                        <option value=0>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_siete')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_ocho" class="col-md-4 col-form-label text-md-right">{{ __('¿Con frecuencia se siente desamparado o desprotegido/a?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_ocho" class="form-control @error('yesavage_ocho') is-invalid @enderror" value="{{ old('yesavage_ocho') }}">>
                                        <option value="{{ old('yesavage_ocho') }}">{{ old('yesavage_ocho') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_ocho')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_nueve" class="col-md-4 col-form-label text-md-right">{{ __('¿Prefiere usted quedarse en casa, en lugar de salir y hacer cosas nuevas?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_nueve" class="form-control @error('yesavage_nueve') is-invalid @enderror" value="{{ old('yesavage_nueve') }}">>
                                        <option value="{{ old('yesavage_nueve') }}">{{ old('yesavage_nueve') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_nueve')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_diez" class="col-md-4 col-form-label text-md-right">{{ __('¿Cree que tiene más problemas de memoria que la mayoría de la gente?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_diez" class="form-control @error('yesavage_diez') is-invalid @enderror" value="{{ old('yesavage_diez') }}">>
                                        <option value="{{ old('yesavage_diez') }}">{{ old('yesavage_diez') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_diez')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_once" class="col-md-4 col-form-label text-md-right">{{ __('En estos momentos ¿Piensa que es estupendo estar vivo?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_once" class="form-control @error('yesavage_once') is-invalid @enderror" value="{{ old('yesavage_once') }}">>
                                        <option value="{{ old('yesavage_once') }}">{{ old('yesavage_once') }}</option>
                                        <option value=1>No</option>
                                        <option value=0>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_once')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_doce" class="col-md-4 col-form-label text-md-right">{{ __('¿Siente que la mayoría de la gente está en mejor situación que usted?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_doce" class="form-control @error('yesavage_doce') is-invalid @enderror" value="{{ old('yesavage_doce') }}">>
                                        <option value="{{ old('yesavage_doce') }}">{{ old('yesavage_doce') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_doce')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_trece" class="col-md-4 col-form-label text-md-right">{{ __('¿En estos momentos se siente un/a inutil?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_trece" class="form-control @error('yesavage_trece') is-invalid @enderror" value="{{ old('yesavage_trece') }}">>
                                        <option value="{{ old('yesavage_trece') }}">{{ old('yesavage_trece') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_trece')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_catorce" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente lleno de energía?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_catorce" class="form-control @error('yesavage_catorce') is-invalid @enderror" value="{{ old('yesavage_catorce') }}">>
                                        <option value="{{ old('yesavage_catorce') }}">{{ old('yesavage_catorce') }}</option>
                                        <option value=1>No</option>
                                        <option value=0>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_catorce')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_quince" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente sin esperanza en este momento?') }}</label>
                                <div class="col-md-6">
                                    <select name="yesavage_quince" class="form-control @error('yesavage_catorce') is-invalid @enderror" value="{{ old('yesavage_quince') }}">>
                                        <option value="{{ old('yesavage_quince') }}">{{ old('yesavage_quince') }}</option>
                                        <option value=0>No</option>
                                        <option value=1>Si</option>
                                        
                                        
                                    </select>

                                    @error('yesavage_quince')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <h4>Escala para medición de autoestima </h4>
                            <div class="form-group row">
                            <label for="autoestima_uno" class="col-md-4 col-form-label text-md-right">{{ __('En general estoy satisfecho conmigo mismo') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_uno" type="integer" class="form-control @error('autoestima_uno') is-invalid @enderror" value="{{ old('autoestima_uno') }}">>
                                        <option value="{{ old('autoestima_uno') }}">{{ old('autoestima_uno') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_uno')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_dos" class="col-md-4 col-form-label text-md-right">{{ __('A veces siento que no soy bueno para nada') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_dos" type="integer" class="form-control @error('autoestima_dos') is-invalid @enderror" value="{{ old('autoestima_dos') }}">>
                                        <option value="{{ old('autoestima_dos') }}">{{ old('autoestima_dos') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>  
                                        </select>

                                    @error('autoestima_dos')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_tres" class="col-md-4 col-form-label text-md-right">{{ __('Creo que tengo buenas cualidades') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_tres" type="integer" class="form-control @error('autoestima_tres') is-invalid @enderror" value="{{ old('autoestima_tres') }}">>
                                        <option value="{{ old('autoestima_tres') }}">{{ old('autoestima_tres') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>
                                        </select>  

                                    @error('autoestima_tres')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_cuatro" class="col-md-4 col-form-label text-md-right">{{ __('Soy capaz de hacer las cosas tan bien como la mayoría de personas') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_cuatro" type="integer" class="form-control @error('autoestima_cuatro') is-invalid @enderror" value="{{ old('autoestima_cuatro') }}">>
                                        <option value="{{ old('autoestima_cuatro') }}">{{ old('autoestima_cuatro') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_cuatro')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_cinco" class="col-md-4 col-form-label text-md-right">{{ __('Pienso que tengo muchas cosas de las cuales sentirme orgulloso') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_cinco" type="integer" class="form-control @error('autoestima_cinco') is-invalid @enderror" value="{{ old('autoestima_cinco') }}">>
                                        <option value="{{ old('autoestima_cinco') }}">{{ old('autoestima_cinco') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_cinco')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_seis" class="col-md-4 col-form-label text-md-right">{{ __('A veces me siento un inútil') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_seis" type="integer" class="form-control @error('autoestima_seis') is-invalid @enderror" value="{{ old('autoestima_seis') }}">>
                                        <option value="{{ old('autoestima_seis') }}">{{ old('autoestima_seis') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_seis')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_siete" class="col-md-4 col-form-label text-md-right">{{ __('Creo que soy una persona igual de valiosa a la mayoría de la gente') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_siete" type="integer" class="form-control @error('autoestima_siete') is-invalid @enderror" value="{{ old('autoestima_siete') }}">>
                                        <option value="{{ old('autoestima_siete') }}">{{ old('autoestima_siete') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_siete')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_ocho"  class="col-md-4 col-form-label text-md-right">{{ __('Quisiera respetarme más a mí mismo') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_ocho"  type = "integer" class="form-control @error('autoestima_ocho') is-invalid @enderror" value="{{ old('autoestima_ocho') }}">>
                                        <option value="{{ old('autoestima_ocho') }}">{{ old('autoestima_ocho') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_ocho')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_nueve" class="col-md-4 col-form-label text-md-right">{{ __('Tiendo a pensar que soy un fracasado') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_nueve" type="integer" class="form-control @error('autoestima_nueve') is-invalid @enderror" value="{{ old('autoestima_nueve') }}">>
                                        <option value="{{ old('autoestima_nueve') }}">{{ old('autoestima_nueve') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_nueve')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_nueve" class="col-md-4 col-form-label text-md-right">{{ __('Tengo una visión positiva sobre mí mismo/a') }}</label>
                                <div class="col-md-6">
                                    <select name="autoestima_diez" type="integer" class="form-control @error('autoestima_diez') is-invalid @enderror" value="{{ old('autoestima_diez') }}">>
                                        <option value="{{ old('autoestima_diez') }}">{{ old('autoestima_diez') }}</option>
                                        <option value=1>Totalmente en desacuerdo</option>
                                        <option value=2>En desacuerdo</option>
                                        <option value=3>De acuerdo</option>
                                        <option value=4>Totalmente de acuerdo</option>    
                                    </select>

                                    @error('autoestima_diez')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar y agregar Valoraciones') }}
                                </button>
                            </div>
                        </div>


@endsection