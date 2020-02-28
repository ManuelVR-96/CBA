@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">   

<div class="container">
    <form method="POST" class="form" action="{{route('actividad_inicial.store')}}">
        <div class="card-header form-tittle_">Registro Actividad Inicial de: {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div><br>
        <div class="card-header form-tittle_">Realizado por: {{$acti_Inicial->encargado_->nombres}} {{$acti_Inicial->encargado_->apellidos }} </div> 
        <div class="card-body">
            <fieldset disabled>
                @csrf
                <div class="form-group row">                    
                    <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                </div>

                <div class="form-header2"><h1 class="form-tittle2">{{ __('PERFIL ACTIVIDAD FÍSICA') }}</h1></div><br>
                <div class="form-group row">
                    <label for="trabajos" class="col-md-6 col-form-label">{{ __('¿Qué trabajos desempeñó en su vida?)') }}</label>
                    <div class="col-md-6">
                        <Textarea id="trabajos" type="text" class="form-control @error('trabajos') is-invalid @enderror" name="trabajos" value="{{ $acti_Inicial->trabajos }}">{{$acti_Inicial->trabajos}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="aun_fisica" class="col-md-6 col-form-label">{{ __('¿Practica actividad física?') }}</label>
                    <div class="col-md-6">
                        <input name="aun_fisica" class="form-control @error('aun_fisica') is-invalid @enderror" value="{{ $acti_Inicial->aun_fisica }}">
                    </div>
                </div>

                <br><p>Si respondió que Si a la pregunta anterior, contestar las preguntas 3,4, 5 y 6</p><br>
                <div class="form-group row">
                    <label for="cual_fisica" class="col-md-6 col-form-label">{{ __('¿Qué tipo de actividad física practica?') }}</label>
                    <div class="col-md-6">
                        <Textarea id="cual_fisica" type="text" class="form-control @error('cual_fisica') is-invalid @enderror" name="cual_fisica" value="{{ $acti_Inicial->cual_fisica }}">{{ $acti_Inicial->cual_fisica }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="frecuencia_fisica" class="col-md-6 col-form-label">{{ __('¿Con qué frecuencia practica actividad física?') }}</label>
                    <div class="col-md-6">
                        <Textarea id="frecuencia_fisica" type="text" class="form-control @error('frecuencia_fisica') is-invalid @enderror" name="frecuencia_fisica" value="{{ $acti_Inicial->frecuencia_fisica}}">{{ $acti_Inicial->frecuencia_fisica }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="compañia_fisica" class="col-md-6 col-form-label">{{ __('¿Practica actividad física en forma individual o con otras personas? ') }}</label>
                    <div class="col-md-6">
                        <input name="compañia_fisica" class="form-control @error('compañia_fisica') is-invalid @enderror" value="{{ $acti_Inicial->compañia_fisica}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="desea_fisica" class="col-md-6 col-form-label">{{ __('¿Qué actividades le gustaría realizar en el C.B.A San José? ') }}</label>
                    <div class="col-md-6">                            
                        <input type="checkbox" name="desea_fisica[]" @if(in_array("Recreo",$array_fisica)) checked= 'checked' @endif value="Recreo" >   Recreo-Deportivas</br>
                        <input type="checkbox" name="desea_fisica[]" @if(in_array("Gimnasio",$array_fisica)) checked= 'checked' @endif value="Gimnasio">    Gimnasio </br>
                        <input type="checkbox" name="desea_fisica[]" @if(in_array("Musicalizadas",$array_fisica)) checked= 'checked' @endif value="Musicalizadas">  Actividades Musicalizadas</br>
                    </div>
                </div>        

                <div class="form-header2"><h1 class="form-tittle2">{{ __('PERFIL RECREACIÓN') }}</h1></div><br>
                <div class="form-group row">
                    <label for="tiempo_libre" class="col-md-6 col-form-label">{{ __('1.Qué hace en su tiempo libre? (actividades recreativas)') }}</label>
                    <div class="col-md-6">
                        <Textarea id="tiempo_libre" type="text" class="form-control @error('tiempo_libre') is-invalid @enderror" name="tiempo_libre" value="{{ $acti_Inicial->tiempo_libre }}">{{ $acti_Inicial->tiempo_libre }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tiene_hobbies" class="col-md-6 col-form-label">{{ __('Tiene Hobbies?') }}</label>
                    <div class="col-md-6">
                        <input name="tiene_hobbies" class="form-control @error('tiene_hobbies') is-invalid @enderror" value="{{ $acti_Inicial->tiene_hobbies }}">   
                    </div>
                </div>

                <br><p>Si respondió SÍ a la pregunta anterior, contestar las preguntas 3, 4 y 5</p><br>
                <div class="form-group row">
                    <label for="cual_hobbies" class="col-md-6 col-form-label">{{ __('Cual es o era su Hobbie y con qué frencuencia lo practicaba o practica (Días y horas diarias)') }}</label>
                    <div class="col-md-6">
                        <Textarea id="cual_hobbies" type="text" class="form-control @error('cual_hobbies') is-invalid @enderror" name="cual_hobbies" value="{{ $acti_Inicial->cual_hobbies }}">{{ $acti_Inicial->cual_hobbies }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="compañia_recreacion" class="col-md-6 col-form-label">{{ __('¿Practica su hobby en forma individual o con otras personas? ') }}</label>
                    <div class="col-md-6">
                        <input name="compañia_hobbie" class="form-control @error('compañia_hobbie') is-invalid @enderror" value="{{ $acti_Inicial->compañia_hobbie }}">  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quiere_realizar_recreacion" class="col-md-6 col-form-label">{{ __('¿En qué actividades recreativas le gustaría participar en el C.B.A San José? ') }}</label>
                    <div class="col-md-6">                        
                        <input type="checkbox" name="quiere_realizar_recreacion[]" >Juegos de mesa, Juegos de salón o juegos tradicionales</br>
                        <input type="checkbox" name="quiere_realizar_recreacion[]"@if(in_array("Integraciones",$array_recreacion)) checked= 'checked' @endif>   Integraciones artísticas-culturales </br>
                        <input type="checkbox" name="quiere_realizar_recreacion[]" @if(in_array("Salidas",$array_recreacion)) checked= 'checked' @endif>    Salidas de esparcimiento o artísticas-culturales</br>
                        <input type="checkbox" name="quiere_realizar_recreacion[]" @if(in_array("Recreo-Deportivas",$array_recreacion)) checked= 'checked' @endif>  Actividades recreo-deportivas</br>
                        <input type="checkbox" name="quiere_realizar_recreacion[]" @if(in_array("Baile",$array_recreacion)) checked= 'checked' @endif>  Baile</br>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="evaluacion" class="col-md-6 col-form-label">{{ __('Evaluación') }}</label>
                    <div class="col-md-6">
                        <Textarea id="evaluacion" type="text" class="form-control @error('evaluacion') is-invalid @enderror" name="evaluacion" value="{{ $acti_Inicial->evaluacion }}">{{ $acti_Inicial->evaluacion }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="observaciones" class="col-md-6 col-form-label">{{ __('Observaciones') }}</label>
                    <div class="col-md-6">
                        <Textarea id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ $acti_Inicial->observaciones }}">{{ $acti_Inicial->observaciones }}</textarea>
                    </div>
                </div>
            </fieldset>
        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection
