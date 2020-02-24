@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Registro Test Delta de {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
                <div class="card-header">Realizado por {{$psico_inicial->encargado_->nombres}} {{$psico_inicial->encargado_->apellidos }} </div>
                <div class="card-body">
                    <form method="POST" action="{{route('psico_inicial.store')}}">
                    <fieldset disabled>
                        @csrf

        

                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $nuevoCliente->nombres }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>

                      

                            <div class="form-group row">
                            <label for="escala_pfeffer" class="col-md-4 col-form-label text-md-right">{{ __('Escala Pfeffer') }}</label>
                            <div class="col-md-6">
                                <input id="escala_pfeffer" type="text" class="form-control @error('escala_pfeffer') is-invalid @enderror" name="escala_pfeffer" value="{{$psico_inicial->escala_pfeffer}}">

                            </div>
                        </div>


                        

                        <h3>Test de Yesavage</h3>
                        <div class="form-group row">
                            <label for="yesavage_uno" class="col-md-4 col-form-label text-md-right">{{ __('En general ¿Está satisfecho con su vida?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_uno" class="form-control @error('yesavage_uno') is-invalid @enderror" value="{{ $psico_inicial->yesavage_uno }}">
                                       

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
                                    <input name="yesavage_dos" class="form-control @error('yesavage_dos') is-invalid @enderror" value="{{ $psico_inicial->yesavage_dos }}">
                                        
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
                                    <input name="yesavage_tres" class="form-control @error('yesavage_tres') is-invalid @enderror" value="{{ $psico_inicial->yesavage_tres }}">
                                        
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_cuatro" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente con frecuencia aburrido/a') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_cuatro" class="form-control @error('yesavage_cuatro') is-invalid @enderror" value="{{ $psico_inicial->yesavage_cuatro }}">
                                        
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_cinco" class="col-md-4 col-form-label text-md-right">{{ __('¿Se encuentro de buen humor la mayor parte del tiempo?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_cinco" class="form-control @error('yesavage_cinco') is-invalid @enderror" value="{{ $psico_inicial->yesavage_cinco }}">
                                        
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_seif" class="col-md-4 col-form-label text-md-right">{{ __('¿Teme que algo malo pueda ocurrirle?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_seis" class="form-control @error('yesavage_seis') is-invalid @enderror" value="{{ $psico_inicial->yesavage_seis }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_siete" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente feliz la mayor parte del tiempo?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_siete" class="form-control @error('yesavage_siete') is-invalid @enderror" value="{{ $psico_inicial->yesavage_siete }}">
                                        
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_ocho" class="col-md-4 col-form-label text-md-right">{{ __('¿Con frecuencia se siente desamparado o desprotegido/a?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_ocho" class="form-control @error('yesavage_ocho') is-invalid @enderror" value="{{ $psico_inicial->yesavage_ocho }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_nueve" class="col-md-4 col-form-label text-md-right">{{ __('¿Prefiere usted quedarse en casa, en lugar de salir y hacer cosas nuevas?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_nueve" class="form-control @error('yesavage_nueve') is-invalid @enderror" value="{{ $psico_inicial->yesavage_nueve }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_diez" class="col-md-4 col-form-label text-md-right">{{ __('¿Cree que tiene más problemas de memoria que la mayoría de la gente?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_diez" class="form-control @error('yesavage_diez') is-invalid @enderror" value="{{ $psico_inicial->yesavage_diez }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_once" class="col-md-4 col-form-label text-md-right">{{ __('En estos momentos ¿Piensa que es estupendo estar vivo?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_once" class="form-control @error('yesavage_once') is-invalid @enderror" value="{{ $psico_inicial->yesavage_once }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_doce" class="col-md-4 col-form-label text-md-right">{{ __('¿Siente que la mayoría de la gente está en mejor situación que usted?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_doce" class="form-control @error('yesavage_doce') is-invalid @enderror" value="{{ $psico_inicial->yesavage_doce }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_trece" class="col-md-4 col-form-label text-md-right">{{ __('¿En estos momentos se siente un/a inutil?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_trece" class="form-control @error('yesavage_trece') is-invalid @enderror" value="{{ $psico_inicial->yesavage_trece }}">
                                     
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_catorce" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente lleno de energía?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_catorce" class="form-control @error('yesavage_catorce') is-invalid @enderror" value="{{ $psico_inicial->yesavage_catorce }}">
                                      
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="yesavage_quince" class="col-md-4 col-form-label text-md-right">{{ __('¿Se siente sin esperanza en este momento?') }}</label>
                                <div class="col-md-6">
                                    <input name="yesavage_quince" class="form-control @error('yesavage_catorce') is-invalid @enderror" value="{{ $psico_inicial->yesavage_quince }}">
                                       
                                </div>
                            </div>


                            <h4>Escala para medición de autoestima </h4>
                            <div class="form-group row">
                            <label for="autoestima_uno" class="col-md-4 col-form-label text-md-right">{{ __('En general estoy satisfecho conmigo mismo') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_uno" type="integer" class="form-control @error('autoestima_uno') is-invalid @enderror" value="{{ $psico_inicial->autoestima_uno }}">
                                        
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_dos" class="col-md-4 col-form-label text-md-right">{{ __('A veces siento que no soy bueno para nada') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_dos" type="integer" class="form-control @error('autoestima_dos') is-invalid @enderror" value="{{ $psico_inicial->autoestima_dos }}">
                                      
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_tres" class="col-md-4 col-form-label text-md-right">{{ __('Creo que tengo buenas cualidades') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_tres" type="integer" class="form-control @error('autoestima_tres') is-invalid @enderror" value="{{ $psico_inicial->autoestima_tres }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_cuatro" class="col-md-4 col-form-label text-md-right">{{ __('Soy capaz de hacer las cosas tan bien como la mayoría de personas') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_cuatro" type="integer" class="form-control @error('autoestima_cuatro') is-invalid @enderror" value="{{ $psico_inicial->autoestima_cuatro }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_cinco" class="col-md-4 col-form-label text-md-right">{{ __('Pienso que tengo muchas cosas de las cuales sentirme orgulloso') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_cinco" type="integer" class="form-control @error('autoestima_cinco') is-invalid @enderror" value="{{ $psico_inicial->autoestima_cinco }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_seis" class="col-md-4 col-form-label text-md-right">{{ __('A veces me siento un inútil') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_seis" type="integer" class="form-control @error('autoestima_seis') is-invalid @enderror" value="{{ $psico_inicial->autoestima_seis }}">
                                        
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_siete" class="col-md-4 col-form-label text-md-right">{{ __('Creo que soy una persona igual de valiosa a la mayoría de la gente') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_siete" type="integer" class="form-control @error('autoestima_siete') is-invalid @enderror" value="{{ $psico_inicial->autoestima_siete }}">

                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_ocho"  class="col-md-4 col-form-label text-md-right">{{ __('Quisiera respetarme más a mí mismo') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_ocho"  type = "integer" class="form-control @error('autoestima_ocho') is-invalid @enderror" value="{{ $psico_inicial->autoestima_ocho }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_nueve" class="col-md-4 col-form-label text-md-right">{{ __('Tiendo a pensar que soy un fracasado') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_nueve" type="integer" class="form-control @error('autoestima_nueve') is-invalid @enderror" value="{{ $psico_inicial->autoestima_nueve }}">
                                       
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="autoestima_nueve" class="col-md-4 col-form-label text-md-right">{{ __('Tengo una visión positiva sobre mí mismo/a') }}</label>
                                <div class="col-md-6">
                                    <input name="autoestima_diez" type="integer" class="form-control @error('autoestima_diez') is-invalid @enderror" value="{{ $psico_inicial->autoestima_diez }}">
                                        
                                </div>
                            </div>



@endsection