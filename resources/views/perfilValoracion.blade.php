@extends('layouts.app')

@section('content')

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <div class="panel panel-default">
          <div class="panel-body">
               <form action="{{route('valoraciones.eliminar', $valoraciones)}}" class="d-inline" method="POST">
                    @csrf
                    @method("DELETE")
                    <div class="form-horizontal">
                    <fieldset disabled>
                         <div class="col-sm-6">
                              <div class="form-group row">
                                   <label class="col-sm-5">Paciente</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$valoraciones->paciente}}">
                                   </div>
                              </div>

                               <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Encargado</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$valoraciones->encargado}}">
                                   </div>
                              </div>

                               <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Especialidad</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$valoraciones->especialidad}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Descripción</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$valoraciones->descripción}}">
                                   </div>
                              </div>
                         </fieldset>
                              <div align="center">
                                   <button class='btn btn-danger' type="submit" name="eliminar" onclick="return confirm('¿Confirma que desea ELIMINAR de manera permanente el registro?')"></span>Eliminar Valoración</button>
                              </div>
                         </div>
                    </div>
               </form>
          </div>
     </div>
@endsection
