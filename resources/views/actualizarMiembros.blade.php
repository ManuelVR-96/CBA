@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form enctype="multipart/form-data" method="POST" action="{{route('miembros.update', $miembro->id)}}" class="form">
                  
        <div class="form-header"><br>
            <img src="/../img/form.png" class="center">
            <h1 class="form-tittle">{{ __('Formulario de Edición') }}</h1><br>
        </div>

        <div class="card-body">                    
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="avatar" class="col-md-5 col-form-label">{{ __('Foto de perfil') }}</label>
                <div class="col-md-7">
                    <img src = "/uploads/avatar/{{$miembro->avatar}}"><br><br>
                    <input type="file" name="avatar">

                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="id" class="col-md-5 col-form-label">{{ __('No Identificación') }}</label>
                <div class="col-md-7">
                    <input id="cédula" type="text" class="form-control @error('cédula') is-invalid @enderror" name="cédula" value= "{{$miembro->cédula}}">

                    @error('cédula')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="nombres" class="col-md-5 col-form-label">{{ __('Nombres') }}</label>
                <div class="col-md-7">
                    <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ $miembro->nombres }}" autofocus>

                    <!-- @error('nombres')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="apellidos" class="col-md-5 col-form-label">{{ __('Apellidos') }}</label>
                <div class="col-md-7">
                    <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ $miembro->apellidos }}" autofocus>

                    <!-- @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="nivel" class="col-md-5 col-form-label">{{ __('Nivel Educativo') }}</label>
                <div class="col-md-7">
                    <select name="nivel" class="form-control @error('nivel') is-invalid @enderror" value="{{ $miembro->nivel_educativo }}">
                        <option value="{{$miembro->nivel_educativo}}">{{$miembro->nivel_educativo}}</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Tecnico Y/o Tecnologo">Tecnico Y/o Tecnologo</option>
                        <option value="Profesional">Profesional</option>
                        <option value="Postgrado">Postgrado</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="direccion" class="col-md-5 col-form-label">{{ __('Dirección') }}</label>
                <div class="col-md-7">
                    <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ $miembro->dirección }}"  autofocus>

                    <!-- @error('direccion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="telefono" class="col-md-5 col-form-label">{{ __('Teléfono') }}</label>
                <div class="col-md-7">
                    <input id="telefono" type="integer" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $miembro->telefono }}"  autofocus>

                    <!-- @error('telefono')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="lugar" class="col-md-5 col-form-label">{{ __('Lugar de Nacimiento') }}</label>
                <div class="col-md-7">
                    <input id="lugar" type="text" class="form-control @error('lugar') is-invalid @enderror" name="lugar" value="{{ $miembro->Lugar_de_nacimiento }}" autofocus>

                    <!-- @error('lugar')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="nacimiento" class="col-md-5 col-form-label">{{ __('Fecha de Nacimiento') }}</label>
                    <div class="col-md-7">
                        <input class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" value="{{ $miembro->fecha_de_nacimiento }}" type="date">
                    </div>
            </div>

            <div class="form-group row">
                <label for="vinculacion" class="col-md-5 col-form-label">{{ __('Fecha de Vinculación') }}</label>
                <div class="col-md-7">
                <input class="form-control @error('vinculacion') is-invalid @enderror" name="vinculacion" value="{{ $miembro->fecha_de_ingreso }}" type="date">
                </div>
            </div>

            <div class="form-group row">
                <label for="seguridad" class="col-md-5 col-form-label">{{ __('Seguridad Social') }}</label>
                <div class="col-md-7">
                    <input id="seguridad" type="text" class="form-control @error('seguridad') is-invalid @enderror" name="seguridad" value="{{ $miembro->seguridad_social }}" autofocus>

                    <!-- @error('seguridad')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="primer_acudiente" class="col-md-5 col-form-label">{{ __('Primer Acudiente') }}</label>
                <div class="col-md-7">
                    <input id="primer_acudiente" type="text" class="form-control @error('primer_acudiente') is-invalid @enderror" name="primer_acudiente" value="{{ $miembro->primer_acudiente }}"autofocus>

                    <!-- @error('primer_acudiente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="segundo_acudiente" class="col-md-5 col-form-label">{{ __('Segundo Acudiente') }}</label>
                <div class="col-md-7">
                    <input id="segundo_acudiente" type="text" class="form-control @error('segundo_acudiente') is-invalid @enderror" name="segundo_acudiente" value="{{ $miembro->segundo_acudiente }}" autofocus>

                    <!-- @error('segundo_acudiente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="servicio_funerario" class="col-md-5 col-form-label">{{ __('Servicio Funerario') }}</label>
                <div class="col-md-7">
                    <select name="servicio_funerario" class="form-control @error('servicio_funerario') is-invalid @enderror" value="{{ $miembro->servicio_funerario }}">
                        <option value="{{$miembro->servicio_funerario}}">{{$miembro->servicio_funerario}}</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="entidad_funeraria" class="col-md-5 col-form-label">{{ __('Entidad Funeraria') }}</label>
                <div class="col-md-7">
                    <input id="entidad_funeraria" type="text" class="form-control @error('entidad_funeraria') is-invalid @enderror" name="entidad_funeraria" value="{{ $miembro->entidad_funeraria }}"autofocus>

                    <!-- @error('entidad_funeraria')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_economica" class="col-md-5 col-form-label">{{ __('Dependencia Económica') }}</label>
                <div class="col-md-7">
                    <input id="dependencia_economica" type="text" class="form-control @error('dependencia_economica') is-invalid @enderror" name="dependencia_economica" value="{{ $miembro->dependencia_económica }}" autofocus>

                    <!-- @error('dependencia_economica')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_afectiva" class="col-md-5 col-form-label">{{ __('Dependencia Afectiva') }}</label>
                <div class="col-md-7">
                    <input id="dependencia_afectiva" type="text" class="form-control @error('dependencia_afectiva') is-invalid @enderror" name="dependencia_afectiva" value="{{ $miembro->dependencia_afectiva }}" autofocus>

                    <!-- @error('dependencia_afectiva')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="relacion_familiar" class="col-md-5 col-form-label">{{ __('Relación Familiar') }}</label>
                <div class="col-md-7">
                    <input id="relacion_familiar" type="text" class="form-control @error('relacion_familiar') is-invalid @enderror" name="relacion_familiar" value="{{ $miembro->relación_familiar }}" autofocus>

                    <!-- @error('relacion_familiar')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="hobbies" class="col-md-5 col-form-label">{{ __('Hobbies') }}</label>
                <div class="col-md-7">
                    <Textarea id="hobbies" type="text" class="form-control @error('hobbies') is-invalid @enderror" name="hobbies" value="{{$miembro->hobbies}}" autofocus>{{$miembro->hobbies}}</Textarea>

                    <!-- @error('hobbies')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="motivo_ingreso" class="col-md-5 col-form-label">{{ __('Motivo Ingreso') }}</label>
                <div class="col-md-7">
                    <Textarea id="motivo_ingreso" type="text" class="form-control @error('motivo_ingreso') is-invalid @enderror" name="motivo_ingreso" value="{{ $miembro->motivo_ingreso }}" autofocus>{{ $miembro->motivo_ingreso }}</Textarea>

                    <!-- @error('motivo_ingreso')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="tipo_sangre" class="col-md-5 col-form-label">{{ __('Tipo Sangre') }}</label>
                <div class="col-md-7">
                    <select name="tipo_sangre" class="form-control @error('tipo_sangre') is-invalid @enderror" value="{{ $miembro->Tipo_sangre }}" type="text">
                        <option value="{{$miembro->Tipo_sangre}}">{{$miembro->Tipo_Sangre}}</option>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                    </select>

                    <!-- @error('tipo_sangre')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="eps" class="col-md-5 col-form-label">{{ __('EPS') }}</label>
                <div class="col-md-7">
                    <input id="eps" type="text" class="form-control @error('eps') is-invalid @enderror" name="eps" value="{{ $miembro->EPS }}" autofocus>

                    <!-- @error('eps')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="morbilidad" class="col-md-5 col-form-label">{{ __('Morbilidad') }}</label>
                <div class="col-md-7">
                    <input id="morbilidad" type="text" class="form-control @error('morbilidad') is-invalid @enderror" name="morbilidad" value="{{ $miembro->morbilidad }}"autofocus>

                    <!-- @error('morbilidad')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="genero" class="col-md-5 col-form-label">{{ __('Género') }}</label>
                <div class="col-md-7">
                    <select name="genero" class="form-control @error('genero') is-invalid @enderror" value="{{ $miembro->género }}" type="text">
                        <option value="{{$miembro->género}}">{{$miembro->género}}</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otros">Otros</option>
                    </select>

                    <!-- @error('genero')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="medicinas" class="col-md-5 col-form-label">{{ __('Medicinas') }}</label>
                <div class="col-md-7">
                    <Textarea id="medicinas" type="text" class="form-control @error('medicinas') is-invalid @enderror" name="medicinas" value="{{ $miembro->medicinas }}" autofocus>{{$miembro->medicinas}}</Textarea>

                    <!-- @error('medicinas')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <button type="submit" class="btn-submit">
                {{ __('ACTUALIZAR REGISTRO') }}
            </button>                       
           
        </div>
    </form>  
</div>
@endsection
