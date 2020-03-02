@extends('layouts.app')

@section('content')

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="/../css/estilo.css">
     <div class="gradient"></div>

     <div class="container">          
          <form enctype="multipart/form-data" class="form" action="{{route('usuarios.destroy', $user)}}" class="d-inline" method="POST">
               <div class="form-header2"><h1 class="form-tittle2">{{ __('Opciones') }}</h1></div>
               <div class="dropdown">               
                    @if(auth()->user()->rol=="Administrador")
                    <div align="center">
                         <a href= "{{ url('usuarios/'.$user->id.'/edit') }}" class="btn btn-primary">Editar información del operador</a>
                         <button class='btn btn-danger' type="submit" name="eliminar" onclick="return confirm('¿Confirma que desea ELIMINAR de manera permanente el registro?')"></span>Eliminar Registro</button>
                    @endif
               </div>
               
               @csrf
               @method("DELETE")
               <div class="form-header2"><h1 class="form-tittle2">{{ __('Información') }}</h1></div><br>
               <fieldset disabled>
                    <div class="col-sm-6">
                         <div class="form-group row">
                              <label class="col-sm-6">Foto de perfil</label>
                              <div class="col-sm-3">
                                   <img src = "/uploads/avatar/{{$user->avatar}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Cédula</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->cedula}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Nombres</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->nombres}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Apellidos</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->apellidos}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Cargo</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->especialidad_->Nombre}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Nivel Educativo</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->nivel_educativo}}">
                              </div>
                         </div>
                    </div>

                    <div class="col-sm-6">
                         <div class="form-group row">
                              <label class="col-sm-6">Formación</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->formación}}">
                              </div>
                         </div>
                    
                         <div class="form-group row">
                              <label class="col-sm-6">Dirección</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->dirección}}">
                              </div>
                         </div>                        

                         <div class="form-group row">
                              <label class="col-sm-6">Fecha de Nacimiento</label>
                              <div class="col-sm-6">
                                   <input type="date" class="form-control" value="{{$user->fecha_de_nacimiento}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Fecha de Vinculación</label>
                              <div class="col-sm-6">
                                   <input type="date" class="form-control" value="{{$user->fecha_de_vinculación}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Rol</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->rol}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Teléfono</label>
                              <div class="col-sm-6">
                                   <input type="text" class="form-control" value="{{$user->telefono}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Correo Electrónico</label>
                              <div class="col-sm-6">
                                   <input type="email" class="form-control" value="{{$user->email}}">
                              </div>
                         </div>

                         <div class="form-group row">
                              <label class="col-sm-6">Contraseña</label>
                              <div class="col-sm-6">
                                   <input type="password" class="form-control" value="{{$user->password}}">
                              </div>
                         </div>
                    </div>
               </fieldset>    
          </form>
     </div>

@endsection
