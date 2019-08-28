@extends('layouts.app')

@section('content')

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <div class="panel panel-default">
          <div class="panel-body">
               <form action="{{route('miembros.eliminar', $user)}}" class="d-inline" method="POST">
                    @csrf
                    @method("DELETE")  
                    <div class="form-horizontal">
                         <div class="col-sm-6">
                              <div class="form-group row">
                                   <label class="col-sm-5">Cédula</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->cédula}}">                              
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5">Nombres</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->nombres}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Apellidos</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->apellidos}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Nivel Educativo</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->nivel_educativo}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Dirección</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->dirección}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Lugar de Nacimiento</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->Lugar_de_nacimiento}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Fecha de Nacimiento</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$user->fecha_de_nacimiento}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Fecha de Ingreso</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$user->fecha_de_ingreso}}">
                                   </div>
                              </div>
                    
                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Seguridad Social</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->seguridad_social}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Primer Acudiente</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->primer_acudiente}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Segundo Acudiente</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->segundo_acudiente}}">
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Servicio Funerario</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->servicio_funerario}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Entidad Funeraria</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->entidad_funeraria}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Dependencia Económica</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->dependencia_económica}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Dependencia Afectiva</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->dependencia_afectiva}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Relación Familiar</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->relación_familiar}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Hobbies</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->hobbies}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Motivo de Ingreso</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->motivo_ingreso}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Tipo de Sangre</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->Tipo_Sangre}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">EPS</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->EPS}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Morbilidad</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->morbilidad}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Género</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->género}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Medicinas</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->medicinas}}">
                                   </div>
                              </div>
                         </div>
                         
                         <div align="center">
                              <button class='btn btn-danger' type="submit" name="eliminar" onclick="return confirm('¿Confirma que desea ELIMINAR de manera permanente el registro?')"></span>Eliminar Registro</button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
@endsection

