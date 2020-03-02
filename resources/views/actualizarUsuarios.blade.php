@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form enctype="multipart/form-data" method="POST" action="{{route('usuarios.update', $usuario->id)}}" class="form">
        
        <div class="form-header"><br>
            <img src="/../img/form.png" class="center">
            <h1 class="form-tittle">{{ __('Formulario Edición de Usuario') }}</h1>
        </div>

        <div class="card-body">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label">{{ __('Foto de perfil') }}</label>
                <div class="col-md-8">                   
                    <img src = "/uploads/avatar/{{$usuario->avatar}}"><br>
                    <input type="file" name="avatar"><br>
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
                    <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$usuario->cedula}}">

                    <!-- @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="nombres" class="col-md-4 col-form-label">{{ __('Nombres') }}</label>
                <div class="col-md-8">
                    <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{$usuario->nombres}}" autofocus>

                    <!-- @error('nombres')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="apellidos" class="col-md-4 col-form-label">{{ __('Apellidos') }}</label>
                <div class="col-md-8">
                    <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{$usuario->apellidos}}" autofocus>

                    <!-- @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="nivel" class="col-md-4 col-form-label">{{ __('Nivel Educativo') }}</label>
                <div class="col-md-8">
                    <select name="nivel" class="form-control @error('nivel') is-invalid @enderror" value="">
                        <option value="{{$usuario->nivel_educativo}}">{{$usuario->nivel_educativo}}</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Tecnico Y/o Tecnologo">Tecnico Y/o Tecnologo</option>
                        <option value="Profesional">Profesional</option>
                        <option value="Postgrado">Postgrado</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="formacion" class="col-md-4 col-form-label">{{ __('Formación') }}</label>
                <div class="col-md-8">
                    <Textarea id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{$usuario->formación}}"autofocus>{{$usuario->formación}}</textarea>

                    <!-- @error('formacion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="perfil" class="col-md-4 col-form-label">{{ __('Perfil') }}</label>
                <div class="col-md-8">
                    <select name="perfil" class="form-control @error('perfil') is-invalid @enderror" value="{{$usuario->rol}}" name="perfil">>
                        <option value="{{$usuario->rol}}">{{$usuario->rol}}</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Operador">Operador</option>

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="cargo" class="col-md-4 col-form-label">{{ __('Cargo') }}</label>
                <div class="col-md-8">
                    <input id="cargo" type="text" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{$usuario->cargo}}" autofocus>

                    <!-- @error('cargo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="direccion" class="col-md-4 col-form-label">{{ __('Dirección') }}</label>
                <div class="col-md-8">
                    <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{$usuario->dirección}}"autofocus>

                    <!-- @error('direccion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="telefono" class="col-md-4 col-form-label">{{ __('Telefono') }}</label>
                <div class="col-md-8">
                    <input id="telefono" type="integer" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{$usuario->telefono}}" autofocus>

                    <!-- @error('telefono')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="nacimiento" class="col-md-4 col-form-label">{{ __('Fecha de Nacimiento') }}</label>
                    <div class="col-md-8">
                        <input class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" value="{{$usuario->fecha_de_nacimiento}}" type="date">
                    </div>
            </div>

            <div class="form-group row">
            <label for="vinculacion" class="col-md-4 col-form-label">{{ __('Fecha de Vinculación') }}</label>
                <div class="col-md-8">
                <input class="form-control @error('vinculacion') is-invalid @enderror" name="vinculacion" value="{{$usuario->fecha_de_vinculación}}" type="date">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label">{{ __('Correo Electronico') }}</label>
                <div class="col-md-8">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}">

                    <!-- @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label">{{ __('Contraseña') }}</label>
                <div class="col-md-8">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                    <!-- @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror -->
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirmar Contraseña') }}</label>
                <div class="col-md-8">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
            </div>            
           
            <button type="submit" class="btn-submit">
                {{ __('Actualizar') }}
            </button>           

        </div>
    </form>
</div>
@endsection
