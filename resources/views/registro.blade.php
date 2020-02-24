@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form enctype="multipart/form-data" method="POST" action="{{route('miembros.store')}}" class="form">
    
        <div class="form-header"><br>
            <img src="/../img/form.png" class="center">
            <h1 class="form-tittle">{{ __('Formulario de Registro') }}</h1>
        </div>

        <div class="card-body">
            @csrf

            <div class="form-group row">
                <label for="avatar" class="col-md-3 col-form-label text-md-right">{{ __('Foto de perfil') }}</label>
                <div class="col-md-8">
                    <input type="file" name="avatar" class="form-control">

                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="id" class="col-md-3 col-form-label text-md-right">{{ __('No Identificación') }}</label>
                <div class="col-md-8">
                    <input id="cédula" type="text" class="form-control @error('cédula') is-invalid @enderror" name="cédula" value="{{ old('cédula') }}"autofocus>

                    @error('cédula')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="nombres" class="col-md-3 col-form-label text-md-right">{{ __('Nombres') }}</label>
                <div class="col-md-8">
                    <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}"  autofocus>

                    @error('nombres')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="apellidos" class="col-md-3 col-form-label text-md-right">{{ __('Apellidos') }}</label>
                <div class="col-md-8">
                    <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" autofocus>

                    @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="nivel" class="col-md-3 col-form-label text-md-right">{{ __('Nivel Educativo') }}</label>
                <div class="col-md-8">
                    <select name="nivel" class="form-control @error('nivel') is-invalid @enderror" value="{{ old('nivel') }}" name="nivel">>
                        <option value="{{ old('nivel') }}">{{ old('nivel') }}</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Tecnico Y/o Tecnologo">Tecnico Y/o Tecnologo</option>
                        <option value="Profesional">Profesional</option>
                        <option value="Postgrado">Postgrado</option>
                    </select>
                    @error('nivel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="direccion" class="col-md-3 col-form-label text-md-right">{{ __('Dirección') }}</label>
                <div class="col-md-8">
                    <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}"  autofocus>

                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="telefono" class="col-md-3 col-form-label text-md-right">{{ __('Teléfono') }}</label>
                <div class="col-md-8">
                    <input id="telefono" type="integer" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}"  autofocus>

                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="lugar" class="col-md-3 col-form-label text-md-right">{{ __('Lugar de Nacimiento') }}</label>
                <div class="col-md-8">
                    <input id="lugar" type="text" class="form-control @error('lugar') is-invalid @enderror" name="lugar" value="{{ old('lugar') }}" autofocus>

                    @error('lugar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="nacimiento" class="col-md-3 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                <div class="col-md-8">
                    <input class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" type="date" value="1969-01-01" max="1969-12-31">  
                    
                    @error('nacimiento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                      
                </div>                           
            </div>

            <div class="form-group row">
                <label for="vinculacion" class="col-md-3 col-form-label text-md-right">{{ __('Fecha de Vinculación') }}</label>
                <div class="col-md-8">
                    <input class="form-control @error('vinculacion') is-invalid @enderror" name="vinculacion" value="{{ old('vinculacion') }}" type="date" min="1980-01-01">   
                    @error('seguridad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                     
                </div>                           
            </div>

            <div class="form-group row">
                <label for="seguridad" class="col-md-3 col-form-label text-md-right">{{ __('Seguridad Social') }}</label>
                <div class="col-md-8">
                    <input id="seguridad" type="text" class="form-control @error('seguridad') is-invalid @enderror" name="seguridad" value="{{ old('seguridad') }}" autofocus>

                    @error('seguridad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="primer_acudiente" class="col-md-3 col-form-label text-md-right">{{ __('Primer Acudiente') }}</label>
                <div class="col-md-8">
                    <input id="primer_acudiente" type="text" class="form-control @error('primer_acudiente') is-invalid @enderror" name="primer_acudiente" value="{{ old('primer_acudiente') }}" autofocus>

                    @error('primer_acudiente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="segundo_acudiente" class="col-md-3 col-form-label text-md-right">{{ __('Segundo Acudiente') }}</label>
                <div class="col-md-8">
                    <input id="segundo_acudiente" type="text" class="form-control @error('segundo_acudiente') is-invalid @enderror" name="segundo_acudiente" value="{{ old('segundo_acudiente') }}" autofocus>

                    @error('segundo_acudiente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="servicio_funerario" class="col-md-3 col-form-label text-md-right">{{ __('Servicio Funerario') }}</label>
                <div class="col-md-8">
                    <select name="servicio_funerario" class="form-control @error('servicio_funerario') is-invalid @enderror" value="{{ old('servicio_funerario') }}" name="servicio_funerario">>
                        <option value="{{ old('servicio_funerario') }}">{{ old('servicio_funerario') }}</option>                                   
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                    </select>
                    @error('servicio_funerario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="entidad_funeraria" class="col-md-3 col-form-label text-md-right">{{ __('Entidad Funeraria') }}</label>
                <div class="col-md-8">
                    <input id="entidad_funeraria" type="text" class="form-control @error('entidad_funeraria') is-invalid @enderror" name="entidad_funeraria" value="{{ old('entidad_funeraria') }}"  autofocus>

                    @error('entidad_funeraria')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_economica" class="col-md-3 col-form-label text-md-right">{{ __('Dependencia Económica') }}</label>
                <div class="col-md-8">
                    <input id="dependencia_economica" type="text" class="form-control @error('dependencia_economica') is-invalid @enderror" name="dependencia_economica" value="{{ old('dependencia_economica') }}" autofocus>

                    @error('dependencia_economica')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_afectiva" class="col-md-3 col-form-label text-md-right">{{ __('Dependencia Afectiva') }}</label>
                <div class="col-md-8">
                    <input id="dependencia_afectiva" type="text" class="form-control @error('dependencia_afectiva') is-invalid @enderror" name="dependencia_afectiva" value="{{ old('dependencia_afectiva') }}"  autofocus>

                    @error('dependencia_afectiva')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="relacion_familiar" class="col-md-3 col-form-label text-md-right">{{ __('Relación Familiar') }}</label>
                <div class="col-md-8">
                    <input id="relacion_familiar" type="text" class="form-control @error('relacion_familiar') is-invalid @enderror" name="relacion_familiar" value="{{ old('relacion_familiar') }}" autofocus>

                    @error('relacion_familiar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="hobbies" class="col-md-3 col-form-label text-md-right">{{ __('Hobbies') }}</label>
                <div class="col-md-8">
                    <Textarea id="hobbies" type="text" class="form-control @error('hobbies') is-invalid @enderror" name="hobbies" value="{{ old('hobbies') }}"  autofocus>{{ old('hobbies') }}</Textarea>

                    @error('hobbies')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="motivo_ingreso" class="col-md-3 col-form-label text-md-right">{{ __('Motivo Ingreso') }}</label>
                <div class="col-md-8">
                    <Textarea id="motivo_ingreso" type="text" class="form-control @error('motivo_ingreso') is-invalid @enderror" name="motivo_ingreso" value="{{ old('motivo_ingreso') }}" autofocus>{{ old('motivo_ingreso') }}</Textarea>

                    @error('motivo_ingreso')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tipo_sangre" class="col-md-3 col-form-label text-md-right">{{ __('Tipo Sangre') }}</label>
                <div class="col-md-8">
                    <select name="tipo_sangre" class="form-control @error('tipo_sangre') is-invalid @enderror" value="{{ old('tipo_sangre') }}" name="tipo_sangre" type="text">>
                        <option value="{{ old('tipo_sangre') }}">{{ old('tipo_sangre') }}</option>                                   
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                    </select>
                    @error('tipo_sangre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="eps" class="col-md-3 col-form-label text-md-right">{{ __('EPS') }}</label>
                <div class="col-md-8">
                    <input id="eps" type="text" class="form-control @error('eps') is-invalid @enderror" name="eps" value="{{ old('eps') }}" autofocus>

                    @error('eps')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="morbilidad" class="col-md-3 col-form-label text-md-right">{{ __('Morbilidad') }}</label>
                <div class="col-md-8">
                    <input id="morbilidad" type="text" class="form-control @error('morbilidad') is-invalid @enderror" name="morbilidad" value="{{ old('morbilidad') }}" autofocus>

                    @error('morbilidad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="genero" class="col-md-3 col-form-label text-md-right">{{ __('Género') }}</label>
                <div class="col-md-8">
                    <select name="genero" class="form-control @error('genero') is-invalid @enderror" value="{{ old('genero') }}" name="genero" type="text">>
                        <option value="{{ old('genero') }}">{{ old('genero') }}</option>                                   
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otros">Otros</option>                                    
                    </select>
                    @error('genero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="medicinas" class="col-md-3 col-form-label text-md-right">{{ __('Medicinas') }}</label>
                <div class="col-md-8">
                    <Textarea id="medicinas" type="text" class="form-control @error('medicinas') is-invalid @enderror" name="medicinas" value="{{ old('medicinas') }}" autofocus>{{ old('medicinas') }}</Textarea>

                    @error('medicinas')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn-submit">
                {{ __('Registrarse') }}
            </button>
            
        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection
