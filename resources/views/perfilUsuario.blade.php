@extends('layouts.app')

@section('content')

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <div class="panel panel-default">
          <div class="panel-body">
               <form action="{{route('usuarios.destroy', $user)}}" class="d-inline" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="form-horizontal">
                    <fieldset disabled>
                         <div class="col-sm-6">
                              <div class="form-group row">
                                   <label class="col-sm-5">Cédula</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->cedula}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Nombres</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->nombres}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Apellidos</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->apellidos}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Cargo</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->cargo}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Nivel Educativo</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->nivel_educativo}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Formación</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->formación}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Dirección</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->dirección}}">
                                   </div>
                              </div>

                         </div>
                         <div class="col-sm-6">

                              <div class="form-group row">
                                   <label class="col-sm-5">Fecha de Nacimiento</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$user->fecha_de_nacimiento}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Fecha de Vinculación</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$user->fecha_de_vinculación}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Perfil</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->rol}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Teléfono</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->telefono}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Correo Electrónico</label>
                                   <div class="col-sm-6">
                                        <input type="email" class="form-control" value="{{$user->email}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Contraseña</label>
                                   <div class="col-sm-6">
                                        <input type="password" class="form-control" value="{{$user->password}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Género</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->género}}">
                                   </div>
                              </div>

                         </div>
                    </fieldset>
                         <div align="center">
                              <button class='btn btn-danger' type="submit" name="eliminar" onclick="return confirm('¿Confirma que desea ELIMINAR de manera permanente el registro?')"></span>Eliminar Registro</button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
@endsection
