@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('usuarios.update', $usuario->id)}}">
                    @csrf
                    @method('PUT')

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('No Identificación') }}</label>
                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$usuario->cedula}}">

                                <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombres" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{$usuario->nombres}}" autofocus>

                                <!-- @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{$usuario->apellidos}}" autofocus>

                                <!-- @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nivel" class="col-md-4 col-form-label text-md-right">{{ __('Nivel Educativo') }}</label>
                            <div class="col-md-6">
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
                            <label for="formacion" class="col-md-4 col-form-label text-md-right">{{ __('Formación') }}</label>
                            <div class="col-md-6">
                                <Textarea id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{$usuario->formación}}"autofocus>{{$usuario->formación}}</textarea>

                                <!-- @error('formacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perfil" class="col-md-4 col-form-label text-md-right">{{ __('Perfil') }}</label>
                            <div class="col-md-6">
                                <select name="perfil" class="form-control @error('perfil') is-invalid @enderror" value="{{$usuario->perfil}}" name="perfil">>
                                    <option value="{{$usuario->rol}}">{{$usuario->rol}}</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Operador">Operador</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>
                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{$usuario->cargo}}" autofocus>

                                <!-- @error('cargo')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>
                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{$usuario->dirección}}"autofocus>

                                <!-- @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                            <div class="col-md-6">
                                <input id="telefono" type="integer" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{$usuario->telefono}}" autofocus>

                                <!-- @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                                <div class="col-md-6">
                                    <input class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" value="{{$usuario->fecha_de_nacimiento}}" type="date">
                                </div>
                        </div>

                        <div class="form-group row">
                        <label for="vinculacion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Vinculación') }}</label>
                            <div class="col-md-6">
                            <input class="form-control @error('vinculacion') is-invalid @enderror" name="vinculacion" value="{{$usuario->fecha_de_vinculación}}" type="date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}">

                                <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                <!-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
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
