@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Actividad Inicial de {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('actividad_inicial.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $nuevoCliente->nombres }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>
                        <h5>PERFIL ACTIVIDAD FÍSICA</h5>

<div class="form-group row">
                <label for="trabajos" class="col-md-4 col-form-label text-md-right">{{ __('¿Qué trabajos desempeñó en su vida?)') }}</label>
                <div class="col-md-6">
                    <Textarea id="trabajos" type="text" class="form-control @error('trabajos') is-invalid @enderror" name="trabajos" value="{{ old('trabajos') }}"></textarea>
                    @error('trabajos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

<div class="form-group row">
                <label for="aun_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Practica actividad física?') }}</label>
                    <div class="col-md-6">
                        <select name="aun_fisica" class="form-control @error('aun_fisica') is-invalid @enderror" value="{{ old('aun_fisica') }}">
                            <option value="{{ old('aun_fisica') }}">{{ old('aun_fisica') }}</option>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                            
                            
                        </select>

                        @error('aun_fisica')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    <p>Si respondió que Si a la pregunta anterior, contestar las preguntas 3,4, 5 y 6</p>


        <div class="form-group row">
            <label for="cual_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Qué tipo de actividad física practica?') }}</label>
            <div class="col-md-6">
                <Textarea id="cual_fisica" type="text" class="form-control @error('cual_fisica') is-invalid @enderror" name="cual_fisica" value="{{ old('cual_fisica') }}"></textarea>
                @error('cual_fisica')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="frecuencia_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Con qué frecuencia practica actividad física?') }}</label>
            <div class="col-md-6">
                <Textarea id="frecuencia_fisica" type="text" class="form-control @error('frecuencia_fisica') is-invalid @enderror" name="frecuencia_fisica" value="{{ old('frecuencia_fisica') }}"></textarea>
                @error('frecuencia_fisica')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
                            <label for="compañia_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Practica actividad física en forma individual o con otras personas? ') }}</label>
                                <div class="col-md-6">
                                    <select name="compañia_fisica" class="form-control @error('compañia_fisica') is-invalid @enderror" value="{{ old('compañia_fisica') }}">
                                        <option value="{{ old('compañia_fisica') }}">{{ old('compañia_fisica') }}</option>
                                        <option value="Solo">Solo</option>
                                        <option value="Acomapañado">Acompañado</option>
                                        
                                        
                                    </select>

                                    @error('compañia_fisica')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="desea_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Qué actividades le gustaría realizar en el C.B.A San José? ') }}</label>
                                <div class="col-md-6">
                                   
                                <input type="checkbox" name="desea_fisica[]" value="Recreo">Recreo-Deportivas</br>
                                <input type="checkbox" name="desea_fisica[]" value="Gimnasio">Gimnasio </br>
                                <input type="checkbox" name="desea_fisica[]" value="Musicalizadas">Actividades Musicalizadas</br>
                              
 

                                    @error('desea_fisica')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


        

            <h5>PERFIL RECREACIÓN</h5>

            <div class="form-group row">
                            <label for="tiempo_libre" class="col-md-4 col-form-label text-md-right">{{ __('1.Qué hace en su tiempo libre? (actividades recreativas)') }}</label>
                            <div class="col-md-6">
                                <Textarea id="tiempo_libre" type="text" class="form-control @error('tiempo_libre') is-invalid @enderror" name="tiempo_libre" value="{{ old('tiempo_libre') }}"></textarea>
                                @error('tiempo_libre')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            <div class="form-group row">
                            <label for="tiene_hobbies" class="col-md-4 col-form-label text-md-right">{{ __('Tiene Hobbies?') }}</label>
                                <div class="col-md-6">
                                    <select name="tiene_hobbies" class="form-control @error('tiene_hobbies') is-invalid @enderror" value="{{ old('tiene_hobbies') }}">
                                        <option value="{{ old('tiene_hobbies') }}">{{ old('tiene_hobbies') }}</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        
                                        
                                    </select>

                                    @error('tiene_hobbies')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                <p>Si respondió SÍ a la pregunta anterior, contestar las preguntas 3, 4 y 5</p>
            
    

                <div class="form-group row">
                        <label for="cual_hobbies" class="col-md-4 col-form-label text-md-right">{{ __('Cual es o era su Hobbie y con qué frencuencia lo practicaba o practica (Días y horas diarias)') }}</label>
                        <div class="col-md-6">
                            <Textarea id="cual_hobbies" type="text" class="form-control @error('cual_hobbies') is-invalid @enderror" name="cual_hobbies" value="{{ old('cual_hobbies') }}"></textarea>
                            @error('cual_hobbies')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                <div class="form-group row">
                            <label for="compañia_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('¿Practica su hobby en forma individual o con otras personas? ') }}</label>
                                <div class="col-md-6">
                                    <select name="compañia_hobbie" class="form-control @error('compañia_hobbie') is-invalid @enderror" value="{{ old('compañia_hobbie') }}">
                                        <option value="{{ old('compañia_hobbie') }}">{{ old('compañia_hobbie') }}</option>
                                        <option value="Solo">Solo</option>
                                        <option value="Acomapañado">Acompañada</option>
                                        
                                        
                                    </select>

                                    @error('compañia_hobbie')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                <div class="form-group row">
                            <label for="quiere_realizar_recreacion" class="col-md-4 col-form-label text-md-right">{{ __('¿En qué actividades recreativas le gustaría participar en el C.B.A San José? ') }}</label>
                                <div class="col-md-6">
                                   
                                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Juegos">Juegos de mesa, Juegos de salón o juegos tradicionales</br>
                                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Integraciones">Integraciones artísticas-culturales </br>
                                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Salidas">Salidas de esparcimiento o artísticas-culturales</br>
                                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Recreo-Deportivas">Actividades recreo-deportivas</br>
                                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Baile">Baile</br>
 

                                    @error('actividades')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
            <label for="evaluacion" class="col-md-4 col-form-label text-md-right">{{ __('Evaluación') }}</label>
            <div class="col-md-6">
                <Textarea id="evaluacion" type="text" class="form-control @error('evaluacion') is-invalid @enderror" name="evaluacion" value="{{ old('evaluacion') }}"></textarea>
                @error('evaluacion')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="observaciones" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones') }}</label>
            <div class="col-md-6">
                <Textarea id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ old('observaciones') }}"></textarea>
                @error('observaciones')
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
