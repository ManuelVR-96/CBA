@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilo.css">

<div class="container">    
    <form enctype="multipart/form-data" method="POST" action="{{route('register')}}" class="form">
    
        <div class="form-header"><br>
            <img src="/../img/form.png" class="center">
            <h1 class="form-tittle">{{ __('Formulario de Registro') }}</h1>
        </div>

        <div class="card-body">
            @csrf

            <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label">{{ __('Foto de perfil') }}</label>
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
                <label for="id" class="col-md-4 col-form-label">{{ __('No Identificación') }}</label>
                <div class="col-md-8">
                    <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}">

                    @error('cedula')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="nombres" class="col-md-4 col-form-label">{{ __('Nombres') }}</label>
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
                <label for="apellidos" class="col-md-4 col-form-label">{{ __('Apellidos') }}</label>
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
                <label for="nivel" class="col-md-4 col-form-label">{{ __('Nivel Educativo') }}</label>
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

            <div class="form-group row" >
                <label for="formacion" class="col-md-4 col-form-label">{{ __('Formación') }}</label>
                <div class="col-md-8">
                    <input id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{ old('formacion') }}"  autofocus>

                    @error('formacion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="perfil" class="col-md-4 col-form-label">{{ __('Rol') }}</label>
                <div class="col-md-8">
                    <select name="perfil" id="perfil" class="form-control @error('perfil') is-invalid @enderror" value="{{ old('perfil') }}" onchange="mostrar(this)" >
                        <option value="{{old('perfil')}}">{{old('perfil')}}</option>                                   
                        <option value="Administrador">Administrador</option>
                        <option value="Operador">Operador</option>
                    </select>
                    @error('perfil')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row" id = "cargo_">
                <label for="encargado" class="col-md-4 col-form-label">{{ __('Cargo') }}</label>
                <div class="col-md-8">
                    
                    <select id="cargo" type="text" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{ old('cargo') }}" autofocus>
                    <option value="{{ old('cargo') }}">{{ old('cargo') }}</option>
                        @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}">{{$especialidad->Nombre}}</option>
                        @endforeach()
            
                    </select>
                    @error('cargo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>

            <div class="form-group row">
                <label for="direccion" class="col-md-4 col-form-label">{{ __('Dirección') }}</label>
                <div class="col-md-8">
                    <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}"autofocus>

                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="telefono" class="col-md-4 col-form-label">{{ __('Telefono') }}</label>
                <div class="col-md-8">
                    <input id="telefono" type="integer" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" autofocus>

                        @error('telefono')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">                            
                <label for="nacimiento" class="col-md-4 col-form-label">{{ __('Fecha de Nacimiento') }}</label>
                    <div class="col-md-8">
                        <input class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" value="{{ old('nacimiento') }}" type="date">                                        
                    </div>                           
            </div>

            <div class="form-group row">                            
            <label for="vinculacion" class="col-md-4 col-form-label">{{ __('Fecha de Vinculación') }}</label>
                <div class="col-md-8">
                <input class="form-control @error('vinculacion') is-invalid @enderror" name="vinculacion" value="{{ old('vinculacion') }}" type="date">                                        
                </div>                           
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label">{{ __('Correo Electronico') }}</label>
                <div class="col-md-8">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label">{{ __('Contraseña') }}</label>
                <div class="col-md-8">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirmar Contraseña') }}</label>
                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
            </div>
            
            <br>
            <button type="submit"  class="btn-submit">
                {{ __('REGISTRAR USUARIO') }}
            </button>
         
        </div>
    </form>
</div>
<div class="gradient"></div>



@endsection
