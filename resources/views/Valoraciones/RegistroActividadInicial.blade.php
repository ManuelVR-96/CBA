@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">   

<div class="container">
    <form method="POST" class="form" action="{{route('actividad_inicial.store')}}">    
        <div class="card-header form-tittle_">Registro Actividad Inicial de:  {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
        @csrf
        <div class="form-group row">            
            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
        </div>

        <div class="form-header2"><h1 class="form-tittle2">{{ __('PERFIL ACTIVIDAD FÍSICA') }}</h1></div><br>
        <div class="form-group row">
            <label for="trabajos" class="col-md-6 col-form-label ">{{ __('1. ¿Qué trabajos desempeñó en su vida?') }}</label>
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
        <label for="aun_fisica" class="col-md-6 col-form-label ">{{ __('2. ¿Practica actividad física?') }}</label>
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

        <p>Si respondió que Si a la pregunta anterior, contestar las preguntas 3,4, 5 y 6</p><br>
        <div class="form-group row">
            <label for="cual_fisica" class="col-md-6 col-form-label ">{{ __('3. ¿Qué tipo de actividad física practica?') }}</label>
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
            <label for="frecuencia_fisica" class="col-md-6 col-form-label ">{{ __('4. ¿Con qué frecuencia practica actividad física?') }}</label>
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
        <label for="compañia_fisica" class="col-md-6 col-form-label ">{{ __('5. ¿Practica actividad física en forma individual o con otras personas? ') }}</label>
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
        <label for="desea_fisica" class="col-md-6 col-form-label ">{{ __('6. ¿Qué actividades le gustaría realizar en el C.B.A San José? ') }}</label>
            <div class="col-md-6">                
                <input type="checkbox" name="desea_fisica[]" value="Recreo"> Recreo-Deportivas</br>
                <input type="checkbox" name="desea_fisica[]" value="Gimnasio"> Gimnasio </br>
                <input type="checkbox" name="desea_fisica[]" value="Musicalizadas"> Actividades Musicalizadas</br>
                
                @error('desea_fisica')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-header2"><h1 class="form-tittle2">{{ __('PERFIL RECREACIÓN') }}</h1></div><br>
        <div class="form-group row">
        <label for="tiempo_libre" class="col-md-6 col-form-label ">{{ __('1. Qué hace en su tiempo libre? (actividades recreativas)') }}</label>
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
        <label for="tiene_hobbies" class="col-md-6 col-form-label ">{{ __('2. Tiene Hobbies?') }}</label>
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

        <p>Si respondió SÍ a la pregunta anterior, contestar las preguntas 3, 4 y 5</p><br>
        <div class="form-group row">
            <label for="cual_hobbies" class="col-md-6 col-form-label ">{{ __('3. Cual es o era su Hobbie y con qué frencuencia lo practicaba o practica (Días y horas diarias)') }}</label>
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
        <label for="compañia_recreacion" class="col-md-6 col-form-label ">{{ __('4. ¿Practica su hobby en forma individual o con otras personas? ') }}</label>
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
        <label for="quiere_realizar_recreacion" class="col-md-6 col-form-label ">{{ __('5. ¿En qué actividades recreativas le gustaría participar en el C.B.A San José? ') }}</label>
            <div class="col-md-6">  
                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Juegos">  Juegos de mesa, Juegos de salón o juegos tradicionales</br>
                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Integraciones">   Integraciones artísticas-culturales </br>
                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Salidas"> Salidas de esparcimiento o artísticas-culturales</br>
                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Recreo-Deportivas">   Actividades recreo-deportivas</br>
                <input type="checkbox" name="quiere_realizar_recreacion[]" value="Baile">   Baile</br>
                
                @error('actividades')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="evaluacion" class="col-md-6 col-form-label ">{{ __('Evaluación') }}</label>
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
            <label for="observaciones" class="col-md-6 col-form-label ">{{ __('Observaciones') }}</label>
            <div class="col-md-6">
                <Textarea id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ old('observaciones') }}"></textarea>
                @error('observaciones')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
       
        <br>        
        <button type="submit" class="btn-submit">
            {{ __('GUARDAR Y AGREGAR VALORACIÓN') }}
        </button>
           
    </form>
</div>
<div class="gradient"></div>
@endsection
